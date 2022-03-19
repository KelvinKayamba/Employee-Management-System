<?php
   include 'Database/connect.php';
   $deptno =$_GET['deptno'];
   
   $result ="DELETE FROM `department` WHERE deptno=$deptno";
   mysqli_query($conn,$result);
   
   header("Location: department.php");
 ?> 