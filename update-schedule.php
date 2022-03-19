<!--Edit Schedule information-->
<?php
require_once 'Database/connect.php';
 $id =$_GET['GetID'];
 $query ="select * from event where id='".$id."'";
 $result =mysqli_query($conn,$query);
 
 while($row =mysqli_fetch_array($result))
				   {
                     $id    = $row['id']; 
					 $title  = $row['title'];
                    $description = $row['description'];
					 $start   = $row['start'];
					 $end   = $row['end']; 
                    
					 
				    
				   }
?>
<!--Update Employee records-->
<?php
$success ="";
if(isset($_POST['update'])){
    
                     $id    = $_POST['id']; 
					 $title  = $_POST['title'];
                     $description = $_POST['description'];
					 $start    = $_POST['start'];
					 $end   = $_POST['end']; 
                    
					 
    
					 
			$res ="UPDATE event SET title='$title',description='$description',start='$start',end='$end' WHERE id='$id'";
	        if(mysqli_query($conn,$res)){
		     $success = "Schedule Updated Successfully !";
			 header("Location: schedule.php");
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
         <title>Update Schedule</title>
      
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
<!--UPDATE SCHEDULE DATA -->
<div class="container">
	   <div class="row">
	     <div class="col-md-10 offset-md-1">
		    <div class="card" style="border-color:#05ffa3">
			 <div class="card-header  text-white" style="background-color:#2096ff;">
			   <h><b> Update Schedule</b></h>
			 </div><!-- card header-->
			  <div class="card-body" style="background-color: #fff;">
			    <form action="#" class="form" method="post" enctype="multipart/form-data">
            <div class="input-field">
              <label for="id" class="input-label">Schedule No</label>
              <input type="text" id="id" name="id" class="input" value="<?php echo $id ?>" maxlength="500" readonly>
            </div>    
            <div class="input-field">
              <label for="title" class="input-label">Title</label>
              <input type="text" id="title" name="title" class="input" value="<?php echo $title ?>" maxlength="500" required>
            </div>
            <div class="input-field">
              <label for="description" class="input-label">Description</label>
              <input type="text" id="description" name="description" class="input" placeholder="Enter your description" maxlength="500" required>
            </div>
            <div class="input-field">
              <label for="start" class="input-label">Start Date</label>
              <input type="date" id="start" name="start" class="input"  value="<?php echo $start ?>" maxlength="35" required>
            </div>
            
            <div class="input-field">
              <label for="end" class="input-label">End Date</label>
              <input type="date" id="end" name="end" class="input" value="<?php echo $end ?>" maxlength="35" required>
            </div>
            
            <button name="update" class="btn btn-success">Update</button>
          </form>
			  </div><!--card body-->
			</div><!--end of card-->
		 </div><!-- col-md-10-->
	   </div><!--end of row --> 
	 </div><!-- end container-fluid-->
	  <br><br>

<!-- END UPDATE schedule DATA -->
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