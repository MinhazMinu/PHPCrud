<?php

require_once 'header.php';
?>
<?php

if (isset($_SESSION['sessionID'])) {
    echo " logged in " . $_SESSION['sessionName'];
} else {
    echo "you have to logIn";
}

?>

<?php
require_once 'footer.php';
?>