
<?php include 'Database/connect.php';
if(isset($_POST['submit']))
{
    if(mysqli_query($conn,"update account set password='$_POST[password]' where username='$_POST[username]' "))
    {
       ?>
      <script type="text/javascript">
          alert("Password updated successfully")
      </script>
    <?php
    }
}

?>
<DOCTYPE html>
<html>
  <head>
        <meta charset= "UTF-8">
        <meta name="viewport" content="width=device-width",inital-scale="1",maximum-scale="1">
        <!-- Name of the website -->
         <title>Change Password</title>
      
       <!--Main style -->
         <link rel="stylesheet" href="CSS\style.css">
      <!-- Additional style -->
     <script src="Javascript\all.min.js"></script>
    </head>  
    
    <!--The Main Body -->
<body>
<!-- Sidebar -->
    <input type="checkbox" id="nav-toggle">
    <div class="sidebar">
        <div class="sidebar-brand">
             <h2><span class="fa fa-book-open"></span> EMS</h2>
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
                   <a href="attendance.php"><span class="fa fa-book-reader"></span>
                   <span>Attendance</span></a>
                   
               </li>
               <li>
                   <a href="leave.php"><span class="fa fa-book-open"></span>
                   <span>Leave Request</span></a>
               </li>
               <li>
                   <a href="schedule.php"><span class="fa fa-file-invoice"></span>
                   <span>Schedule</span></a>    
               </li>
                <!--<li>
                   <a href="terminal.php"><span class="fa fa-file-word"></span>
                   <span>Terminal Benefit Request</span></a> 
               </li>-->
               <li>
                   <a href="report.php"><span class="fa fa-file-word"></span>
                   <span>Generate report</span></a> 
               </li>
               <li>
                   <a href="helpdesk.php" class="active"><span class="fa fa-phone"></span>
                   <span>Help Desk</span></a> 
               </li> 
          </ul>
        </div>
    </div><!-- End of sidebar -->
    <!--Main content -->
    <div class="main-content">
       <header>
             <h2>
             <label for="nav-toggle">
                  <span class="fa fa-bars"></span>
             </label>
                 Employee Management System
                 </h2>
        </header>
       <!--REGISTER FORM-->
        <h3 class="text-center text-success" id="message"><?php echo $success ?></h3>
      <div class="form-wrapper">
          <div class="form-login"> <!-- Form design-->
        <h6 class="title">Change Password</h6>
        <form action="#" class="form" method="post" enctype="multipart/form-data">
            <div class="input-field">
              <label for="username" class="input-label">Username</label>
              <input type="text" id="username" name="username" class="input" placeholder="Enter your Username" required>
            </div>
            
            <div class="input-field">
               <label for="newpassword" class="input-label"> New Password</label>
              <input type="password" id="password" name="password" class="input" placeholder="Enter your New Password" required>
            </div>
            <button class="btn" name="submit">Change</button>
          </form>
        </div><!-- End of form design  -->
          </div><!-- End of Register Form  -->
    </div> <!--End of main content -->
    <!-- Timer for message to hide -->	
  <script>
   $(document).ready(function()
   {
	   setTimeout(function(){
		  $('#message').hide(); 
	   },3000);
   }); 
   </script>
</body>    
    </html> <!--End of the page -->
</DOCTYPE>