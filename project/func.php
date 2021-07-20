<?php
function toHeader($mgs = "Error")
{
    header("Location: registar.php?error=$mgs");
}
function toIndex($mgs = "Error")
{
    header("Location: index.php?mgs=$mgs");
}
