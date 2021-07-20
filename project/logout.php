<?php
session_start();
require_once 'func.php';
session_destroy();
toIndex();
exit();
