<?php session_start(); ?>
<?php 
  if(!isset($_SESSION['id'])){
    header('Location:admin.php');
  }

   ?>


<?php require_once ('connection/connection.php') ?>


<body style="background-color: teal">

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Control Panel</title>
	<link rel="icon" type="text/css" href="images/logo.png" style="border-radius: 50%">
	<link rel="stylesheet" type="text/css" href="b5/css/bootstrap.css">
	<script src="b5/js/bootstrap.bundle.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="card" style="margin-top: 40px;background-color: black">
			<div class="card-body">
				<a href="logout.php"><button class="btn btn-info btn-sm" name="logout" type="submit">Logout</button></a>
				<h1 style="text-align: center;font-family: arial;color: red">Control Panel</h1><hr>
                 <div class="card"  style="background-color: lime" >
					<div class="card-body">
						<table class="table table-striped table-hover">

                    		<center><h2 style="font-family: calibre;color: white">Online Registration</h2></center><hr>
                    		<?php 
                    		$query="SELECT * FROM registrationweb";
                    		$result=mysqli_query($connection,$query);
                    		echo mysqli_num_rows($result)." People register"; ?>
                    		<tr>
                    			
                    			<th>Contact No</th>
                    			<th>Name</th>
                    			<th>Address</th>
                          <th>E-mail</th>
                          <th>Gender</th>
                    			<th>Date</th>
                    		</tr>

                           <?php
                           while($record=mysqli_fetch_assoc($result))
                           {
                           	 
                            $contact=$record['contact'];
                            $name=$record['name'];
                            $address=$record['address'];
                            $email=$record['email'];
                            $items=$record['gender'];
                            $date=$record['date'];
                           	;
                            
                            ?>
                            <tr>
                            	
                            	<td><?php echo $record['contact']; ?></td>
                            	<td><?php echo $record['name']; ?></td>
                            	<td><?php echo $record['address']; ?></td>
                            	<td><?php echo $record['email']; ?></td>
                            	<td><?php echo $record['gender']; ?></td>
                                <td><?php echo $record['date']; ?></td>

                            	 </tr>  
                            	 <?php 
                            	}

                            	  ?> 
                            	  </table></div></div>

                                 <div class="card"  style="background-color: lime;margin-top: 20px" >
          <div class="card-body">


















<table class="table table-striped table-hover">

                        <center><h2 style="font-family: calibre;color: white">Online Order</h2></center><hr>
                        <?php 
                        $query="SELECT * FROM onlineorder";
                        $result=mysqli_query($connection,$query);
                        echo mysqli_num_rows($result)." People register"; ?>
                        <tr>
                          
                          <th>Contact No</th>
                          <th>Name</th>
                          <th>Address</th>
                          <th>E-mail</th>
                          <th>Items</th>
                          <th>Date</th>
                        </tr>

                           <?php
                           while($record=mysqli_fetch_assoc($result))
                           {
                             
                            $contact=$record['contact'];
                            $name=$record['name'];
                            $address=$record['address'];
                            $email=$record['email'];
                            $items=$record['items'];
                            $date=$record['date'];
                            ;
                            
                            ?>
                            <tr>
                              
                              <td><?php echo $record['contact']; ?></td>
                              <td><?php echo $record['name']; ?></td>
                              <td><?php echo $record['address']; ?></td>
                              <td><?php echo $record['email']; ?></td>
                              <td><?php echo $record['items']; ?></td>
                                <td><?php echo $record['date']; ?></td>

                               </tr>  
                               <?php 
                              }

                                ?> 
                                </table></div></div>






















                                  <div class="card"  style="background-color: lime;margin-top: 20px" >


<table class="table table-striped table-hover">

                        <center><h2 style="font-family: calibre;color: white">Messages</h2></center><hr>
                        <?php 
                        $query="SELECT * FROM messages";
                        $result=mysqli_query($connection,$query);
                        echo mysqli_num_rows($result)." People register"; ?>
                        <tr>
                          
                          <th>Id</th>
                          <th>Name</th>
                          <th>E-mail</th>
                          <th>Contact</th>
                          <th>Messages</th>
                          <th>Date</th>
                        </tr>

                           <?php
                           while($record=mysqli_fetch_assoc($result))
                           {
                             
                            $id=$record['id'];
                            $name=$record['name'];
                            $email=$record['email'];
                            $contact=$record['contact'];
                            $message=$record['message'];
                            $date=$record['date'];
                            ;
                            
                            ?>
                            <tr>
                              
                              <td><?php echo $record['id']; ?></td>
                              <td><?php echo $record['name']; ?></td>
                              <td><?php echo $record['email']; ?></td>
                              <td><?php echo $record['contact']; ?></td>
                              <td><?php echo $record['message']; ?></td>
                                <td><?php echo $record['date']; ?></td>

                               </tr>  
                               <?php 
                              }

                                ?> 
                                </table>

					</div>
				</div>


				
					</div>
				</div>
			</div>
		</div>
	</div>
	
</body>
</html>




