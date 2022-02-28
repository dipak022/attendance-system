<?php
session_start();
include_once('connection.php');



if(isset($_POST['submitattendance'])){
    $attendance = $_POST['attendance'];
    $cur_date=date('Y-m-d');

		
	$sql = "SELECT DISTINCT attendance_date FROM attendance ";
    $query = $conn->query($sql);

	while($row = $query->fetch_assoc()){
     $db_date = $row['attendance_date']; 
    if($cur_date == $db_date){
        $_SESSION['success'] = 'Student Attendance Already taken today successfully, Thank You.';
        header('location: attendance.php');
     }
    }
    if(!$_SESSION['success']){

   
    foreach($attendance as $key =>$attendance_value){
        if($attendance_value == "present"){
            $sql = "INSERT INTO attendance (student_id,attendance_date,is_present) VALUES ('$key','$cur_date','present')";
            $data_insert = $conn->query($sql);
        }else if($attendance_value == "absent"){
            $sql = "INSERT INTO attendance (student_id,attendance_date,is_present) VALUES ('$key','$cur_date','absent')";
            $data_insert = $conn->query($sql);
        }
        if($data_insert){
            $_SESSION['success'] = 'Today Attendance successfully.';
            header('location: attendance.php');
        }
        else{
            $_SESSION['error'] = 'Student Attendance  unsuccessfully!!!';
            header('location: attendance.php');
        }
    }
}
    
}else{
    $_SESSION['error'] = 'Must be fill up  form, thank you';
    header('location: attendance.php');
}
//header('location: store_attendance.php');




?>