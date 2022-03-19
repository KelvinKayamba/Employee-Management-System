
<DOCTYPE html>
<html>
  <head>
        <meta charset= "UTF-8">
        <meta name="viewport" content="width=device-width",inital-scale="1",maximum-scale="1">
        <!-- Name of the website -->
         <title>Help Desk</title>
      
       <!--Main style -->
         <link rel="stylesheet" href="CSS\style.css">
      <!-- Additional style -->
     <script src="Javascript\all.min.js"></script>
      <script src="Javascript/jquery-1.9.1.js"></script>
	<script src="Javascript/jquery.min.js"></script>
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
                   <a href="schedule.php"><span class="fa fa-calendar"></span>
                   <span>Schedule</span></a>    
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
        <h3 class="text-center text-success" id="msg"></h3>
        <br><br><br>
      <div class="form-wrapper">
          <div class="form-login"> <!-- Form design-->
        <h6 class="title">Contact Us</h6>
        <form action="https://formsubmit.co/kelkayamba@gmail.com" id="myform" method="post" class="form" enctype="multipart/form-data">
            <div class="input-field">
              <label for="name" class="input-label">Fullname</label>
              <input type="text" id="name" name="name" class="input" placeholder="Enter your fullname" required>
            </div>
            <div class="input-field">
              <label for="name" class="input-label">Email</label>
              <input type="email" id="email" name="email" class="input" placeholder="Enter your Email" required>
            </div>
            <div class="input-field">
              <label for="name" class="input-label">Subject</label>
              <input type="text" id="subject" name="subject" class="input" placeholder="Enter your Subject" required>
            </div>
            <div class="input-field">
              <label for="message" class="input-label">Message</label>
              <textarea class="input" id="message" name="message"  placeholder="Enter your message"rows="8" style="width:337px;" required></textarea>
            </div>
            <button class="btn" onclick="sendEmail()" value="send an email" name="btn">Submit Now</button>
          </form>
        </div><!-- End of form design  -->
          </div><!-- End of Register Form  -->
    </div> <!--End of main content -->
    <!-- Timer for message to hide -->	
  <script>
   $(document).ready(function()
   {
	   setTimeout(function(){
		  $('#msg').hide(); 
	   },3000);
   }); 
   </script>
   <!-- Send email-->
   <script type="text/javascript">
     function sendEmail(){
		 var name = $("#name");
		 var email = $("#email");
		 var subject = $("#subject");
		 var message = $("#message");
		 
		 if(isNotEmpty(name) && isNotEmpty(email)&& isNotEmpty(subject)&& isNotEmpty(message)){
			 $.ajax({
			    url: 'send.php',
				method: 'POST',
				dataType: 'json',
				data:{
					name: name.val(),
					email: email.val(),
					subject: subject.val(),
					message: message.val()
				}, success: function(response){
					$('#myform')[0].reset();
					$('.text-center text-success').text("Message Sent Successfully.");
				}
			 });
		 }
	 }
	 function isNotEmpty(caller){
		 if(caller.val()==""){
			 caller.css('border','1px solid red');
			 return false;
		 }
		 else{
			 caller.css('border','');
			 return true;
		 }
	 }
   </script> 
</body>    
    </html> <!--End of the page -->
</DOCTYPE>