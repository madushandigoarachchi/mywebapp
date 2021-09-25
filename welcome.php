<!DOCTYPE html>
<html>
<head>
	<title>welcome</title>
</head>
<body>
 <?php
 Session_start();?>
<h2>Welcome <?php echo $_SESSION["name"];?></h2>
<?php
if($_SESSION["type"]=="Admin"){
echo'<ul>
	<li><a href="view.php">View Data</a></li>
	<li><a href="add.php">Add Data</a></li>
</ul>';}
elseif($_SESSION["type"]=="User"){
echo'<ul>
	<li><a href="view.php">View Data</a></li>
</ul>';
}
echo'<li><a href="logout.php">Click  to Logout</a></li>';
?>
</body>
</html>