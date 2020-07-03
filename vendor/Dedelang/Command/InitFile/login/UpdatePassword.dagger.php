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
  <h1>Update Password</h1>
  <?php if(Flash::has('error_msg')){ ?>
    <div class="col-12">
        <div class="alert alert-danger alert-dismissable"  id="success-msg">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><strong>Error! </strong>
            <?php echo safe(Flash::message('error_msg')); ?>
        </div>
    </div>
  <?php } ?>
  <form action="<?php echo base_url('update-password'); ?>" method="POST"> <?php  Html::csrf(); ?>
  <div class="form-group">
    <label for="Current Password:">Current Password:</label>
    <input type="password" name="current_password" class="form-control" id="email">
  </div>
  <div class="form-group">
    <label for="pwd">New Password:</label>
    <input type="password" name="new_password" class="form-control" id="pwd">
  </div>
  <div class="form-group">
    <label for="pwd">Confirmation Password:</label>
    <input type="password" name="confirmPassword" class="form-control" id="pwd">
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>
</center>
</div>

</body>
</html>
