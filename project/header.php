<?php
session_start();
require_once 'database.php';
require_once 'func.php';
require_once 'regprocess.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<nav class="navbar navbar-expand-lg navbar-dark px-5 shadow-lg" style=" background-color: #5f10a1;">
    <div class=" container-fluid">

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">

                    <?php
                    if (isset($_SESSION['sessionID'])) {
                        echo ' <a class="nav-link" href="logout.php">'
                            . "Log Out" .
                            '</a>';
                    } else {
                        echo ' <a class="nav-link" href="login.php">'
                            . "Log In" .
                            '</a>';
                    }
                    ?>
                    
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="registar.php">Registration </a>
                </li>

            </ul>
        </div>
    </div>
</nav>

<body>