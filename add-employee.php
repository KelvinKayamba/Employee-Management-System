<?php
 include 'Database/connect.php';
 $success ="";
 
 if(isset($_POST['add'])){
	                 $employeeid    = $_POST['employeeid']; 
					 $prefix  = $_POST['prefix']; 
					 $fullname    = $_POST['fullname']; 
					 $dateofbirth   = $_POST['dateofbirth']; 
					 $sex    = $_POST['sex'];
					 $maritialstatus    = $_POST['maritialstatus'];
					 $qualification    = $_POST['qualification'];
					 $nationality    = $_POST['nationality'];
					 $district   = $_POST['district'];
				     $village    = $_POST['village'];
					 $traditionalauthority   = $_POST['traditionalauthority'];
					 $address    = $_POST['address'];
					 $disability   = $_POST['disability'];
					 $maidenname  = $_POST['maidenname'];
					 $nextofkin    = $_POST['nextofkin'];
					 $addressofkin  = $_POST['addressofkin'];
					 $intial    = $_POST['intial'];
					 
	 
	 $sql ="INSERT INTO `employee`(`employeeid`,`prefix`,`fullname`,`dateofbirth`,`sex`,`maritialstatus`,`qualification`,`nationality`,`district`,`village`,`traditionalauthority`,`address`,`disability`,`maidenname`,`nextofkin`,`addressofkin`,`intial`)
   VALUES('$employeeid','$prefix','$fullname','$dateofbirth','$sex','$maritialstatus','$qualification','$nationality','$district','$village','$traditionalauthority','$address','$disability','$maidenname','$nextofkin','$addressofkin','$intial')";
	 if(mysqli_query($conn,$sql)){
		 $success = "New Record Created Successfully !";
	 }
	 else{
		 echo "Error:" .$sql . "".mysqli_error($conn);
	 }
	 mysqli_close($conn);
 }
?>