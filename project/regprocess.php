<?php
if (isset($_POST['submit'])) {
    require_once 'database.php';
    require_once 'func.php';
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirmpassword = $_POST['confirmpassword'];

    //Check if field empty  
    if (empty($username) || empty($password) || empty($confirmpassword)) {
        toHeader($mgs = "Emptyfield&username=" . $username);
        exit();
    }
    // check if valid username with at lest 2 char 
    elseif (!preg_match('/^[a-z\d_]{2,20}$/i', $username)) {
        toHeader($mgs = "invalidUserName&username=" . $username);
        exit();
    }
    // check if password match
    elseif ($password !== $confirmpassword) {
        toHeader($mgs = "passwordDon`tMatch&username=" . $username);
        exit();
    } else {
        $sql = "SELECT name FROM user WHERE name =?";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            toHeader($mgs = "mysqlError");
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, "s", $username);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $rowCount = mysqli_stmt_num_rows($stmt);

            if ($rowCount > 0) {
                toHeader($mgs = "userNameTaken");
                exit();
            } else {
                $sql = "INSERT INTO user(name,password) values(?,?)";
                $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    toHeader($mgs = "mysqlError");
                } else {
                    $hashPassword = password_hash($password, PASSWORD_DEFAULT);

                    mysqli_stmt_bind_param($stmt, "ss", $username, $hashPassword);
                    mysqli_stmt_execute($stmt);
                    toHeader($mgs = "registered");
                    exit();
                }
            }
        }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}
