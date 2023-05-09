<?php include($_SERVER['DOCUMENT_ROOT'].'/functions.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="author" content="Muhamad Nauval Azhar">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<meta name="description" content="This is a login page template based on Bootstrap 5">
	<title>RavingVGs | Login</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <link href='/style.css' name="stylesheet">
</head>

<body>
	<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-sm-center h-100">
				<div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9">
					<div class="text-center my-5">
					</div>
					<div class="card shadow-lg">
						<div class="card-body p-5">
							<h1 class="fs-4 card-title fw-bold mb-4">Welcome back!</h1>
              
<form action="/userSession/accessPoint.php" method="get" class="needs-validation" novalidate="" autocomplete="off" name="login">
	<div class="mb-3">
		<label class="mb-2 text-muted" for="email">E-Mail Address</label>
			<input id="email" type="email" class="form-control" name="email" value="" required autofocus>
		<div class="invalid-feedback">
			Email is invalid
	 </div>
  </div>
<div class="mb-3">
	<div class="mb-2 w-100">
		<label class="text-muted" for="password">Password</label>
		<a href="/userSession/forgot.php" class="float-end">
			Forgot Password?
		</a>
	</div>
  <input id="url" type="hidden" class="form-control" name="url" value="https://web-final-crud-webdesignghs2022-1.webdesignghs2022.repl.co" required autofocus>
		<div class="invalid-feedback">
			Email is invalid
	 </div>
<input id="password" type="password" class="form-control" name="password" required>
	<div class="invalid-feedback">
		Password is required
	 </div>
	</div>

	 <div class="d-flex align-items-center">
	<button name="btn_login" type="submit" class="btn btn-primary ms-auto">
		Login
	 </button>
  </div>
</form>
				</div>
						<div class="card-footer py-3 border-0">
							<div class="text-center">
								Don't have an account? <a href="/userSession/register.php" class="text-dark">Create One</a>
							</div>
						</div>
					</div>
					<div class="text-center mt-5 text-muted">
						Welcome (or welcome back) to RavingVGs! We hope you have a wonderful time :)
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="/script.js"></script>
</body>
</html>
