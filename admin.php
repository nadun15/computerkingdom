<?php session_start(); ?>



<?php require_once('connection/connection.php'); ?>


<?php 
if(isset($_POST['submit'])){
  $username=$_POST['username'];
  $password=$_POST['password'];
  $password= sha1($password);
  $query="SELECT * FROM admin where username='{$username}' AND 
  password='{$password}'LIMIT 1";
  $result=mysqli_query($connection,$query);
  if(mysqli_num_rows($result)==1){

    $user=mysqli_fetch_assoc($result);
    $_SESSION['id']=$user['id'];
    $_SESSION['name']=$user['username'];


    echo"<script type='text/javascript'> document.location='controlpanel.php'; </script>";
  }

  else{
    echo'<script>alert("invalid username or password...! ")</script>';
  }
} ?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" type="text/css" href="b5/css/bootstrap.css">
  <script src="b5/js/bootstrap.bundle.min.js"></script>
</head>
<body>


    <section>
    <div class="login-box">
        <form action="" method="POST">
            
            <h2>ADMIN</h2>
        
            <div class="input-box" >

                <span class="icon"><ion-icon name="ail-outline"></ion-icon></span>
                <input type="text"  name="username" >
                <label>Username</label>
            </div>
            

            <div class="input-box">
                <span class="icon"><ion-icon name="ock-closed-outline"></ion-icon></span>
                <input type="password"  name="password">
                <label>Password</label>
            </div>
            <div class="remember-forgot">
                <label><input type="checkbox">
                Rmember me</label>
                <a href="#">Forgot Password</a>
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Login</button>
            <div class="register-link">
                <p>Don't have an account?<a href="#">Register</a></p>
            </div>
            <button1><a href="index.php">Home page</a></button1>
        </form>

    </div>
    </section>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>