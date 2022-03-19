<?php include("Database/connect.php"); ?>
<?php
include("Database/connect.php");
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
      
	  switch($role){
       case 'super admin': header('location: Super Admin/Dashboard.php ');
       break;
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
}
?>