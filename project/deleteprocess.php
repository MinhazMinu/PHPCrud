<?php
require_once 'header.php';
require_once 'database.php';
?>

<?php

$sql = "DELETE FROM user WHERE ID='" . $_GET["userid"] . "'";
if (mysqli_query($conn, $sql)) {
    header('Refresh:2; url=showtable.php');

    // Then send any other HTML-output
    echo '<section class="vh-100 gradient-custom">
        <div class="p-5 mb-2 bg-success text-white w-50 mx-auto"> Deleted!!!!</div>
        </section>';
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>


<?php
require_once 'footer.php';
?>