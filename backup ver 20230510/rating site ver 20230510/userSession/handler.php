<?php include($_SERVER['DOCUMENT_ROOT'].'/functions.php');
  
$_SESSION["form"]["username"] = $_GET['username'];
$_SESSION["form"]["password"] = $_GET['password'];
$_SESSION["form"]["id"] = $_GET['id'];
  
if (isset("btn_login") && $_SESSION['form']['login'] != NULL) {
  echo "Welcome back! You're logged in!"; 
  echo "<pre>"; 
  var_dump($_SESSION); 
  echo "</pre>";

}
?>