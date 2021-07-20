<?php
require_once 'header.php';
require_once 'database.php';


?>
<?php
// . "' WHERE ID='" . $_GET["userid"] . 

if (isset($_POST['edit'])) {



    $sql = "UPDATE user set name = '" . $_POST["username"] . "' WHERE ID =  '" . $_POST["id"] . "'";
    if (mysqli_query($conn, $sql)) {
        header('Refresh:2; url=showtable.php');

        // Then send any other HTML-output
        echo '<section class="vh-100 gradient-custom">
        <div class="p-5 mb-2 bg-success text-white w-50 mx-auto"> Updated!!!!</div>
        </section>';
    } else {
        '<section class="vh-100 gradient-custom">
        <div class="p-5 mb-2 bg-success text-white w-50 mx-auto"> Error </div>
        </section>';
    }
    mysqli_close($conn);
}

?>


<?php
require_once 'footer.php';
?>