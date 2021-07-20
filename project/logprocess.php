<?php
if (isset($_POST['submit'])) {
    require_once 'database.php';
    require_once 'func.php';

    $username = $_POST['username'];
    $password = $_POST['password'];

    if (empty($username || empty($password))) {
        toIndex($mgs = "FieldCannotBeEmpty");
        exit();
    } else {
        $sql = "SELECT * FROM user where name = ?";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            toIndex($mgs = "sqlError");
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, "s", $username);
            mysqli_stmt_execute($stmt);
            $res = mysqli_stmt_get_result($stmt);
            if ($row = mysqli_fetch_assoc($res)) {
                $passChk = password_verify($password, $row['password']);
                if ($password == false) {
                    toIndex($mgs = "Invalid userName or passWord");
                    exit();
                } elseif ($password == true) {
                    session_start();
                    $_SESSION['sessionID'] = $row['ID'];
                    $_SESSION['sessionName'] = $row['name'];

                    toIndex($mgs = "loggedIn");
                    exit();
                } else {
                    toIndex($mgs = "Invalid userName or passWord");
                    exit();
                }
            } else {
                toIndex($mgs = "NoUserFound");
                exit();
            }
        }
    }
} else {
    toIndex($mgs = "AccessForbidden");
    exit();
}
