<?php
include_once 'userRegister.php';
 include 'Database/connect.php';

session_start();
 
// At the top of page right after session_start();
if (isset($_SESSION["locked"]))
{
    $difference = time() - $_SESSION["locked"];
    if ($difference > 600)
    {
        unset($_SESSION["locked"]);
        unset($_SESSION["login_attempts"]);
    }
}

//set login attempt if not set
		if(!isset($_SESSION['login_attempts'])){
			$_SESSION['login_attempts'] = 0;
		}

if(isset($_REQUEST['login'])){
$username = $_REQUEST['username'];
$password = $_REQUEST['password'];
$role = isset($_REQUEST['role']);

$login_query = $conn->prepare("SELECT `username`, `password`, role,`status` FROM `account` WHERE `username` = ? AND  `password` = ?");
$login_query->bind_param("ss",$username, $password);
$login_query->execute();
$login_query->bind_result($username,$password,$role,$status);
$login_query->store_result();
if($login_query->num_rows > 0){

    $login_query->fetch();
    if($status!=1){
      session_start();
      $_SESSION['m_un'] = $username;
	  switch($role){
       case 'admin': header('location: Dashboard.php ');
       break;
       case 'user':   header('location: Users/Dashboard.php');
       break;
     
      }

    }
	
    else if($status == 1){
          
           echo '<script>alert("Your account is blocked")</script>';
          
        
    }
	
}
else{
        //login fail
        $_SESSION["login_attempts"] += 1;
        header("Location:login.php");
    }	
}
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
             <h2><span class="fa fa-book-open"></span> Login/Register</h2>
        </div>
        <div class="sidebar-menu">
           <ul>
               <li>
                   <a href="" class="active" title="Login"><span class="fa fa-door-open"></span>
                   <span>Login</span></a>
               </li>  
               <li>
                   <a href="register.php" title="Register"><span class="fa fa-registered"></span>
                   <span>Register</span></a>
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
        <!-- Login Form-->
    <div class="form-wrapper">
          <div class="form-login"> <!-- Form design-->
        <h6 class="title">Login Now</h6>
        <form action="#" method="post" class="form" enctype="multipart/form-data">
            <div class="input-field">
              <label for="username" class="input-label">Username</label>
              <input type="text" id="username" name="username"  class="input" placeholder="Enter your username" pattern="[A-Za-z]+" title="Enter letters only"  maxlength="12" autocomplete="off"  autofocus required>
            </div>
            <div class="input-field">
              <label for="password" class="input-label">Password</label>
              <input type="password" id="password" name="password" class="input" pattern="^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$" title="aaQQ12aa" maxlength="8" placeholder="Enter your password" autocomplete="off" required>
            </div>
            <div class="button-box"><!--llogin limit 3 times -->
                <?php
                       if ($_SESSION["login_attempts"] > 2)
                         {
                          $_SESSION["locked"] = time();
                         echo "Please wait for 10 minutes";
                         }
                      else
                      {
 
                      ?>
                <button name="login"  class="btn">Login</button>
                <?php } ?>
            </div>
          </form>
        </div><!-- End of form design  -->
          </div>
<!--Login form  -->
    </div> <!--End of main content -->
</body>    
    </html> <!--End of the page -->
</DOCTYPE>