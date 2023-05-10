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

    <title>RavingVGs | Home </title>
  </head>

  <body>
  <div class="container m-2">
  <div class="row">
    <div class="col mt-2">
      <h2>Your Homepage</h2>
    </div>
  </div>
</div>

  <div class="row">
    <div class="col-9">

<div class="card m-4">
  <div class="card-header">
    Create a post
  </div>
  <div class="card-body">
    <form action="/home.php" method="post" name="createPost">
      <label for="title">Give your post a title!</label>
      <input type="text" name="postTitle">
    <label for="description">What is your post about?</label>
      <input type="text" name="postContent">
      <label for="stars">What do you rate the game you're reviewing?</label>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>
      <br>
      <input type="checkbox">This post might be controversial!
    <button type="submit" value="submit">Create post</button>
    </form>
  </div>
</div>
 
    </div>
    <div class="col-3">
      <div class="card" style="width: 18rem;">
  <img src="https://i.pinimg.com/564x/3e/30/9b/3e309b05d731b7ed8be54730236f9e3b.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <p>Before typing, please remember our Community Guidelines.</p>
        <ul>
          <li>Please be respectful of other members.</li>
          <li>Any hate speech will not be tolerated.</li>
          <li>The Moderating Team has the right to remove your post if it does not adhere to the Community Guidelines.</li>
        </ul>
  </div>
</div>
    </div>
  </div>

    <div class="row">
    <div class="col">
      Column
    </div>
    <div class="col">
      Column
    </div>
    <div class="col">
      Column
    </div>
  </div>


  </body>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="/script.js" name="js">
   
  </body>
</html>