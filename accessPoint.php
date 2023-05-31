<?php include($_SERVER['DOCUMENT_ROOT'].'/functions.php'); 

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
        $_SESSION['status']['itemUID'] = $_GET['itemUID'];
        $_SESSION['status']['userUID'] = $_GET['userUID'];
      }
    }
  }  elseif($_GET['reason'] == 'newItem') {
      header('Location: /pages/item.php?uid='.$_GET['uid']);

      }elseif($_GET['reason'] == 'rateItem') {
          header('Location: /pages/rateItem.php?uid='.$_GET['uid']);
      }
  elseif($_GET['reason'] == 'editItem') {
          header('Location: /pages/itemEdit.php?uid='.$_GET['uid']);
    
      } elseif ($_GET['reason'] == 'editProfile') {
    foreach ($userArray as $user) {
          $_SESSION['status']['fName'] = $_GET['fName'];
          $_SESSION['status']['lName'] = $_GET['lName'];
          $_SESSION['status']['email'] = $_GET['email'];
          $_SESSION['status']['gender'] = $_GET['gender'];
          $_SESSION['status']['siteURL'] = $_GET['siteURL'];
          $_SESSION['status']['img'] = $_GET['img'];
    }
    
    header('Location: /pages/profile.php?uid='.$_GET['uid']);
      }
}

session_unset();
die();
?>
