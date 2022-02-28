<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Assessment for Junior Software Engineer Circle Technology</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="datatable/dataTable.bootstrap.min.css">
	
	<style>
		.height10{
			height:10px;
		}
		.mtop10{
			margin-top:10px;
		}
		.modal-label{
			position:relative;
			top:7px
		}
	</style>
</head>
<body>
<div class="container">
<!-- A grey horizontal navbar that becomes vertical on small screens -->

	<div class="row">
		
		<div class="col-sm-8 col-sm-offset-2">
			<div class="row">
			<nav class="navbar navbar-inverse">
				<div class="container-fluid">
					<div class="navbar-header">
					<a class="navbar-brand" href="index.php">Attendance System</a>
					</div>
					<ul class="nav navbar-nav">
					<li class="active"><a href="index.php">Home</a></li>
					<li><a href="student_manage.php">Students Manage</a></li>
					<li><a href="attendance.php">Attendance</a></li>
					<li><a href="show_attendance.php">Show Attendance </a></li>
					<li style="color:blue;font-weight: bold; "><a href="index.php">Dipak Debnath </a></li>
					</ul>
				</div>
			</nav>
			<marquee direction="left" style="color:blue;font-weight: bold; font-size: 25px;">
				Complate Assessment for Junior Software Engineer Circle Technology 
				<span style="color:black;">(Student Attendance System)</span>
			</marquee>
			<?php
				if(isset($_SESSION['error'])){
					echo
					"
					<div class='alert alert-danger text-center'>
						<button class='close'>&times;</button>
						".$_SESSION['error']."
					</div>
					";
					unset($_SESSION['error']);
				}
				if(isset($_SESSION['success'])){
					echo
					"
					<div class='alert alert-success text-center'>
						<button class='close'>&times;</button>
						".$_SESSION['success']."
					</div>
					";
					unset($_SESSION['success']);
				}
			?>
			</div>
			<div class="row">
			
				
			</div>
			<div class="height10">
			</div>
			<div class="row">
				
				<table id="myTable" class="table table-bordered table-striped">
					<thead>
						<th style ='text-align:center;'>Student ID</th>
						<th style ='text-align:center;'>Student Name</th>
					
					
					</thead>
					<tbody>
						<?php
							include_once('connection.php');
							$sql = "SELECT * FROM students";

							$query = $conn->query($sql);
							while($row = $query->fetch_assoc()){
								echo 
								"<tr>
									<td style ='text-align:center;'>".$row['id']."</td>
									<td style ='text-align:center;'>".$row['name']."</td>
									
									
								</tr>";
								include('edit_delete_modal.php');
							}
							

						?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<?php include('add_modal.php') ?>

<script src="jquery/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="datatable/jquery.dataTables.min.js"></script>
<script src="datatable/dataTable.bootstrap.min.js"></script>
<!-- generate datatable on our table -->
<script>
$(document).ready(function(){
	//inialize datatable
    $('#myTable').DataTable();

    //hide alert
    $(document).on('click', '.close', function(){
    	$('.alert').hide();
    })
});
</script>
</body>

<<style>
.PP{
	text-align: center;
}
</style>
</html>