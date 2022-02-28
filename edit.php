<?php
	session_start();
	include_once('connection.php');

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$name = $_POST['name'];
		
		$sql = "UPDATE students SET name = '$name' WHERE id = '$id'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Student updated successfully';
		}
		else{
			$_SESSION['error'] = 'Student updated unsuccessfully!!';
		}
	}
	else{
		$_SESSION['error'] = 'Must be fill up  form, thank you';
	}

	header('location: student_manage.php');

?>