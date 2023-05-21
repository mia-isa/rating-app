<?php session_start(); 

  $itemsJSON = file_get_contents("https://php-always-on.toddbenrud.repl.co/webDesign/reviewCRUD/itemData/item.json");
  $itemsArray =json_decode($itemsJSON, TRUE);

$nav = '<ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link" aria-current="page" href="/home.php">Home</a>
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

?>
