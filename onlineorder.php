<?php require_once('connection/connection.php') ?>
<?php 
if(isset($_POST['submit']))
{
	$contact=$_POST['contact'];
	$name=$_POST['name'];
	$address=$_POST['address'];
	$email=$_POST['email'];
	$items=$_POST['items'];
	$result="INSERT INTO onlineorder(contact,name,address,email,items,date) VALUES('$contact','$name','$address','$email','$items', now())";
	if(!mysqli_query($connection,$result))
	{
		die('Errors in sending your info');
	}
	else
	{
		echo'<script>alert("Thanks.Your info successfully sent")</script>';
		echo"<script>document.location='onlineorder.php';</script>";
	}}


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




<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Online Order</title>
	<link rel="icon" type="text/css" href="images/logo.12.png">
	<link rel="stylesheet" type="text/css" href="b5/css/bootstrap.css">
	
</head>
<body style="background-color: lime">
	<div class="row">
	<div class="col-sm-4">
		
	</div>
	<div class="col-sm-4">
	<div class="card" style="margin-top: 100px; background-color:black;">
		<div class="card-body">
			<center><img src="images/logo.12.png" style="width: 100px; height:100px;background-color: red"></center>
			<center><h2 style="color: white">Online Order</h2></center><hr>
			<form action="" method="POST">
				<div class="form-control" style="background-color: lime ">
				<label >Contact No:</label>
				 <input type="text" class="form-control" name="contact">
				 <label>Name:</label>
				 <input type="text" class="form-control" name="name">
				 <label>Address:</label>
				 <input type="text" class="form-control" name="address">
				 
				 
				 <label>E-mail:</label>
				 <input type="email" class="form-control" name="email">
				 <label>Items:</label>
				 <select class="form-select" name="items" required="">
				<option value="select">Select Items</option>
				<option value="laptops">LAPTOPS</option>
				<option value="desktop">DESKTOP</option>
				<option value="processors">PROCESSORS</option>
			    <option value="motherboards">MOTHERBOARDS</option>			    <option value="ram">RAM (MEMORY) </option>
			    <option value="graphiccards">GRAPHIC CARDS</option>
			    <option value="ups">UPS</option>
			    <option value="powersupply">POWER SUPPLY</option>
			    <option value="cooler">COOLER</option></select>

				 <button class="btn btn-primary" type="submit" name="submit" style="margin-top: 15px">Submit</button>
				 </div>
			</form>
		</div>
	</div>
	</div>
	<div class="col-sm-4">
		
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
