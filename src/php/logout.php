<?php 
session_start();
unset($_SESSION['user']);
session_write_close();
header('location: /index.php');

?>