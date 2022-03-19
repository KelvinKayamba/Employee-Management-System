<?php
   include 'Database/connect.php';
   $userid =$_GET['userid'];
   
   $result ="DELETE FROM `account` WHERE userid=$userid";
   mysqli_query($conn,$result);
   
   header("Location: manageaccounts.php");
 ?> 