<?php
   include 'Database/connect.php';
   $attendanceid =$_GET['attendanceid'];
   
   $result ="DELETE FROM `attendance` WHERE attendanceid=$attendanceid";
   mysqli_query($conn,$result);
   
   header("Location: manageattendance.php");
 ?> 