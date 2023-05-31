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

    <title>Edit your profile</title>
  </head>

  <body>
  <div class="container">
  <div class="row">
    <div class="col mt-2">
      <h2>Edit your profile</h2>
    </div>
  </div>
</div>

  <div class="row m-2">
    <div class="col m-2">
      <form action="https://php-always-on.toddbenrud.repl.co/webDesign/reviewCRUD/accessPoint.php?reason=editProfile" method="post">
        <label>First name</label><br>
        <input name="fName"><br><br>
        <label>Last name</label><br>
        <input name="lName"><br><br>
        <label>Your website</label><br>
        <input name="siteURL"><br><br>
        <label>Put an image</label><br>
        <input name="img"><br><br>
        <label>How do you identify?</label><br>
        <select name="gender">
          <option value=0>Male</option>
          <option value=1>Female</option>
          <option value="">Non-binary/Gender non-conforming</option>
        </select><br><br>
        <input type="hidden" name="uid" value="<?php echo $_SESSION['status']['uid'];?>" required>
  <input type="hidden" name="hash" value="<?php echo $_SESSION['status']['hash'];?>" required>
  <input type="hidden" name="url" value="https://web-final-crud-webdesignghs2022-1.webdesignghs2022.repl.co/pages/editProfile.php" required>
  <input type="hidden" name="pword" value="<?php echo $_SESSION['status']['pword'];?>" required>
        <input type="submit" value="Submit" name="BTN_editProfile">
      </form>
    </div>
  </div>

  </body>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="/script.js" name="js">
   
  </body>
</html>
