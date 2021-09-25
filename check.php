<?php
require_once('connection.php');
if(isset($_POST['submit'])){
	$flag=0;
	$name=$_POST['username'];
	$pass=$_POST['password'];
	$type=$_POST['type'];

$sql="select * from user";
$result=mysqli_query($con,$sql);
 
	while($row=mysqli_fetch_array($result)){
	
		if($name==$row[1] && $pass==$row[2] &&	 $type==$row[3]){
			$flag=1;
		}
	}
	if($flag==1){
		header("location:welcome.php");
	}else{
		echo "Invalid username or password.";
	}
mysqli_close($con);

}
session_start();
$_SESSION["name"]=$name;
$_SESSION["type"]=$type;
?>