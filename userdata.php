<?php
 include 'Database/connect.php';

 
 if(isset($_POST['register'])){
	                 $fullname    = $_POST['fullname']; 
					 $username   = $_POST['username']; 
					 $password   = $_POST['password'];
                     $email =$_POST['email'];
					 $role  = $_POST['role']; 
					 
					
					 
	 
	 $sql ="INSERT INTO `account`(`fullname`,`username`,`email`,`password`,`role`)
    VALUES('$fullname','$username','$email','$password','$role')";
	 if(mysqli_query($conn,$sql)){
		 header('Location: manageaccounts.php');
         
	 }
	 else{
		 echo "Error:" .$sql . "".mysqli_error($conn);
	 }
	 mysqli_close($conn);
 }
?>