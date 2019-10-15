<?php 

session_start();

// remove all session vars
session_unset();

// destroy the session
session_destroy();

//redirect
header('Location: ./login.php');

 ?>