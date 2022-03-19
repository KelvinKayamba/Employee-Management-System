<?php
   include 'Database/connect.php';
   $id =$_GET['id'];
   
   $result ="DELETE FROM `event` WHERE id=$id";
   mysqli_query($conn,$result);
   
   header("Location: schedule.php");
 ?> 