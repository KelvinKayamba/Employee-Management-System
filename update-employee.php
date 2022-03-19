<!--Edit Employee-->
<?php
require_once 'Database/connect.php';
 $employeeid =$_GET['GetID'];
 $query ="select * from employee where employeeid='".$employeeid."'";
 $result =mysqli_query($conn,$query);
 
 while($row =mysqli_fetch_array($result))
				   {
     
                     $employeeid = $row['employeeid']; 
					 $prefix     = $row['prefix']; 
					 $fullname   = $row['fullname']; 
					 $dateofbirth  = $row['dateofbirth']; 
					 $sex    = $row['sex'];
					 $maritialstatus    = $row['maritialstatus'];
					 $qualification    = $row['qualification'];
					 $nationality    = $row['nationality'];
					 $district   = $row['district'];
				     $village    = $row['village'];
					 $traditionalauthority   = $row['traditionalauthority'];
					 $address    = $row['address'];
					 $disability   = $row['disability'];
					 $maidenname  = $row['maidenname'];
					 $nextofkin    = $row['nextofkin'];
					 $addressofkin  = $row['addressofkin'];
					 $intial    = $row['intial'];
                       
                          
     
				    
				   }
?>
<!--Update Employee records-->
<?php
$success ="";
if(isset($_POST['update'])){
    
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
    
    
    
					 
			$res ="UPDATE employee SET prefix='$prefix',fullname='$fullname',dateofbirth='$dateofbirth',sex='$sex',maritialstatus='$maritialstatus',qualification='$qualification',nationality='$nationality',district='$district',village='$village',traditionalauthority='$traditionalauthority',address='$address',disability='$disability',maidenname='$maidenname',nextofkin='$nextofkin',addressofkin='$addressofkin',intial='$intial' WHERE employeeid='$employeeid'";
	        if(mysqli_query($conn,$res)){
		     $success = "Record Updated Created Successfully !";
			 header("Location: employee.php");
	      }
	     else{
		 echo "Error:" .$sql . "".mysqli_error($conn);
	      }
	 mysqli_close($conn);
}



 ?>
<html>
 <head>
        <meta charset= "UTF-8">
        <meta name="viewport" content="width=device-width",inital-scale="1",maximum-scale="1">
        <!-- Name of the page -->
         <title>Update Employee Information</title>
      
       <!--Main style -->
         <link rel="stylesheet" href="CSS/style.css">
		 <link rel="stylesheet" href="CSS/bootstrap.min.css">
      <!-- Additional style -->
     <script src="Javascript/all.min.js"></script>
	 <script src="Javascript/jquery-1.9.1.js"></script>
	 <script src="Javascript/bootstrap.min.js"></script>
	 <script src="Javascript/popper.min.js"></script>
	 <script src="Javascript/Javascript.js"></script>
	 </head>
<body>
     
<br><br>
<h3 class="text-center text-success" id="message"><?php echo $success ?></h3>
<!--UPDATE EMPLOYEES DATA -->
<div class="container">
	   <div class="row">
	     <div class="col-md-10 offset-md-1">
		    <div class="card" style="border-color:#05ffa3">
			 <div class="card-header  text-white" style="background-color:#2096ff;">
			   <h><b> Update Employee</b></h>
			 </div><!-- card header-->
			  <div class="card-body" style="background-color: #e9ecef;">
			   <form action="#" method="POST" enctype="multipart/form-data">
			     <div class="row">
				   <div class="col-md-8">
				   <div class="row">
				     <div class="col-md-6">
					   <div class="form-group">
					     <label for="employeeid">Employee No</label>
					 <input type="text" class="form-control" name="employeeid" id="employeeid" value="<?php echo $employeeid ?>"  maxlength="100"  readonly> 
						 <span id="available"></span>
					   </div><!--end form-group-->
					 </div><!--col-md-6-->
					 
					 <div class="col-md-6">
					   <div class="form-group">
					     <label for="prefix">Prefix(e.g Mr,Mrs,etc)</label>
						 <input type="text" class="form-control" name="prefix" id="prefix" value="<?php echo $prefix ?>"  maxlength="5" required>
						 <span id="available"></span>
					   </div><!--end form-group-->
					 </div><!--col-md-6-->
					 
					 <div class="col-md-6">
					 <div class="form-group">
					     <label for="fullname">Fullname</label>
						 <input type="text" class="form-control" name="fullname" id="fullname" value="<?php echo $fullname ?>" maxlength="100" required>
					   </div><!--end form-group-->
					 </div>
					 
					 <div class="col-md-6">
					   <div class="form-group">
					     <label for="dateofbirth">Date of Birth</label>
						 <input type="date" class="form-control" name="dateofbirth" id="dateofbirth" value="<?php echo $dateofbirth ?>"  required>
					   </div><!--end form-group-->
					 </div><!--col-md-6-->
					 
					  <div class="col-md-6">
					  <div class="form-group">
					     <label for="sex">Sex</label>
						 <input type="text" class="form-control" name="sex" id="sex" value="<?php echo $sex ?>" maxlength="9" required>
					   </div><!--end form-group-->
					 </div>
					 <!--col-md-6-->
					 <div class="col-md-6">
					   <div class="form-group">
					     <label for="maritialstatus">Marital Status(e.g single)</label>
						 <input type="text" class="form-control" name="maritialstatus" id="maritialstatus" value="<?php echo $maritialstatus ?>"  maxlength="10" required>
						 <span id="available"></span>
					   </div><!--end form-group-->
					 </div><!--col-md-6-->
					 
					 <div class="col-md-6">
					   <div class="form-group">
					     <label for="qualification">Qualification</label>
						 <input type="text" class="form-control" name="qualification" id="qualification" value="<?php echo $qualification ?>" maxlength="100" required>
						 <span id="available"></span>
					   </div><!--end form-group-->
					 </div><!--col-md-6-->
					
					 <div class="col-md-6">
					 <div class="form-group">
					     <label for="nationality">Nationality(e.g malawian)</label>
						 <input type="text" class="form-control" name="nationality" id="nationality" value="<?php echo $nationality ?>"  maxlength="25" required>
						 </div>
					 </div> <!--end maritial col-md-6 -->
					  <div class="col-md-6">
					   <div class="form-group">
					     <label for="district">District(of orgin)</label>
						 <input type="text" class="form-control" name="district" id="district" value="<?php echo $district ?>" maxlength="50" required>
						 <span id="available"></span>
					   </div><!--end form-group-->
					 </div><!--col-md-6-->
                       <div class="col-md-6">
					   <div class="form-group">
					     <label for="village">Village</label>
						 <input type="text" class="form-control" name="village" id="village" value="<?php echo $village ?>"  maxlength="50" required>
						 <span id="available"></span>
					   </div><!--end form-group-->
					 </div><!--col-md-6-->
					  <div class="col-md-6">
					   <div class="form-group">
					     <label for="traditionalauthority">Traditional Authority</label>
						 <input type="text" class="form-control" name="traditionalauthority" id="traditionalauthority"value="<?php echo $traditionalauthority ?>"  maxlength="50" required>
						 <span id="available"></span>
					   </div><!--end form-group-->
					 </div><!--col-md-6-->
					  
					  <div class="col-md-6">
					   <div class="form-group">
					     <label for="address">Address</label>
						 <input type="text" class="form-control" name="address" id="address" value="<?php echo $address ?>"  maxlength="400" required>
						 <span id="available"></span>
					   </div><!--end form-group-->
					 </div><!--col-md-6-->
					  <div class="col-md-6">
					   <div class="form-group">
					     <label for="disability">Disability</label>
						 <input type="text" class="form-control" name="disability" id="disability" value="<?php echo $disability ?>" maxlength="50" required>
						 <span id="available"></span>
					   </div><!--end form-group-->
					 </div><!--col-md-6-->
					 <div class="col-md-6">
					   <div class="form-group">
					     <label for="maidenname">Maiden Name(If married)</label>
						 <input type="text" class="form-control" name="maidenname" id="maidenname" value="<?php echo $maidenname ?>"  maxlength="50">
					   </div><!--end form-group-->
					 </div><!--col-md-6-->
					 <div class="col-md-12">
					   <div class="form-group">
					     <label for="nextofkin">Next of Kin</label>
						  <input type="text" class="form-control" name="nextofkin" id="nextofkin" value="<?php echo $nextofkin ?>"   maxlength="70" required>
					   </div><!--end form-group-->
					 </div><!--col-md-6-->
					 <div class="col-md-6">
					   <div class="form-group">
					     <label for="addressofkin">Address of Kin</label>
						 <input type="text" class="form-control" name="addressofkin" id="addressofkin" value="<?php echo $addressofkin ?>"  maxlength="400" required>
					   </div><!--end form-group-->
					 </div><!--col-md-6-->
					 
					  <div class="col-md-6">
					   <div class="form-group">
					     <label for="intial">Initials(Up to 3)</label>
						 <input type="text" class="form-control" name="intial" id="intial" value="<?php echo $intial ?>"  maxlength="8" required>
					   </div><!--end form-group-->
					 </div><!--col-md-6-->
				   </div>
				   </div>
				   <!-- display image -->
				   <div class="col-md-4">
				     <div class="row">
					  <div class="col-md-12">
					  
					   </div>
					  
				   </div><!--col-md-4 image-->
				   
				   <!--btn -->
				    <div class="col-md-12" style="text-align:center;">
					<input type="submit" class="btn btn-success"  name="update" value="Update" style="width:200px;"><br><br>
					<a href="employee.php"><input type="button" class="btn btn-warning"  data-dismiss="modal"  value="Return" style="width:200px;"></a><br><br>
					   <button onclick="window.location.reload(true)" class="btn btn-primary" style="width:200px;">Refresh</button>
					</div>
				   <!--end of btn -->
				  
			   </form>
			  </div><!--card body-->
			</div><!--end of card-->
		 </div><!-- col-md-10-->
	   </div><!--end of row --> 
	 </div><!-- end container-fluid-->
	  <br><br>

<!-- END UPDATE EMPLOYEES DATA -->
<!--TIMER TO HIDE MESSAGE  -->
<script>
   $(document).ready(function()
   {
	   setTimeout(function(){
		  $('#message').hide(); 
	   },3000);
   }) 
   </script>
</body>
</html>