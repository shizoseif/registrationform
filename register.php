<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

  <div class="onlinetitle"> 
    USAMBARA SAFARIS & TOURS 
</div>


<div class="mainform">
  <div class="formheader">
        <h2>Register</h2>
  </div>
        
  <form method="post" action="register.php">
        <?php include('errors.php'); ?>
        <div class="input-group">
          <label>Username</label>
          <input type="text" name="username" autocomplete="off" value="<?php echo $username; ?>">
        </div>
        <div class="input-group">
          <label>Email</label>
          <input type="email" name="email" autocomplete="off" value="<?php echo $email; ?>">
        </div>
        <div class="input-group">
          <label>Password</label>
          <input type="password" name="password_1">
        </div>
        <div class="input-group">
          <label>Confirm password</label>
          <input type="password" name="password_2">
        </div>
        <center>
        <div class="input-group">
          <button type="submit" class="btn" name="reg_user">Register</button>
          &nbsp; &nbsp;  &nbsp; &nbsp;
          <input type="reset" class="rst" value="Reset">
        </div>
      </center>
        <p>
              <center>
                If you have an Account <a href="login.php" class="link">Sign in</a>
              </center>
        </p>
      </div>
  </form>
</body>
</html>