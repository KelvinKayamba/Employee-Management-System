<?php
 include 'Database/connect.php';
 
 
 if(isset($_POST['register'])){
	                 $fullname    = $_POST['fullname']; 
					 $username   = $_POST['username'];
                     $email =$_POST['email'];
					 $password   = $_POST['password']; 
					 $role  = $_POST['role']; 
	// Check if username or password exist				 
$query1=mysqli_query($conn,"select username from users where username='$username' ");
$query2=mysqli_query($conn,"select password from users where password='$password' ");
$run=mysqli_num_rows($query1);
$runs=mysqli_num_rows($query2);
 if($run>0){
	   echo"<script>alert('Username already exist,please try another one')</script>";
	   
 }
    else if($runs>0)  {
     echo"<script>alert('Password already exist,please try another one')</script>";
        
 }				
					 
	 
	 $sql ="INSERT INTO `account`(`fullname`,`username`,`email`,`password`,`role`)
    VALUES('$fullname','$username','$email','$password','$role')";
	 if(mysqli_query($conn,$sql)){
		 header('Location: login.php');
         
	 }
	 else{
		 echo "Error:" .$sql . "".mysqli_error($conn);
	 }
	 mysqli_close($conn);
 }
?>