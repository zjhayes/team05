<?php
	$con = mysqli_connect("localhost", "bruscar5", "Neongreenbananabread88", "WADUsers");
	
	if(!$con) 
	{
		echo 'Not connected to server.' . mysqli_connect_error();
		exit();
	}
	
	$firstName = $_POST['FirstName'];
	$lastName = $_POST['LastName'];
	$userName = $_POST['UserName'];
	$password = $_POST['Password'];
	
	$sql = "INSERT INTO Users (FirstName, LastName, UserName, Password) VALUES ('$firstName', '$lastName', '$userName', '$password')";
	
	if(!mysqli_query($con, $sql))
	{
		echo 'Insert failed.';
	} 
	else 
	{
		echo 'Inserted.';
	}
	
	header("Refresh:5; url=index.html");
?>