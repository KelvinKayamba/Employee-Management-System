<?php include("Database/connect.php"); ?>
<?php 

 $_POST['val'];
 $_POST['userid'];

 $change_status_query = mysqli_query($conn,"UPDATE `account` SET `status`= '".$_POST['val']."' WHERE `userid`= '".$_POST['userid']."' ");
 if($change_status_query){
 	echo "block";

 }
 
?>