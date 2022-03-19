<?php
 include 'Database/connect.php';
 $success ="";
 
 if(isset($_POST['add'])){
	                 $fullname     = $_POST['fullname']; 
                     $post    = $_POST['post']; 
                     $grade   = $_POST['grade']; 
                     $employeeid   = $_POST['employeeid']; 
                     $reason    = $_POST['reason']; 
					 $nodays   = $_POST['nodays']; 
					 $startdate   = $_POST['startdate']; 
					 $finishdate  = $_POST['finishdate']; 
					 $returnday   = $_POST['returnday'];
					 $leaveaddress   = $_POST['leaveaddress'];
                     $date   = $_POST['date'];
					
					 
	 
	 $sql ="INSERT INTO `aleave`(`fullname`,`post`,`grade`,`employeeid`,`reason`,`nodays`,`startdate`,`finishdate`,`returnday`,`leaveaddress`,`date`)
    VALUES('$fullname','$post','$grade','$employeeid','$reason','$nodays','$startdate','$finishdate','$returnday','$leaveaddress','$date')";
	 if(mysqli_query($conn,$sql)){
		 $success = "Request submitted !";
         
	 }
	 else{
		 echo "Error:" .$sql . "".mysqli_error($conn);
	 }
	 mysqli_close($conn);
 }
?>