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

    <title>Hello, world!</title>
  </head>

  <body>
  <div class="container">
  <div class="row">
    <div class="col mt-2">
      <h2>Log in</h2>
    </div>
  </div>
</div>

  <div class="row m-2">
    <div class="col m-2">
<form action="https://php-always-on.toddbenrud.repl.co/webDesign/reviewCRUD/accessPoint.php" method="post" autocomplete="off" name="login"><br>
   <input id="url" type="hidden" class="form-control" name="url" value="https://web-final-crud-webdesignghs2022-1.webdesignghs2022.repl.co/index.php" required>
  <label for="email">Email</label><br>
			<input type="email" class="form-control" name="email" value=""><br>
  <label class="text-muted" for="password">Password</label><BR>
      <input type="password" class="form-control" name="pword" required><BR>
<input type="submit" value="Submit" name="BTN_login">
</form> 
    </div>
  </div>

    <div class="row m-2">
    <div class="col m-2">
      <?php 
echo '<pre>'; 
var_dump($_GET);
echo '</pre>'; 

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

verifyLogin();
      ?>
    </div>
    </div>

  </body>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="/script.js" name="js">
   
  </body>
</html>
