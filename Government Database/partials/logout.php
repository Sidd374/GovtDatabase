<?php


session_start(); // this starts the session

echo 'logging out';

session_destroy();
header("Location: /dbmsProject/index.php");



?>