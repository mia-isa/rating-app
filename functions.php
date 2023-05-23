<?php session_start(); 

function verifyLogin() {
      $loggedIn = 'no';
      if (isset($_SESSION['status']['uid'])) {
        if (is_numeric($_SESSION['status']['uid']) && strlen($_SESSION['status']['uid']) == 3) {
            $loggedIn = 'yes';
        } // END:: if() numeric and 3 chars
      }// END:: if() isset
  
      if ($loggedIn == 'no'){
        session_unset();
        die();
      }// END:: if() redirect
    
  } // END:: FUNCTION

  $itemsJSON = file_get_contents("https://php-always-on.toddbenrud.repl.co/webDesign/reviewCRUD/itemData/item.json");
  $itemsArray =json_decode($itemsJSON, TRUE);

  $rateJSON = file_get_contents("https://php-always-on.toddbenrud.repl.co/webDesign/reviewCRUD/itemData/rate.json"); 
  $rateArray = json_decode($rateJSON, TRUE);

  $catsJSON = file_get_contents("https://php-always-on.toddbenrud.repl.co/webDesign/reviewCRUD/itemData/categories.json"); 
  $catsArray = json_decode($catsJSON, TRUE);

$nav = '<ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link" aria-current="page" href="/pages/item.php">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" aria-current="page" href="/index.php">Login</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="/userProfile/homeProfile.php">Your profile</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="/accessPoint.php">Log out</a>
  </li>
</ul>';

if (isset($_GET['uid']) && isset($_GET['hash'])) {

  if (strlen($_GET['uid']) == 3) {
    if (strlen($_GET['hash']) == 10) {
      if ($_GET['access'] == 1) {
        $_SESSION['status']['pword'] = $_GET['pword'];
        $_SESSION['status']['fName'] = $_GET['fName'];
        $_SESSION['status']['lName'] = $_GET['lName'];
        $_SESSION['status']['uid'] = $_GET['uid'];
        $_SESSION['status']['hash'] = $_GET['hash'];
        $_SESSION['status']['email'] = $_GET['email'];
        $_SESSION['status']['gender'] = $_GET['gender'];
        $_SESSION['status']['siteURL'] = $_GET['siteURL'];
        $_SESSION['status']['access'] = $_GET['access'];
        $_SESSION['status']['referer'] = $_GET['referer'];
        $_SESSION['status']['itemUID'] = $_GET['uid'];
      }
    }
  }  elseif($_GET['reason'] == 'newItem') {
      header('Location: /pages/item.php?uid='.$_GET['uid']);

      }elseif($_GET['reason'] == 'rateItem') {
          header('Location: /pages/item.php?uid='.$_GET['itemUID']);
      }
}

?>
