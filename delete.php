<?php
	session_start();
	include_once('connection.php');

	if(isset($_GET['id'])){
		$sql = "DELETE FROM students WHERE id = '".$_GET['id']."'";

		if($conn->query($sql)){
			$_SESSION['success'] = 'Student deleted successfully';
		}
		
		else{
			$_SESSION['error'] = 'Student deleted unsuccessfully';
		}
	}
	else{
		$_SESSION['error'] = 'Must be fill up  form, thank you';
	}

	header('location: student_manage.php');
?>