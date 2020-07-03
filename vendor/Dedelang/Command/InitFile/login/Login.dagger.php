<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

</head>
<body>

<div class="container jumbotron-fluid">
<center>
  <h1>Page Login</h1>
  <?php echo get_error("FailLogin"); ?>
  <form action="login" method="POST"> <?php  Html::csrf(); ?>
  <div class="form-group">
    <label for="email">Username address:</label>
    <input type="text" name="user_username" class="form-control" id="email">
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" name="user_password" class="form-control" id="pwd">
  </div>
  <a href="register" class="btn btn-default">register</a>
  <button type="submit" class="btn btn-default">Log In</button>
</form>
</center>
</div>

</body>
</html>
