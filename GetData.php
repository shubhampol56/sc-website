<?php

$username=$_POST['name'];
$password=$_POST['password'];

$conn = new mysqli("localhost","root","fav1997","login");


	$sql="SELECT * FROM info WHERE name='$username' AND password='$password' ";

if($conn->query($sql)){
	
	header('Location:EnquiryForm.php');
}
else
{
	echo "Error : ".$sql."<br>".$conn->error;
}
?>

