<?php
   include 'Database/connect.php';
   $leaveid =$_GET['leaveid'];
   
   $result ="DELETE FROM `aleave` WHERE leaveid=$leaveid";
   mysqli_query($conn,$result);
   
   header("Location: manageleave.php");
 ?> 