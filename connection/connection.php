<?php 
$host='localhost';
$user='root';
$password='';
$db='computerkingdom';

$connection=mysqli_connect($host,$user,$password,$db);
if(mysqli_connect_error()){
die("Connection Error..!!!");
}

//else{
	//echo "succesfully connected";
//}//

 ?>