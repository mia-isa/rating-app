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

    <title>Your profile | rate with isa!</title>
  </head>

  <body>
  <div class="container">
  <div class="row">
    <div class="col mt-2">
      <h2>Your profile</h2>
    </div>
  </div>
</div>

  <div class="row m-2">
    <div class="col m-2">
      <?php 
$edit = "";
foreach ($userArray as $key => $user) {
  if ($user["uid"] == $_SESSION['status']['uid']) {
  $edit = '<a href="/pages/editProfile.php">Edit Profile</a>';

    
    if ($user['gender'] == 0) {
      $gender = "female";
    } elseif ($user['gender'] == 1) {
      $gender = "male";
    } else {
      $gender = "non-binary/gender non-conforming";
    }
    echo '<img src="' .$user['img'] . '" width="200px" height="200px">'."<br>";
    echo "<h4>".$user["fName"]." ".$user['lName']." | ".$edit."</h4><br>";
    echo "My email is: <a href='mailto:".$user["email"]."'>".$user["email"]."</a><br>";
    echo "My website is: <a href=".$user['siteURL'].">".$user["siteURL"]."</a><br>";
    echo "I identify as: ".$gender."<br>";
  }
}
    ?>
    </div>
  </div>


  </body>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="/script.js" name="js">
   
  </body>
</html>
