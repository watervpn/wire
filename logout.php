<?php
session_start();
unset($_SESSION['user_role']);
header("Location: index.php");
die();
?>