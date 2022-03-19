<?php
   include 'Database/connect.php';
   $employeeid =$_GET['employeeid'];
   
   $result ="DELETE FROM `employee` WHERE employeeid=$employeeid";
   mysqli_query($conn,$result);
   
   header("Location: employee.php");
 ?> 