<?php include($_SERVER['DOCUMENT_ROOT'].'/functions.php') ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link href="/style.css" name="stylesheet">

<!-- nav -->
    <?php echo $nav; ?>
  </head>

    <title>rate with isa! | rate item</title>
  </head>

  <body>
  <div class="container">
  <div class="row">
    <div class="col mt-2">
      <h2>rate item</h2>
    </div>
  </div>
</div>

  <div class="row">
    <div class="col">
    <?php
  foreach($itemsArray as $item){
    if ($item['uid'] == $_GET['uid']) {
    echo $item['uid']."<br>";
    echo "<a href='/pages/rateItem.php?uid=".$item['uid']."'>".$item['name']."</a><br>";
    echo $item['description']."<br>";
    echo '<img src="' .$item['image_url'] . '" width="400px" height="400px">';
    echo "<br>";
    echo $item['category']."<br>";
    echo $item['creator']."<br>";
    echo $item['status']."<hr>";
}
  }

// echo '<pre>';
// var_dump($_SESSION['status']['uid']);
// echo '</pre>';
?>
    </div>
  </div>

    <div class="row m-2">
    <div class="col m-2">
      <h4>Rate an item!</h4><br>
<form action="https://php-always-on.toddbenrud.repl.co/webDesign/reviewCRUD/accessPoint.php?reason=rateItem" method="post">
  <input type="hidden" name="itemUID" value="<?php echo $_GET['uid'];?>">
  <input type="hidden" name="userUID" value="<?php echo $_SESSION['status']['uid'];?>">
  <input type="hidden" name="url" value="https://web-final-crud-webdesignghs2022-1.webdesignghs2022.repl.co/pages/rateItem.php">
  <input type="hidden" name="hash" value="<?php echo $_SESSION['status']['hash'];?>">
  <input type="hidden" name="pword" value="<?php echo $_SESSION['status']['pword'];?>">
  <label>Do you recommend this item?</label><br>
  <input name="itemRecommend"><br><br>
  <label>What do you rate this item? (out of 5)</label><br>
  <input name="itemRate"><br><br>
  <label>Say something</label><br>
  <input name="itemComment"><br><br>
  <input name="BTN_rateItem" type="submit" value="Submit">
</form>
    </div>
  </div>


  </body>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="/script.js" name="js">
   
  </body>
</html>
