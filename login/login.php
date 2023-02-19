<?php session_start(); ?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <!-- style.css -->
  <link rel="stylesheet" href="../style/login-style.css">
  <title>Login/Sign Up</title>
</head>

<body>
  <!-- Html for the login page -->
  <div class="container my-3">
    <div class="login-main">
      <div class="login-main--container container-shrimp">
        <form method="post" action="login-validate.php">
          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-10">
              <input type="name" class="form-control" name="name" id="inputEmail3" placeholder="User name" required>
            </div>
          </div>
          <div class="form-group row">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-10">
              <input type="password" class="form-control" name="pass" id="inputPassword3" placeholder="Password" required>
            </div>
          </div>
          <div class="form-group row">
            <div class="col-sm-10">
              <button type="submit" name="button-submit" class="btn btn-success">Sign in</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
</body>

</html>