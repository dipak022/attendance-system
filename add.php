<?php
	session_start();
	include_once('connection.php');

	if(isset($_POST['add'])){
		$name = $_POST['name'];
		
		$sql = "INSERT INTO students (name) VALUES ('$name')";

		
		if($conn->query($sql)){
			$_SESSION['success'] = 'New student added successfully.';
		}
		else{
			$_SESSION['error'] = 'Student added unsuccessfully!!!';
		}
	}
	else{
		$_SESSION['error'] = 'Must be fill up  form, thank you';
	}

	header('location: student_manage.php');
?>