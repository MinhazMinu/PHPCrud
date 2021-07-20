<?php

require_once 'header.php';
?>
<?php

if (isset($_SESSION['sessionID'])) {
    echo
    '<section class="vh-100 gradient-custom">
        <div class="p-5 mb-2 bg-success text-white w-50 mx-auto">Welcome! </div>' . $_SESSION["sessionID"] . '
        </section>';
} else {
    echo
    '<section class="vh-100 gradient-custom">
        <div class="p-5 mb-2 bg-info text-white w-50 mx-auto"> Please Log In...</div>
        </section>';;
}

?>

<?php
require_once 'footer.php';
?>