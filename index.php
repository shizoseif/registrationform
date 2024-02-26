<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
        $_SESSION['msg'] = "You must log in first";
        header('location: login.php');
  }
  if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['username']);
        header("location: home1.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
        <title>Home</title>
        <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="formheader">
        <h2>ONLINE SAFARIS:</h2>
</div>
<div class="content">
        <!-- notification message -->
        <?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
        <h3>
          <?php 
                echo $_SESSION['success']; 
                unset($_SESSION['success']);
          ?>
        </h3>
      </div>
        <?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
      <div class="gofan">Hello dear<p><?php echo $_SESSION['username']; ?></p>You are welcome at Online Safaris Africa.</div>
        <p> <a href="home1.php?exit='1'" style="color: white;"><b>exit</b></a></p>
    <?php endif ?>
</div>
                
</body>
</html>