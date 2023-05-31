<?php include($_SERVER['DOCUMENT_ROOT'].'/functions.php'); ?>
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

    <title>Edit your item</title>
  </head>

  <body>
  <div class="container">
  <div class="row">
    <div class="col mt-2">
      <h2>Edit an item</h2>
    </div>
  </div>
</div>

  <div class="row">
    <div class="col">
       <?php
  foreach($itemsArray as $item){
    if ($item['uid'] == $_GET['uid']) {
    echo $item['uid']."<br>";
    echo "<a href='/pages/itemEdit.php?uid=".$item['uid']."'>".$item['name']."</a><br>";
    echo $item['description']."<br>";
    echo '<img src="' .$item['image_url'] . '" width="400px" height="400px">';
    echo "<br>";
    echo $item['category']."<br>";
    echo $item['creator']."<br>";
    echo $item['status']."<hr>";
}
  }
?>
    </div>
    <div class="col">
<form action="https://php-always-on.toddbenrud.repl.co/webDesign/reviewCRUD/accessPoint.php?reason=editItem" method="post">
  <label>Change title</label><br>
<input name="itemTitle"><br><br>
  <label>Replace image</label><br>
<input type="file" name="itemImage"><br><br>
  <label>Edit description</label><br>
<input name="itemDescription"><br><br>
  <label>Change category</label><br>
<select name="itemCategory">
  <?php foreach($catsArray as $category){
    echo '<option value="'.$category.'">'.$category.'</option>'; };
        ?>
</select><br><br>
<input type="hidden" name="uid" value="<?php echo $_SESSION['status']['uid'];?>" required>
  <input type="hidden" name="hash" value="<?php echo $_SESSION['status']['hash'];?>" required>
  <input type="hidden" name="url" value="https://web-final-crud-webdesignghs2022-1.webdesignghs2022.repl.co/pages/itemEdit.php" required>
  <input type="hidden" name="pword" value="<?php echo $_SESSION['status']['pword'];?>" required>
<input type="submit" value="Submit" name="BTN_newItem">
</form>
    </div>
  </div>


  </body>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="/script.js" name="js">
   
  </body>
</html>
