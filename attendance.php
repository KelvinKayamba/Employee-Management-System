<?php
include_once 'add-attendance.php';
 include 'Database/connect.php';
 ?>
<html>
  <head>
        <meta charset= "UTF-8">
        <meta name="viewport" content="width=device-width",inital-scale="1",maximum-scale="1">
        <!-- Name of the page -->
         <title>Employee Attendance</title>
      
       <!--Main style -->
         <link rel="stylesheet" href="CSS/style.css">
         <link rel="stylesheet" href="CSS/bootstrap.min.css"> 
      <!-- Additional style -->
     <script src="Javascript/all.min.js"></script>
	<!-- <script src="Javascript/jquery-1.9.1.js"></script>
	 <script src="Javascript/bootstrap.min.js"></script>
	 <script src="Javascript/Javascript.js"></script>-->
    </head>  
    
    <!--The Main Body -->
<body>
<!-- Sidebar -->
    <input type="checkbox" id="nav-toggle">
    <div class="sidebar">
        <div class="sidebar-brand">
            <h2><span class="fa fa-book-open"></span><small width="12px">  EMS</small></h2>
        </div>
        <div class="sidebar-menu">
           <ul>
               <li>
                   <a href="Dashboard.php" ><span class="fa fa-home"></span>
                   <span>Dashboard</span></a>
                   
               </li>  
              <!-- <li>
                   <div class="sidebar-dropdown">
                   <a href=""><span class="fa fa-user"></span>
                   <span>Users</span>
                       <span class="fa fa-chevron-down"></span>
                       </a>
                       <div class="dropdown-collapse">
                        <div class="dropdown-list">
                         <a href="manageusers.php" class="dropdown-items">Manage Users</a>
                       <a href="managerequision.php" class="dropdown-items">Manage Requision</a>
                         <a href="manageleave.php" class="dropdown-items">Manage Leave</a>
                          <a href="manageterminal.php" class="dropdown-items">Manage Terminals</a>
                       </div>
                       </div>
                    </div>
               </li>-->
               <li>
                   <a href="employee.php"><span class="fa fa-file-medical"></span>
                   <span>Employee</span></a>
               </li>
               <li>
                   <a href="department.php"><span class="fa fa-file-medical"></span>
                   <span>Department</span></a>
               </li>
               <li>
                   <div class="sidebar-dropdown">
                   <a href=""><span class="fa fa-user"></span>
                   <span>Employee Manager</span>
                       <span class="fa fa-chevron-down"></span>
                       </a>
                       <div class="dropdown-collapse">
                        <div class="dropdown-list">
                         <a href="manageaccounts.php" class="dropdown-items">Manage Accounts</a>
                       <a href="manageattendance.php" class="dropdown-items">Manage Attendance</a>
                         <a href="manageleave.php" class="dropdown-items">Manage Leave</a>
                          <!--<a href="managetravel.php" class="dropdown-items">Manage Travel</a>
                           <a href="manageterminal.php" class="dropdown-items">Manage Terminal benefit</a>-->
                       </div>
                       </div>
                    </div>
               </li>
               <li>
                   <a href="attendance.php" class="active" ><span class="fa fa-book-reader"></span>
                   <span>Attendance</span></a>
                   
               </li>
               <li>
                   <a href="leave.php"><span class="fa fa-book-open"></span>
                   <span>Leave Request</span></a>
               </li>
              <li>
                   <a href="schedule.php"><span class="fa fa-calendar"></span>
                   <span>Schedule</span></a>    
               </li>
                <!--<li>
                   <a href="terminal.php"><span class="fa fa-file-word"></span>
                   <span>Terminal Benefit Request</span></a> 
               </li>-->
               
               <li>
                   <a href="helpdesk.php"><span class="fa fa-phone"></span>
                   <span>Help Desk</span></a> 
               </li> 
          </ul>
        </div>
    </div><!-- End of sidebar -->
    <!--Main content -->
    <div class="main-content">
       <header>
             <h2 width="19px" height="30px">
             <label for="nav-toggle">
                <small><span class="fa fa-bars"></span></small> 
             </label>
                <small> Employee Management System</small>
                 </h2>
        </header>
     <br><br><br><br>
 <!-- Internal requision form -->
    <h3 class="text-center text-success" id="message"><?php echo $success ?></h3>
	 <div class="container" >
	   <div class="row">
	     <div class="col-md-10 offset-md-1">
		    <div class="card" style="border-color:#05ffa3">
			 <div class="card-header  text-white" style="background-color:#2096ff;">
			 <h><b>Attendance Form</b></h>
			 </div><!-- card header-->
			  <div class="card-body" style="background-color: #e9ecef;">
			   <form action="#" method="POST" enctype="multipart/form-data"> <!--FORM BEGIN -->
			     <div class="row">
				   <div class="col-md-8">
				   <div class="row">
				     <div class="col-md-6">
					   <div class="form-group">
					     <label for="fullname">Fullname</label>
					 <input type="text" class="form-control" name="fullname" id="fullname" maxlength="100" required> 
						 <span id="available"></span>
					   </div><!--end form-group-->
					 </div><!--col-md-6-->
					 
					 <div class="col-md-6">
					   <div class="form-group">
					     <label for="employeeid">Employee No</label>
						 <input type="text" class="form-control" name="employeeid" id="employeeid" maxlength="100" required>
						 <span id="available"></span>
					   </div><!--end form-group-->
					 </div><!--col-md-6-->
					 
					 <div class="col-md-6">
					 <div class="form-group">
				<label for="attendancetype">Attendance Type</label>
				<select id="attendancetype" name="attendancetype" class="form-control" maxlength="20" required>
                  <option name="attendancetype" value="0">Select attendance</option>
                  <option name="attendancetype" value="Present">Present</option>
                  <option name="attendancetype" value="Absent">Absent</option>
                 <!-- <option name ="role" value="user">User</option>-->
              </select>
					   </div><!--end form-group-->
					 </div>
					 
                       <div class="col-md-6">
					   <div class="form-group">
					     <label for="attenddescription">Reason</label>
						 <input type="text" class="form-control" name="attenddescription" id="attenddescription" maxlength="100">
						 <span id="available"></span>
					   </div><!--end form-group-->
					 </div><!--col-md-6-->
                       
                       <div class="col-md-6">
					 <div class="form-group">
					     <label for="date"> Current Date</label>
						 <input type="date" class="form-control" name="date" id="date"  required>
						 </div>
					 </div> <!--end maritial col-md-6 -->
                       
					 <div class="col-md-6">
					   <div class="form-group">
					     <label for="initial">Initials</label>
						 <input type="text" class="form-control" name="initial" id="initial" maxlength="10" required>
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
					<input type="submit" class="btn btn-success"  name="add" value="Send" style="width:200px;"><br><br>
                    <input type="submit" class="btn btn-warning" onclick="window.location.reload(true)" name="add" value="Refresh" style="width:200px; color:white;"><br><br>
					   
					</div>
				   <!--end of btn -->
                     
			   </form>
			  </div><!--card body-->
			</div><!--end of card-->
		 </div><!-- col-md-10-->
	   </div><!--end of row --> 
	 </div><!-- end container-fluid-->
	 <br><br>
	<!-- end of Annual leave form -->
    
    </div> <!--End of main content -->
         <!-- show and hide form -->	
<!-- Timer for message to hide -->	
  <script>
   $(document).ready(function()
   {
	   setTimeout(function(){
		  $('#message').fadeOut(); 
	   },3000);
   }) 
   </script>
</body>    
    </html> <!--End of the page -->
