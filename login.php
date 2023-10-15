<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>COMPUTER KINGDOM</title>
  <link rel="icon" type="text/css" href="images/itdlh.png">
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
  <nav id="navbar_top" class="navbar fixed-top navbar-expand-lg navbar-dark " style="background-color: lightgray;">
 <div class="container-fluid">

<a class="navbar-brand" href="#" style="color: blue; font-family: Brush Script MT ;" >
    <img src="images/logo.png" width="30" height="30" class="d-inline-block align-top" alt="" >
 COMPUTER KINGDOM
  </a>

  <button  class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav">
      <span   class="navbar-toggler-icon"></span>
    </button>
  <div class="collapse navbar-collapse" id="main_nav" >
  <ul class="navbar-nav ms-auto" >
    <li class="nav-item"><a style="color: blue; font-family: Bauhaus 93;" class="nav-link" href="index.php"> HOME </a></li>
   <li class="nav-item dropdown">
       <a style="color: blue; font-family: calibre;" class="nav-link  dropdown-toggle" href="logim.html" data-bs-toggle="dropdown">BROWSE CATEGORIES  </a>
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
   
    <li class="nav-item"><a style="color: blue; font-family: calibre;" class="nav-link" href="blog.php"> BLOG </a></li>
     <li class="nav-item dropdown">
       <a style="color: blue; font-family: calibre;" class="nav-link  dropdown-toggle" href="logim.html" data-bs-toggle="dropdown">REGISTRATION</a>
        <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="registration.php"> REGISTRATION</a></li>
        <li><a class="dropdown-item" href="contactus.php"> CONTACT US</a></li>
</ul>
</li>
    

<li class="nav-item dropdown">
       <a style="color: blue; font-family: calibre;" class="nav-link  dropdown-toggle" href="logim.html" data-bs-toggle="dropdown"> LOGIN  </a>
        <ul class="dropdown-menu" style="background-color: darkgray">
        <li><a class="dropdown-item" href="user.php" style="color: darkblue; font-family: calibre;"> User </a></li>
        <li><a class="dropdown-item" href="admin.php" style="color: darkblue; font-family: calibre;"> Admin</a></li>
        
      
        </ul>
    </li>

  
        
      
        </ul>
    </li>

  </ul>
  </div> 
 </div> 
</nav>



</body>
</html>