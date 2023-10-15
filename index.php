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

 <!-- Carousel -->
<div id="demo" class="carousel slide" data-bs-ride="carousel">

  <!-- Indicators/dots -->
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
     <button type="button" data-bs-target="#demo" data-bs-slide-to="3"></button>
      <button type="button" data-bs-target="#demo" data-bs-slide-to="4"></button>
  </div>
  
  <!-- The slideshow/carousel -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/151.png" alt="" class="d-block" style="width:100%">
      <div class="carousel-caption">
        <h3>Weclcome</h3>
        <p>COMPUTER KINGDOM</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/153.png" alt="" class="d-block" style="width:100%">
      <div class="carousel-caption">
        <h3>Weclcome</h3>
        <p>COMPUTER KINGDOM</p>
      </div> 
    </div>
    <div class="carousel-item">
      <img src="images/157.png" alt="" class="d-block" style="width:100%">
      <div class="carousel-caption">
       <h3>Weclcome</h3>
        <p>COMPUTER KINGDOM</p>
      </div>  
    </div>
     <div class="carousel-item">
      <img src="images/154.png" alt="" class="d-block" style="width:100%">
      <div class="carousel-caption">
       <h3>Weclcome</h3>
        <p>COMPUTER KINGDOM</p>
      </div>  
    </div>
     <div class="carousel-item">
      <img src="images/155.png" alt="" class="d-block" style="width:100%">
      <div class="carousel-caption">
       <h3>Weclcome</h3>
        <p>COMPUTER KINGDOM</p>
      </div>  
    </div>
  </div>
  
  <!-- Left and right controls/icons -->
  <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>

    </div>
  </div>
</div>  

<div class="row" style="margin-top: 25px;">
    <center><div class="col-md-6">
      <div class="card" style="background-color: black">
       
          <center><iframe width="560" height="315" src="https://www.youtube.com/embed/FMp2Ll01QC8?si=3YMuM11GlW31egFw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></center>   
        
        </div>
      </div></center>
    </div>


<div class="row" style="margin-top: 25px">
    <div class="col-sm-4">
      <div class="card" style="background-color: black" >
        <div class="card-body">
          <center><img src="images/logo.12.png" style="width: 60px; height: 80px;background-color: red"></center>
          <h4 style="text-align: center; color: lime">About Computer Kingdom</h4><hr>
          <p style="text-align: justify; color: white" >We, “Computer Kingdom (PVT) LTD” strongly emphasize on customer satisfaction by offering excellent customer service. Our well-trained and qualified staff effectively assists customers with all of their needs and inquiries. Whether you’re customizing your own PC or hoping to go for an upgrade, Computer Kingdom (PVT) LTD offers you the ideal solution that will meet your expectations. We ensure our customers with premium and quality hardware at reasonable prices. We make sure that every individual who possesses the dream for high-end computers deserves to be fulfilled.
We at Computer Kingdom (PVT) LTDcertainly intend to withhold the trust placed on us by providing you with quality products for affordable prices.<!--  We firmly believe that adapting to the modern era of technology has provided us the opportunity to be a thriving firm in the field of computer products in the country. --></p>
        </div>
      </div>
    
  </div>
  
    <div class="col-sm-4">
      <div class="card" style="background-color: black">
        <div class="card-body">
          <center><img src="images/logo.12.png" style="width: 60px; height: 80px;background-color: red"></center>
          <h4 style="text-align: center; color: lime">Our Vision</h4><hr>
          <p style="text-align: justify; color: white">“Computer Kingdom (PVT) LTD” is one of the well-known IT solution providers in Sri Lanka. Since its establishment in 2013, Computer Kingdom (PVT) LTD has made its sole purpose to provide trusted IT solutions to its users partnering up with popular brands.  Gestetner Partner, Kaspersky Partner and Hikvision Partner. Computer Kingdom (PVT) has its own fully equipped repair center with qualified technicians aiming to fulfill customer needs without delay. We also hold the honor of comprising the world’s leading IT brands such as HP, Asus, Dell, MSI and Lenovo.We at Computer Kingdom (PVT) LTDcertainly intend to withhold the trust placed on us by providing you with quality products for affordable prices. </p>
        </div>
      </div>
    
  </div>
   
    <div class="col-sm-4">
      <div class="card" style="background-color: black">
        <div class="card-body">
          <center><img src="images/logo.12.png" style="width: 60px; height: 80px;background-color: red"></center>
          <h4 style="text-align: center; color: lime">Our Mission</h4><hr>
          <p style="text-align: justify; color: white">“Since our establishment in the IT solution providers industry, closing near to a 10 year experience has provided us with the expertise to cater our valued customers with the latest technology, while providing an excellent service that would lead up to the best available products. We thrive to fulfill the dreams of making one’s own computer that would fit all of one’s needs. Currently, we offer a range of IT products to serve all your computer needs with an extraordinary range of Laptops, Branded business and gaming PCs, Printers, workstations and servers, UPS, CCTV and other computer accessories. We also offer Computer networking and all kinds of ELV solutions. We also offer Computer networking and all kinds of ELV solutions.</p>
        </div>
      </div>
    </div>
  </div><!--end of row 2-->


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

