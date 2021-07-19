<?php 
    function toHeader($mgs = "Error")
    {
        header("Location: registar.php?error=$mgs");
    }
?>