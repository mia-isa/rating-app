<?php include($_SERVER['DOCUMENT_ROOT'].'/functions.php');
session_unset(); 
session_destroy(); 
header("Location: /index.php");
?>