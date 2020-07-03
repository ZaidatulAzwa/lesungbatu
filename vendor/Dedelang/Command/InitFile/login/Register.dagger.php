<!DOCTYPE html>
<html lang="en">
<head>
  <title>Register</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <link href="public/css/blog.css" rel="stylesheet">
</head>
<body>
<div class="col-xs-12" style="height:10px;"></div>
<div class="container jumbotron-fluid">
<center>
  <h1>Page Register</h1>
  <?php echo get_error("FailLogin"); ?>
  <form action="register" method="POST"> <?php  Html::csrf(); ?>

  <div class="form-group">
    <label for="email"><b>Email</b></label>
    <input type="text" name="user_email" class="form-control" required>
  </div>
  <div class="form-group">
    <label for="email"><b>Username</b></label>
    <input type="text" name="User_username" class="form-control" required>
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" name="user_password" class="form-control" id="pwd">
  </div>
  <div class="form-group">
    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" name="user_password_repeat" class="form-control" required>
  </div>
  <a href="login" class="btn btn-default">Log In</a>
  <button type="submit" class="btn btn-default">Submit</button>
</form>
</center>
</div>

</body>
</html>
