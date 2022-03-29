<?php 
    @include 'config.php';
    session_start();
    
    if(!isset($_SESSION['user_name'])){
        header('location:login_form.php');
    }
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css">

  
    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container">
    <div class="content">
        <h3>Hi, <span>User</span></h3>
        <h1>Welcome <span><?php echo $_SESSION['user_name'] ?></span></h1>
        <p>This is user page</p>
        <a href="login_form.php" class="btn">Login</a>
        <a href="register_form.php" class="btn">Register</a>
        <a href="logout.php" class="btn">Logout</a>
        <a href="portfolio.php" class="btn">View my portfolio</a>
    </div>
    </div>
  

    


  
  </body>
</html>