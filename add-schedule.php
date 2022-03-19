<?php
 include 'Database/connect.php';
 $success ="";
 
 if(isset($_POST['add'])){
	                 $title     = $_POST['title']; 
                     $description    = $_POST['description']; 
                     $start    = $_POST['start']; 
                     $end   = $_POST['end'];
                      
                     
					 
	 
	 $sql ="INSERT INTO `event`(`title`,`description`,`start`,`end`)
    VALUES('$title',$description,'$start','$end')";
	 if(mysqli_query($conn,$sql)){
		 $success = "Schedule has been added successfully !";
         
	 }
	 else{
		 echo "Error:" .$sql . "".mysqli_error($conn);
	 }
	 mysqli_close($conn);
 }
?>