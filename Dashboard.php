<?php 
include 'Database/connect.php';
//Total number of employee(count)
$query ="select * from employee";
$run =mysqli_query($conn,$query);
$count = mysqli_num_rows($run);

// select user randomly
$ry ="SELECT * FROM `account` WHERE role='admin' ORDER BY RAND()";
$un =mysqli_query($conn,$ry);
$fetch =mysqli_fetch_array($un);

//total number of users
$que ="select * from account";
$ron =mysqli_query($conn,$que);
$cou = mysqli_num_rows($ron);

//Total number of department
$ques ="select * from department";
$rons =mysqli_query($conn,$ques);
$cout = mysqli_num_rows($rons);

//Total number of leave
$quest ="select * from aleave";
$ronst =mysqli_query($conn,$quest);
$cot = mysqli_num_rows($ronst);
?>
<DOCTYPE html>
<html>
  <head>
        <meta charset= "UTF-8">
        <meta name="viewport" content="width=device-width",inital-scale="1",maximum-scale="1">
        <!-- Name of the website -->
         <title>EMPLOYEE MANAGEMENT SYSTEM</title>
      
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
                   <a href="#" class="active"><span class="fa fa-home"></span>
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
                         <!-- <a href="managetravel.php" class="dropdown-items">Manage Travel</a>
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
                   <a href="helpdesk.php"><span class="fa fa-phone"></span>
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
        <!-- Search code -->
           <div class="search-wrapper">
             <input type="search" placeholder="Search here" class="search-input">
               <i class="fa fa-search"></i>
           </div>
        <!-- user profile code -->
           <div class="user-wrapper">
               <div class="dropdown">
               <img src="Images/profile.png" width="70px" height="70px" alt="" padding="5px" class="dropbtn">
        <div class="dropdown-content">
	     <a href=""> <span class="fa fa-user"></span>  Profile</a>
		 <a href="changepassword.php"><span class="fa fa-lock"></span>   Change Password</a>
		 <a href="logout.php"><span class="fa fa-door-open"></span>   Logout</a>
	  </div>
    </div>  <!--end dropdown -->
               <div>
                 <h4><?php echo $fetch['username'] ?></h4>
                 <small>Admin</small>
               </div>
           </div>
        </header>
      <!--Dashboard cards -->  
         <main>
            <div class="cards">
              <div class="card-single">
                <div>
                    <h1><?php echo $cou ?></h1>
                    <span>Users</span>
                  </div>
                  <div>
                    <span class="fa fa-users"></span>
                  </div>
                </div>
                
                 <div class="card-single">
                <div>
                    <h1><?php echo $count ?></h1>
                    <span>Employees</span>
                  </div>
                  <div>
                    <span class="fa fa-users"></span>
                  </div>
                </div>
                
                 <div class="card-single">
                <div>
                    <h1><?php echo $cout ?></h1>
                    <span>Departments</span>
                  </div>
                  <div>
                    <span class="fa fa-book-open"></span>
                  </div>
                </div>
                
                 <div class="card-single">
                <div>
                    <h1><?php echo $cot ?></h1>
                    <span> On Leave</span>
                  </div>
                  <div>
                    <span class="fa fa-book-open"></span>
                  </div>
                </div>
             </div><!--End of cards -->
        </main>
    </div> <!--End of main content -->
</body>    
    </html> <!--End of the page -->
</DOCTYPE>