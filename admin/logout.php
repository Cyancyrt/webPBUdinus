<?php
session_start();

// menghancurkan session
session_destroy();

// redirect ke login.php
header('Location: login.php');
exit;
?>