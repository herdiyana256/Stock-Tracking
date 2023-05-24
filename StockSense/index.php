<?php
  ob_start();
  require_once('includes/load.php');
  if($session->isUserLoggedIn(true)) { redirect('home.php', false);}
?>
<?php include_once('layouts/header.php'); ?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Stock Tracking Management</title>


  <link rel="icon" type="image/x-icon" href="/libs/images/favicon.ico">
  <!-- Akhir tag favicon -->
  <link rel="stylesheet" href="path/to/your/stylesheet.css">
  <style>
    body {
        background-image: url(libs//images/cover.jpg);
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        height: 100vh;

        
    }

    .text-center h4 {
        text-align: center;
        font-family:Georgia, 'Times New Roman', Times, serif;
        font-size: 24px;
        color: #333;
    }

    .text-center h1 {
        text-align: center;
        font-family:Verdana, Geneva, Tahoma, sans-serif;
        font-size: 35px;
        color: #333;
    }
    

  </style>
</head>
<body>








<div class="login-page">
    <div class="text-center">
       <h1>Stock Tracking Management </h1> <hr>
       <h4>StockSense</h4>
     </div>
     <?php echo display_msg($msg); ?>
      <form method="post" action="auth.php" class="clearfix">
        <div class="form-group">
              <label for="username" class="control-label">Username</label>
              <input type="name" class="form-control" name="username" placeholder="Username">
        </div>
        <div class="form-group">
            <label for="Password" class="control-label">Password</label>
            <input type="password" name= "password" class="form-control" placeholder="Password">
        </div>
        <div class="form-group">
                <button type="submit" class="btn btn-success" style="border-radius:0%">Login</button>
        </div>
    </form>
<br> <br>
<footer>
    <p align="center">Copyright &copy; 2023 . All Rights Reversed &trade;</p>
</footer>
</div>
<?php include_once('layouts/footer.php'); ?>



