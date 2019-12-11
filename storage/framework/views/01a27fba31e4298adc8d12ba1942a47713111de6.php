<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> Login </title>

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/login.css">
</head>

<body>
  <div class="login-form">
    <form method="post">
    <?php echo e(csrf_field()); ?>

      <div class="avatar"><i class="material-icons">&#xE7FF;</i></div>
      <h4 class="modal-title">Login to Your Account</h4>
      <table>
        <tr>
          <td>Username</td>
          <td><input type="text" class="form-control" name="username"></td>
        </tr>
        <tr>
          <td>Password</td>
          <td><input type="password" class="form-control" name="password"></td>
        </tr>


      </table>
      <div class="form-group small clearfix">

      </div>

      <input type="submit" class="btn btn-primary btn-block btn-lg" name="submit" value="Login">

    </form>
    <div class="text-center small">Don't have an account? <a href="<?php echo e(route('reg.index')); ?>">Sign up</a></div>
  </div>
</body>

</html><?php /**PATH D:\documents\semester 8\ATP3\project\resources\views/login/index.blade.php ENDPATH**/ ?>