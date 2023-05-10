<?php include($_SERVER['DOCUMENT_ROOT'].'/functions.php');

$password = $_GET['password']; 
$hashPass= password_hash($password, PASSWORD_DEFAULT); 

if (isset($_GET['uid'])){

$_SESSION['status']['email'] = $_GET['email']; 
$_SESSION['status']['password'] = $hashPass;
$_SESSION['status']['url'] = $_GET['url'];
$_SESSION['status']['uid'] = $_GET['uid'];
$_SESSION['status']['access'] = $_GET['access'];

  
} else {
  session_unset();
  session_die();
}

header("Location: /home.php");

?>