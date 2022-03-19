<?php
include_once 'userRegister.php';
 include 'Database/connect.php';
 $result = mysqli_query($conn,"SELECT * FROM account");
 $count = mysqli_num_rows($result);
 ?>
<html>
  <head>
        <meta charset= "UTF-8">
        <meta name="viewport" content="width=device-width",inital-scale="1",maximum-scale="1">
        <!-- Name of the page -->
         <title>Employees Accounts</title>
      
       <!--Main style -->
         <link rel="stylesheet" href="CSS/style.css">
         <link rel="stylesheet" href="CSS/bootstrap.min.css"> 
      <!-- Additional style -->
     <script src="Javascript/all.min.js"></script>
	<script src="Javascript/jquery-1.9.1.js"></script>
	 <!--<script src="Javascript/bootstrap.min.js"></script>
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
                   <a href="employee.php"  ><span class="fa fa-file-medical"></span>
                   <span>Employee</span></a>
               </li>
               <li>
                   <a href="department.php"  ><span class="fa fa-file-medical"></span>
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
                   <a href="schedule.php"><span class="fa fa-calendar"></span>
                   <span>Schedule</span></a>    
               </li>
               
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
      <!--TABLE DESIGN FOR EMPLOYEE INFORMATION-->
<br>
<br><br>
  <div class="container">
   <div class="table-wrapper">
    <div class="table-title">
	  <div class="row">
	      <div class="col-sm6">
		         <a href="#add-employee.php" class="btn btn-success" onclick='openForm()'><i class="fa fa-plus"></i> Add User</a>
				 <a href="#" class="btn btn-danger" onclick="createPDf()" ><i class="fa fa-print"></i> Print</a>
				 <a href="#" class="btn btn-secondary" id="export" ><i class="fa fa-file"></i> Export</a>
		  </div>
		  <div class="col-sm-6">
		  <div class="form-inline pull-right">
				<input type="text" class="form-control"  id="search"name="search" onkeyup="searcher()"  placeholder="Search here..." required="required"/>
			</div><!--end of search -->
			</div><!-- end col-md-6-->
	  </div>
       </div>
       <table div class="table table-striped table-hover " id="myTable" >
		    <thead>
			   <tr>
		    <th>User No</th>
			<th>Fullname</th>
            <th>Username</th>
            <th>Email</th>
			<th>Password</th>
            <th>Current Status</th>
            <th>Change Status</th>
			<th>Action</th>
		 </tr>
			</thead>
			   <tbody>
			     <?php 
			       while($row =mysqli_fetch_array($result))
				   {
			        
			      
				     $userid    = $row["userid"]; 
					 $fullname = $row["fullname"]; 
                     $username = $row["username"];
                     $email = $row["email"];
					 $password   = $row["password"]; 
					 $role     = $row["role"];
                     $status   = $row["status"];
					
					  ?>
					 
				  
				   <tr>
				     <td><?php echo $userid   ?></td>
			         <td><?php echo $fullname ?></td>
                     <td><?php echo $username ?><br><span class='badge badge-lg badge-info text-white'><?php echo $role  ?></span>
                       </td>
                     <td><?php echo $email ?></td>
                       
			         <td><?php echo $password ?></td>
			         <?php  if($row['status']== 1 ){?>
                       <td class="btn btn-danger" style="width:8px;" >Blocked</td>
                        <?php 
                      }
                      else{
                        ?>
                        <td class="btn btn-success" style="width:8px;" >Active</td>
                        <?php
                      }
                      ?>
                       <?php  if($row['status']== 1 ){?>
					 <td><a href="#" name="approve"  class="active" title="active"><i class="material-icons" data-toggle="tooltip"><button value="0" onclick="return Unblock_user(this.value,<?php echo $row['userid']; ?>);"   class="btn btn-secondary" style="width:80px;, height:20px;">Active</button></i></a></td>
                      <?php 
                      }
					  else{
                        ?>
						<td><a href="#" class="disable"  title="disable"><i class="material-icons" data-toggle="tooltip"><button value="1" onclick="return block_user(this.value,<?php echo $row['userid']; ?>);" class="btn btn-warning" style="width:80px;, height:20px;">Disable</button></i></a></td>
					   <?php
                      }
                      ?>
                     <td>
                    <a href="#" class="edit" title="edit"><i class="material-icons" data-toggle="tooltip"><button  class="btn btn-primary" style="width:80px;, height:20px;">Edit</button></i></a>
                    <a href="delete-user.php?userid=<?php echo $row['userid']; ?>" class="remove" title="remove"><i class="material-icons" data-toggle="tooltip"><button  class="btn btn-danger" style="width:80px;, height:20px;">Remove</button></i></a>
                   <!-- <a href="#" class="active" title="active"><i class="material-icons" data-toggle="tooltip"><button  class="btn btn-secondary" style="width:80px;, height:20px;">Active</button></i></a>
                    <a href="#" class="disable" title="disable"><i class="material-icons" data-toggle="tooltip"><button  class="btn btn-warning" style="width:80px;, height:20px;">Disable</button></i></a>-->
                    </td>
			         
				   </tr> 
				   
				     
				    <?php 
					 }
					?>
					<?php
					// close connnection  database
					mysqli_close($conn);
					?>
			   </tbody>
		  </table><!-- end of table -->
         <!-- pagination -->
		     <div class="clearfix">
			     <div class="hint-text">Showing <b> <?php echo $count ?></b> out of<b> <?php echo $count ?></b> entries</div>
				  <ul class="pagination">
				     <li class="page-item"><a href="#" class="page-link">Previous</a></li>
					 <li class="page-item"><a href="#" class="page-link">1</a></li>
					 <li class="page-item"><a href="#" class="page-link">2</a></li>
					 <li class="page-item"><a href="#" class="page-link">3</a></li>
					 <li class="page-item"><a href="#" class="page-link">4</a></li>
					 <li class="page-item"><a href="#"class="page-link" >5</a></li>
					 <li class="page-item"><a href="#"class="page-link" >Next</a></li>
				  </ul>
				 </div>
			 </div>
		  <!--end of pagination-->
		  </div>
  </div> <!-- End of container-->
     <!-- ADD employee form -->
    <div class="main-content"> <!--Main content-->
	 <div class="container-fluid" style="margin-top: -670px;">
	 <div class="col-md-10 offset-md-1">
          <div class="card" style="width: 500px; height: 500px; left: 118px;">
		  <div class="card-header text-white" style="background-color:#2096ff;" >
        <h><b>Register Now</b></h>
		 <button type="button" class="close" data-dismiss="modal" arial-hidden="true" onclick="closeForm()">&times;</button>
		</div>
		<div class="card-body" style="background-color: #fff;">
        <form action="userdata.php" class="form" method="post" enctype="multipart/form-data">
            <div class="input-field">
              <label for="name" class="input-label">Fullname</label>
              <input type="text" id="fullname" name="fullname" class="input" placeholder="Enter your fullname" maxlength="100" required>
            </div>
            <div class="input-field">
              <label for="name" class="input-label">Username</label>
              <input type="text" id="username" name="username" class="input" placeholder="Enter your username" maxlength="12" required>
            </div>
            <div class="input-field">
              <label for="name" class="input-label">Email</label>
              <input type="email" id="email" name="email" class="input" placeholder="Enter your Email" maxlength="100" required>
            </div>
            <div class="input-field">
              <label for="password" class="input-label">Password</label>
              <input type="password" id="password" name="password"class="input" placeholder="Enter your password" pattern="^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$" title="aaQQ12aa" maxlength="8"  required>
            </div>
           
            <div class="input-field">
              <label for="role" class="input-label">Select Role</label>
              <select id="role" name="role" class="input">
                  <option name="role" value="0">Select your role</option>
                 <!-- <option name="role" value="super admin">Super Admin</option> -->
                  <option name="role" value="admin">Admin</option>
                  <option name="role" value="user">User</option>
              </select>
            </div>
            <button name="register" class="btn btn-success">Register</button>
          </form>
        </div><!-- End of form design  -->
          </div><!-- End of Register Form  -->
	 </div><!-- end container-fluid-->
         </div>
	  <br><br>
	<!-- end of add employee form -->
      <!-- END TABLE DESIGN FOR EMPLOYEE INFORMATION-->
    </div> <!--End of main content -->
         <!-- show and hide form -->	
<script>
 function openForm(){
   document.body.classList.add("showForm");
 } 
 
 function closeForm(){
  document.body.classList.remove("showForm");
 }
 </script>
<!-- Timer for message to hide -->	
  <script>
   $(document).ready(function()
   {
	   setTimeout(function(){
		  $('#message').hide(); 
	   },3000);
   }) 
   </script>
    <!--Search employee -->
 <script>
  function searcher(){
	  //Declare variables
	  var input,filter,table,tr,td,i,txtValue;
	  input = document.getElementById("search");
	  filter = input.value.toUpperCase();
	  table = document.getElementById("myTable");
	  tr = table.getElementsByTagName("tr");
	  
	  // loop rows
	  for(i = 0; i < tr.length; i++){
		  td = tr[i].getElementsByTagName("td")[0];
		  if(td){
			  txtValue = td.textContent || td.innerText;
			  if(txtValue.toUpperCase().indexOf(filter) > -1){
				  tr[i].style.display = "";
				  
			  }
			  else{
				  tr[i].style.display="none";
			  }
		  }
	  }
  }
 </script>
 <!--  print -->	
	<script>
	function createPDf(){
		var sTable = document.getElementById('myTable').innerHTML;
		var style = "<style>";
		style = style + "table{width: 100%;font: 17px Arial;}";
		style = style + "table ,th,td{border: solid 1px #DDD; border-collapse: collapse;";
		style = style + "padding: 2px 3px; text-align:center;}";
		style = style + "</style>";
		
		//CREATE A WINDOW OBJECT
		var win = window.open('','','height=700,width=700');
		
		win.document.write('<html><head>');
		win.document.write('<title>Employees Records</title>');
		win.document.write(style);
		win.document.write('</head>');
		win.document.write('<body>');
		win.document.write(sTable);
		win.document.write('</body></html>');
		
		win.document.close();
		win.print();
	}
	</script>
	<!-- end of print -->
	<!--export Table To Excel -->
	<script>
	 document.getElementById('export').onclick=function(){
		 var tableId= document.getElementById('myTable').id;
		 htmlTableToExcel(tableId,filename ='');
	 }
	 var htmlTableToExcel= function(tableId,fileName =''){
		 var excelFileName='excel_table_data';
		 var TableDataType='application/vnd.ms-excel';
		 var selectTable = document.getElementById(tableId);
		 var htmlTable = selectTable.outerHTML.replace(/ /g, '%20');
		   
		 filename = filename?
		 filename+'.xls':excelFileName+'.xls';
		 var excelFileURL = document.createElement("a");
		 
		 document.body.appendChild(excelFileURL);
		 if(navigator.msSaveOrOpenBlob){
			 var blob = new Blob(['\ufeff'.htmlTable],{
				 type: TableDataType
			 });
			 navigator.msSaveOrOpenBlob(blob,fileName);
		 }else{
			 excelFileURL.href ='data:' + TableDataType + ','+ htmlTable;
			 excelFileURL.download = fileName;
			 excelFileURL.click();
		 }
	 }
	</script>
	<script type="text/javascript" src="xlsx.full.min.js"></script>
	<!-- end export Excel -->
    <!--Email Validation -->
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
    <!-- Block or Unblock User-->
    <script type="text/javascript">
     /* Unblockng User */
    function Unblock_user(val,userid){
      var conf = confirm("Do yo want to unblock user ?");

      if(conf){
      $.ajax({
      type:'post',
      url:'unblock_user.php',
      data:{val:val,userid:userid},
      success:function(result){
        //console.log(result);
        if(result == "Unblock"){
          //alert(result);
          
          location.reload();

        }
        else{
          //alert(result);
          location.reload();
          
          

        }

      }


    });


    }
  }


 /* Blockng User */
    function block_user(val,userid){
      var conf = confirm("Do yo want to Block this user?");
      

      if(conf){
      $.ajax({
      type:'post',
      url:'block_user.php',
      data:{val:val,userid:userid},
      success:function(result){
        //console.log(result);
        if(result == "block"){
         location.reload();

        }
        else{
          location.reload();

        }

      }


    });


    }

    }
  </script>
</body>    
    </html> <!--End of the page -->
