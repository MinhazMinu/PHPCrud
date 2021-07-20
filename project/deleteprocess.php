<?php
require_once 'header.php';
require_once 'database.php';
?>

<?php

$sql = "DELETE FROM user WHERE ID='" . $_GET["userid"] . "'";
if (mysqli_query($conn, $sql)) {
    header('Refresh:3; url=showtable.php');

    // Then send any other HTML-output
    echo "Deleted";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>


<?php
require_once 'footer.php';
?>