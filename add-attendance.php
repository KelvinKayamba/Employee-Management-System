<?php
 include 'Database/connect.php';
 $success ="";
 
 if(isset($_POST['add'])){
	                 $fullname     = $_POST['fullname']; 
					 $employeeid  = $_POST['employeeid']; 
					 $attendancetype   = $_POST['attendancetype']; 
					 $attenddescription  = $_POST['attenddescription']; 
					 $date   = $_POST['date'];
					 $initial   = $_POST['initial'];
					
					 
	 
	 $sql ="INSERT INTO `attendance`(`fullname`,`employeeid`,`attendancetype`,`attenddescription`,`date`,`initial`)
    VALUES('$fullname','$employeeid','$attendancetype','$attenddescription','$date','$initial')";
	 if(mysqli_query($conn,$sql)){
		 $success = "Request submitted !";
         
	 }
	 else{
		 echo "Error:" .$sql . "".mysqli_error($conn);
	 }
	 mysqli_close($conn);
 }
?>