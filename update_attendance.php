<?php
session_start();
include_once('connection.php');



if(isset($_POST['updateattendances'])){
    $attendance = $_POST['attendance'];
    $date = $_SESSION["find_date"];

    foreach($attendance as $key =>$attendance_value){
        //echo $attendance;
        if($attendance_value == "present"){
            $sql = "UPDATE attendance SET is_present = 'present' WHERE student_id = '".$key."' AND attendance_date = '".$date."' ";
            $data_update = $conn->query($sql);
        }else if($attendance_value == "absent"){
            $sql = "UPDATE attendance SET is_present = 'absent' WHERE student_id = '".$key."' AND attendance_date = '".$date."' ";
            $data_update = $conn->query($sql);
        }
        if($data_update){
            $_SESSION['success'] = 'Today Attendance update successfully.';
            header('location: show_attendance.php');
        }
        else{
            $_SESSION['error'] = 'Student Attendance update unsuccessfully!!!';
            header('location: show_attendance.php');
        }
    }

    
}else{
    $_SESSION['error'] = 'Must be fill up  form, thank you';
    header('location: attendance.php');
}
//header('location: store_attendance.php');




?>