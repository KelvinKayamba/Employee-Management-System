<?php
include_once 'userRegister.php';
 include 'Database/connect.php';
 ?>
<DOCTYPE html>
<html>
  <head>
        <meta charset= "UTF-8">
        <meta name="viewport" content="width=device-width",inital-scale="1",maximum-scale="1">
        <!-- Name of the website -->
         <title>Employee Management System</title>
      
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
             <h2><span class="fa fa-book-open"></span> Register/Login</h2>
        </div>
        <div class="sidebar-menu">
           <ul>
               <li>
                   <a href="" class="active"><span class="fa fa-registered"></span>
                   <span>Register</span></a>
               </li>  
               <li>
                   <a href="login.php"><span class="fa fa-door-open"></span>
                   <span>Login</span></a>
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
      <div class="form-wrapper">
          <div class="form-login"> <!-- Form design-->
        <h6 class="title">Register Now</h6>
        <form action="userRegister.php" method="post" class="form" enctype="multipart/form-data">
            <div class="input-field">
              <label for="fullname" class="input-label">Fullname</label>
              <input type="text" name="fullname" id="fullname" class="input" placeholder="Enter your fullname" pattern="[A-Za-z]+" title="Enter letters only"  maxlength="50" autocomplete="off" autofocus  required>
            </div>
            <div class="input-field">
              <label for="username" class="input-label">Username</label>
              <input type="text" name="username" id="username" class="input" placeholder="Enter your username" pattern="[A-Za-z]+" title="Enter letters only"  maxlength="12" autocomplete="off" required>
            </div>
            <div class="input-field">
              <label for="email" class="input-label">Email</label>
              <input type="email" name="email" id="email" class="input" placeholder="Enter your email" maxlength="100" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+.[a-z]{2,4}$" title="Enter a valid email address e.g xxxx@gmail.com" autocomplete="off" required>
            </div>
            <div class="input-field">
              <label for="password" class="input-label">Password</label>
              <input type="password"  name="password"id="password" class="input" pattern="^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$" title="At least one number,one uppercase and one lowercase, and at least 8 characters e.g aaQQ12dd"  maxlength="8" placeholder="Enter your password" autocomplete="off" required>
            </div>
            <div class="input-field">
              <label for="role" name="role" class="input-label">Select Role</label>
              <select id="role" name="role" class="input" required>
                  <option name="role" value="0">Select your role</option>
                  <!--<option name="role" value="super admin">Super Admin</option>
                  <option name="role" value="admin">Admin</option>-->
                  <option name ="role" value="user">User</option>
              </select>
            </div>
            <button name="register"  class="btn">Register</button>
          </form>
        </div><!-- End of form design  -->
          </div><!-- End of Register Form  -->
    </div> <!--End of main content -->
    
       <!--Email Validation 
        <script>
	const email = document.getElementById("email");
	email.addEventListener("input", function (event){
		if(email.validity.typeMismatch){
			email.setCustomValidity("Format : kk@gmai.com");
		}
		else{
			email.setCustomValidity("");
		}
	}
	);
	
	</script>
    <!-- End of Email validation -->  
</body>    
    </html> <!--End of the page -->
</DOCTYPE>