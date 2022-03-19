<!--Edit Department information-->
<?php
require_once 'Database/connect.php';
 $deptno =$_GET['GetID'];
 $query ="select * from department where deptno='".$deptno."'";
 $result =mysqli_query($conn,$query);
 
 while($row =mysqli_fetch_array($result))
				   {
                     $deptno    = $row['deptno']; 
					 $departmentname  = $row['departmentname']; 
					 $employeeid    = $row['employeeid']; 
					 $ministry   = $row['ministry']; 
					 $location    = $row['location'];
					 $roomno    = $row['roomno'];
					 $post   = $row['post'];
					 $grade    = $row['grade'];
					 $dateofappoint   = $row['dateofappoint'];
				     $salary   = $row['salary'];
					 $terms   = $row['terms'];
				    
				   }
?>
<!--Update Employee records-->
<?php
$success ="";
if(isset($_POST['update'])){
    
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
    
					 
			$res ="UPDATE department SET departmentname='$departmentname',employeeid='$employeeid',ministry='$ministry',location='$location',roomno='$roomno',post='$post',grade='$grade',dateofappoint='$dateofappoint',salary='$salary',terms='$terms' WHERE deptno='$deptno'";
	        if(mysqli_query($conn,$res)){
		     $success = "Record Updated Successfully !";
			 header("Location: department.php");
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
         <title>Update Department Information</title>
      
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
			   <h><b> Update Department Information</b></h>
			 </div><!-- card header-->
			  <div class="card-body" style="background-color: #e9ecef;">
			   <form action="#" method="POST" enctype="multipart/form-data">
			     <div class="row">
				   <div class="col-md-8">
				   <div class="row">
				     <div class="col-md-6">
					   <div class="form-group">
					     <label for="deptno">Dept No</label>
					 <input type="text" class="form-control" name="deptno" id="deptno" value="<?php echo $deptno ?>" maxlength="100"  required> 
						 <span id="available"></span>
					   </div><!--end form-group-->
					 </div><!--col-md-6-->
					 
					 <div class="col-md-6">
					   <div class="form-group">
					     <label for="departmentname">Department Name</label>
						 <input type="text" class="form-control" name="departmentname" id="departmentname" value="<?php echo $departmentname ?>"  maxlength="100" required>
						 <span id="available"></span>
					   </div><!--end form-group-->
					 </div><!--col-md-6-->
					 
					 <div class="col-md-6">
					 <div class="form-group">
					     <label for="employeeid">Employee No</label>
						 <input type="text" class="form-control" name="employeeid" id="employeeid"value="<?php echo $employeeid ?>"  maxlength="100" required>
					   </div><!--end form-group-->
					 </div>
					 
					 <div class="col-md-6">
					   <div class="form-group">
					     <label for="ministry">Ministry</label>
						 <input type="text" class="form-control" name="ministry" id="ministry" value="<?php echo $ministry ?>"  maxlength="100" required>
					   </div><!--end form-group-->
					 </div><!--col-md-6-->
					 
					  <div class="col-md-6">
					  <div class="form-group">
					     <label for="location">Location</label>
						 <input type="text" class="form-control" name="location" id="location" value="<?php echo $location ?>"  maxlength="100" required>
					   </div><!--end form-group-->
					 </div>
					 <!--col-md-6-->
					 <div class="col-md-6">
					   <div class="form-group">
					     <label for="roomno">Room No</label>
						 <input type="text" class="form-control" name="roomno" id="roomno" value="<?php echo $roomno ?>"  maxlength="50" required>
						 <span id="available"></span>
					   </div><!--end form-group-->
					 </div><!--col-md-6-->
					 
					 <div class="col-md-6">
					   <div class="form-group">
					     <label for="post">Post</label>
						 <input type="text" class="form-control" name="post" id="post" value="<?php echo $post ?>"  maxlength="100" required>
						 <span id="available"></span>
					   </div><!--end form-group-->
					 </div><!--col-md-6-->
					
					 <div class="col-md-6">
					 <div class="form-group">
					     <label for="grade">Grade</label>
						 <input type="text" class="form-control" name="grade" id="grade" value="<?php echo $grade ?>" maxlength="20" required>
						 </div>
					 </div> <!--end maritial col-md-6 -->
					  <div class="col-md-6">
					   <div class="form-group">
					     <label for="dateofappoint">Date of Appointment</label>
						 <input type="date" class="form-control" name="dateofappoint" id="dateofappoint"value="<?php echo $dateofappoint ?>"  maxlength="10" required>
						 <span id="available"></span>
					   </div><!--end form-group-->
					 </div><!--col-md-6-->
                       <div class="col-md-6">
					   <div class="form-group">
					     <label for="salary">Salary</label>
						 <input type="text" class="form-control" name="salary" id="salary"  value="<?php echo $salary ?>" maxlength="100" required>
						 <span id="available"></span>
					   </div><!--end form-group-->
					 </div><!--col-md-6-->
					  <div class="col-md-6">
					   <div class="form-group">
					     <label for="terms">Terms of Appointment</label>
						 <input type="text" class="form-control" name="terms" id="terms" value="<?php echo $terms ?>" maxlength="50" required>
						 <span id="available"></span>
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