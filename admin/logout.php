<?php 

session_start();
session_destroy();
$_SESSION = [];
unset($_SESSION['login']);

header('Location: login.php');