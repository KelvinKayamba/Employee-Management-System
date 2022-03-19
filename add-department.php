<?php
 include 'Database/connect.php';
 $success ="";
 
 if(isset($_POST['add'])){
     
                     $deptno    = $_POST['deptno']; 
					 $departmentname  = $_POST['departmentname']; 
					 $employeeid    = $_POST['employeeid']; 
					 $ministry   = $_POST['ministry']; 
					 $location    = $_POST['location'];
					 $roomno    = $_POST['roomno'];
					 $post   = $_POST['post'];
					 $grade    = $_POST['grade'];
					 $dateofappoint   = $_POST['dateofappoint'];
				     $salary   = $_POST['salary'];
					 $terms   = $_POST['terms'];
     
     
	                 
					 
	 
	 $sql ="INSERT INTO `department`(`deptno`,`departmentname`,`employeeid`,`ministry`,`location`,`roomno`,`post`,`grade`,`dateofappoint`,`salary`,`terms`)
   VALUES('$deptno','$departmentname','$employeeid','$ministry','$location','$roomno','$post','$grade','$dateofappoint','$salary','$terms')";
	 if(mysqli_query($conn,$sql)){
		 $success = "New Record Created Successfully !";
	 }
	 else{
		 echo "Error:" .$sql . "".mysqli_error($conn);
	 }
	 mysqli_close($conn);
 }
?>