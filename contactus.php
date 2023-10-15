<?php require_once('connection/connection.php') ?>
<?php 
 if(isset($_POST['submit']))
 {
  $nic=$_POST['nic'];
  $name=$_POST['name'];
  $email=$_POST['email'];
  $contact=$_POST['contact'];
  $message=$_POST['message'];
  $result="INSERT INTO messages(nic,name,email,contact,message,date) VALUES('$nic',
  '$name','$email','$contact','$message', now())";
  if(!mysqli_query($connection,$result))
  {
    die('Errors in sending your message');
  }
  else
  {
    echo'<script>alert("Thanks..your message successfully sent")</script>;';
    echo'<script>document.location="contactus.php";</script>;';
  }

 }

 ?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>COMPUTER KINGDOM</title>
  <link rel="icon" type="text/css" href="images/logo.12.png">
  <link rel="stylesheet" type="text/css" href="b5/css/bootstrap.css">
  <script src="b5/js/bootstrap.bundle.min.js"></script>
  <style type="text/css">
    #myBtn{
      display: none;
      position: fixed;
      bottom: 100px;
      left: 20px;
      z-index: 99;
      border:none;
      outline: none;

      color: white;
      cursor:pointer;
      padding:15px;
      border-radius: 10px;
      font-size: 15px;
      font-weight: bolder;
      box-shadow: 0px 0px 5px 2px black;

    }
    #myBtn:hover{
      background-image: linear-gradient(to right,red,blue);
      color: red;
    }


  </style>
</head>
<body>
  <nav id="navbar_top" class="navbar fixed-top navbar-expand-lg navbar-dark " style="background-color: black;">
 <div class="container-fluid">

<a class="navbar-brand" href="#" style="color: lime; font-family : Arial;" >
    <img src="images/logo.12.png" width="30" height="30" class="d-inline-block align-top" alt="" >
 COMPUTER KINGDOM
  </a>

  <button  class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav">
      <span   class="navbar-toggler-icon"></span>
    </button>
  <div class="collapse navbar-collapse" id="main_nav" >
  <ul class="navbar-nav ms-auto" >
    <li class="nav-item"><a style="color: lime; font-family: Bauhaus 93;" class="nav-link" href="index.php"> HOME </a></li>
   <li class="nav-item dropdown">
       <a style="color: lime; font-family: calibre;" class="nav-link  dropdown-toggle" href="logim.html" data-bs-toggle="dropdown">BROWSE CATEGORIES  </a>
        <ul class="dropdown-menu" style="background-color: black">
        <li><a class="dropdown-item" href="laptops.php" style="color:red "> LAPTOPS </a></li>
        <li><a class="dropdown-item" href="desktop.php" style="color: red"> DESKTOP</a></li>
        <li><a class="dropdown-item" href="processors.php" style="color: red"> PROCESSORS</a></li>
        <li><a class="dropdown-item" href="motherboards.php" style="color: red">MOTHERBOARDS</a></li>
        <li><a class="dropdown-item" href="ram.php" style="color: red">RAM (MEMORY) </a></li>
        <li><a class="dropdown-item" href="graphiccards.php" style="color: red"> GRAPHIC CARDS</a></li>
        <li><a class="dropdown-item" href="ups.php" style="color: red">UPS</a></li>
        <li><a class="dropdown-item" href="powersupply.php" style="color: red">POWER SUPPLY</a></li>
         <li><a class="dropdown-item" href="cooler.php" style="color: red">COOLER</a></li>
      
      

      

      
        
      
        </ul>
    </li>
    
    <li class="nav-item"><a style="color: lime; font-family: calibre;" class="nav-link" href="blog.php"> BLOG </a></li>
    <li class="nav-item dropdown">
       <a style="color: lime; font-family: calibre;" class="nav-link  dropdown-toggle" href="logim.html" data-bs-toggle="dropdown">REGISTRATION</a>
        <ul class="dropdown-menu" style="background-color: black">
        <li><a class="dropdown-item" href="registration.php" style="color: red"> REGISTRATION</a></li>
        <li><a class="dropdown-item" href="contactus.php" style="color: red"> CONTACT US</a></li>
        <li><a class="dropdown-item" href="onlineorder.php" style="color: red"> ONLINE ORDER</a></li>
</ul>
</li>
    

<li class="nav-item dropdown">
       <a style="color: lime; font-family: calibre;" class="nav-link  dropdown-toggle" href="logim.html" data-bs-toggle="dropdown"> LOGIN  </a>
        <ul class="dropdown-menu" style="background-color: black">
        <li><a class="dropdown-item" href="user.php" style="color: red; font-family: calibre;"> User </a></li>
        <li><a class="dropdown-item" href="admin.php" style="color: red; font-family: calibre;"> Admin</a></li>
        
      
        </ul>
    </li>

  
        
      
        </ul>
    </li>

  </ul>
  </div> 
 </div> 
</nav>

<body style="background-color: teal">

<div class="row" style="margin-top: 100px;color: black">
  <div class="col-sm-3">
    
  </div>
  <div class="col-md-6">
    <div class="card" style="background-color: black">
      <div class="card-body">
        <center><img src="images/logo.12.png" style="width: 80px;height: 100px;background-color: red"></center>
        <h3 style="text-align: center;font-family: arial;font-weight: bold;color: white">Your Messages to Us</h3><hr>
        <form action="" method="POST">
          <div class="form-control" style="background-color: lime">
            <label>Id:</label>
            <input type="text" name="nic" class="form-control" placeholder="Id">
            <label>Name:</label>
            <input type="text" name="name" class="form-control" placeholder="Name">
            <label>E-mail:</label>
            <input type="E-mail" name="email" class="form-control" placeholder="E-mail">
            <label>Contact:</label>
            <input type="text" name="contact" class="form-control" placeholder="Contact">
            <label>Your Message:</label>
            <input cols="12" rows="6" name="message"  type="text" class="form-control" placeholder="Message">
        <!--   </textarea> -->

            <button class="btn btn-primary" type="submit" name="submit" style="margin-top: 20px">Send</button>
          </div>
        </form>
        
      </div>
    </div>
    
  </div>
   <div class="col-sm-3">
    
  </div>
</div>


<div class="row" style="margin-top: 55px;background-color: black">
  <center><div class="col-md-6"></center>
    <div class="card" style="background-color: black">
      <div class="card-body">
        
        <center><img src="images/logo.12.png" style="width: 80px;height: 100px;background-color: red"></center>
        <center><h1 style="text-align: center;font-family: arial;font-weight: bold;color: white">Our Contacts:</h1><hr></center>
        <ul>
          <li style="font-size: 30px;color: lime">Office    : 076 2543169</li>
          <li style="font-size: 30px;color: lime">Owner     : 075 1388534</li>
          <li style="font-size: 30px;color: lime">Maneger   : 070 5377244</li>
          <li style="font-size: 30px;color: lime">Superviser: 078 2359687</li>
          <li style="font-size: 30px;color: lime">Hotline   : 072 9632584</li>

        </ul>
        </div>
        
        
    
    </div>
    
  </div>

<body style="background-color: teal">


   <center><div class="col-md-6"></center>
     <div class="card">
      <div class="card-body" style="background-color: teal">
         <center><img src="images/logo.12.png" style="width: 80px;height: 100px;background-color: red"></center>
       <h2 style="text-align: center;font-family: arial;font-weight: bold;color: white;background-color: teal">Our Location</h2>
        <!-- <center><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63227.50952137328!2d80.9205152839422!3d7.924354866107857!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3afb44c9f3a3d2b5%3A0xa0ff863f7432153!2sThe%20Lake%20Hotel%20Polonnaruwa!5e0!3m2!1sen!2slk!4v1695878213882!5m2!1sen!2slk" width="600" height="450" style="border:0; width:630px;height:350px" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></center> -->

    <center>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.6656084493407!2d81.03250103599594!3d7.9299502751773625!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3afb44605e0d3207%3A0x3b48d8ccfcaa1546!2sGalleCity%20Smart%20Center!5e0!3m2!1sen!2slk!4v1697341460868!5m2!1sen!2slk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </center>

        
      </div>
    </div>
    
  </div>
</div>

<hr>
<div class="container-fluid" style="background-color: black; padding: 30px;margin-top: 30px ">
  <div class="row">
    <div class="col-sm-4"><p style="font-size: 20px;font-weight: bold;color: white">Contacts
      <li style="font-family: arial; color: white">Address: Computer Kingdom,Polonnaruwa,Sri Lanka</li>
      <li style="font-family: arial; color: white">E-mail: Computerkingdom@gmail.com </li>
      <li style="font-family: arial; color: white"> Telephone: +94 751388534/ +94 705377244</li>
    </div>
    <div class="col-sm-4"><p style="font-size: 20px;font-weight: bold;color: white">Quick Links
      <li><a href="index.php" style="font-family: calibre; color: white">Home</a></li>
      <li><a href="onlineorder.php" style="font-family: calibre; color: white">Online Order</a></li>
      <li><a href="registration.php" style="font-family: calibre; color: white">Registraion</a></li>
      <li><a href="contactus.php" style="font-family: calibre; color: white">Contact Us</a></li>
      <li><a href="user.php" style="font-family: calibre; color: white">User Login</a></li>
      <li><a href="admin.php" style="font-family: calibre; color: white">Admin Login</a></li>
    
  </div>
    <div class="col-sm-4"><p style="font-size: 20px;font-weight: bold; color: white">Search
      <input type="text" class="form-control">
          
          <button type="Submit" class="btn btn-primary" style="margin-top: 10px">Search</button>
</div>
</div>
<button onclick="topFunction()" id="myBtn" type=""><img src="images/logo.12.png" width="50" height="50" alt="submit">
    
  </button>
</body>
</html>
<script type="text/javascript">
  //get the button
  var mybutton=document.getElementById("myBtn");

  window.onscroll=function(){scrollFunction()};
  function scrollFunction(){
    if(document.body.scrollTop>20||document.documentElement.scrollTop>20){
      mybutton.style.display="block";

    }else{
      mybutton.style.display="none";

    }
  }
  function topFunction(){
    document.body.scrollTop=0;
    document.documentElement.scrollTop=0;
  }


</script>


  
</body>
</html>

