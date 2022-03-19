<?php
include_once 'add-employee.php';
 include 'Database/connect.php';
 $result = mysqli_query($conn,"SELECT * FROM employee");
 $count = mysqli_num_rows($result);
 ?>
<html>
  <head>
        <meta charset= "UTF-8">
        <meta name="viewport" content="width=device-width",inital-scale="1",maximum-scale="1">
        <!-- Name of the page -->
         <title>Employee Information</title>
      
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
                   <a href="employee.php" class="active" ><span class="fa fa-file-medical"></span>
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
<h3 class="text-center text-success" id="message"><?php echo $success ?></h3>
  <div class="container">
   <div class="table-wrapper">
    <div class="table-title">
	  <div class="row">
	      <div class="col-sm6">
		         <a href="#add-employee.php" class="btn btn-success" onclick='openForm()'><i class="fa fa-plus"></i> Add Employee</a>
				 <a href="#" class="btn btn-danger" onclick="createPDf()" ><i class="fa fa-print"></i> Print</a>
				 <a href="#" class="btn btn-secondary" id="export" ><i class="fa fa-file"></i> Generate report</a>
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
		    <th>Employee No</th>
			<th>Prefix</th>
			<th>Fullname</th>
			<th>Date of Birth</th>
			<th>Sex</th>
			<th>Marital Status</th>
			<th>Qualification</th>
			<th>Nationality</th>
			<th>District</th>
			<th>Village</th>
			<th>Traditional Authority</th>
			<th>Address</th>
			<th>Disability</th>
			<th>Maiden Name</th>
			<th>Next of Kin</th>
			<th>Address of Kin</th>
			<th>Initials</th>
			<th>Action</th>
		 </tr>
			</thead>
			   <tbody>
			     <?php 
			       while($row =mysqli_fetch_array($result))
				   {
			        
			         $employeeid    = $row["employeeid"]; 
					 $prefix  = $row["prefix"]; 
					 $fullname    = $row["fullname"]; 
					 $dateofbirth   = $row["dateofbirth"]; 
					 $sex    = $row["sex"];
					 $maritialstatus    = $row["maritialstatus"];
					 $qualification    = $row["qualification"];
					 $nationality    = $row["nationality"];
					 $district   = $row["district"];
				     $village    = $row["village"];
					 $traditionalauthority   = $row["traditionalauthority"];
					 $address    = $row["address"];
					 $disability   = $row["disability"];
					 $maidenname  = $row["maidenname"];
					 $nextofkin    = $row["nextofkin"];
					 $addressofkin  = $row["addressofkin"];
					 $intial    = $row["intial"];
                       
                       
				    
					  ?>
					 
				  
				   <tr>
				     <td><?php echo $employeeid  ?></td>
			         <td><?php echo $prefix ?></td>
			         <td><?php echo $fullname ?></td>
			         <td><?php echo $dateofbirth  ?></td>
			         <td><?php echo  $sex   ?></td>
			         <td><?php echo  $maritialstatus ?></td>
					 <td><?php echo $qualification  ?></td>
			         <td><?php echo   $nationality   ?></td>
			         <td><?php echo  $district ?></td>
					 <td><?php echo $village  ?></td>
			         <td><?php echo  $traditionalauthority     ?></td>
			         <td><?php echo  $address ?></td>
					 <td><?php echo $disability  ?></td>
			         <td><?php echo  $maidenname    ?></td>
			         <td><?php echo  $nextofkin ?></td>
					 <td><?php echo  $addressofkin ?></td>
					 <td><?php echo $intial ?></td>
					 
			         <td>
			          <a href="update-employee.php?GetID=<?php echo $employeeid ?>" class="edit" title="Edit"><i class="material-icons" data-toggle="tooltip"><i class="fa fa-pen"></i></i></a>
			          <a href="delete-employee.php?employeeid=<?php echo $row['employeeid']; ?>" class="delete" name="delete" title="Delete"><i class="material-icons" data-toggle="tooltip"><i class="fa fa-trash"></i></i></a>
			        <!--  <a href="#" class="view" title="View"><i class="material-icons" data-toggle="tooltip"><i class="fa fa-eye"></i></i></a> -->
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
	 <div class="container-fluid" style="margin-top: -530px;">
	   <div class="row">
	     <div class="col-md-10 offset-md-1">
		    <div class="card" style="border-color:#05ffa3">
			 <div class="card-header  text-white" style="background-color:#2096ff;">
			 <h><b>Employee Form</b></h>
			    <button type="button" class="close" data-dismiss="modal" arial-hidden="true" onclick="closeForm()">&times;</button>
			 </div><!-- card header-->
			  <div class="card-body" style="background-color: #e9ecef;">
			   <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
			     <div class="row">
				   <div class="col-md-8">
				   <div class="row">
				     <div class="col-md-6">
					   <div class="form-group">
					     <label for="employeeid">Employee No</label>
					 <input type="text" class="form-control" name="employeeid" id="employeeid" maxlength="100"  required> 
						 <span id="available"></span>
					   </div><!--end form-group-->
					 </div><!--col-md-6-->
					 
					 <div class="col-md-6">
					   <div class="form-group">
					     <label for="prefix">Prefix(e.g Mr,Mrs,etc)</label>
						 <input type="text" class="form-control" name="prefix" id="prefix" maxlength="5" required>
						 <span id="available"></span>
					   </div><!--end form-group-->
					 </div><!--col-md-6-->
					 
					 <div class="col-md-6">
					 <div class="form-group">
					     <label for="fullname">Fullname</label>
						 <input type="text" class="form-control" name="fullname" id="fullname" maxlength="100" required>
					   </div><!--end form-group-->
					 </div>
					 
					 <div class="col-md-6">
					   <div class="form-group">
					     <label for="dateofbirth">Date of Birth</label>
						 <input type="date" class="form-control" name="dateofbirth" id="dateofbirth" required>
					   </div><!--end form-group-->
					 </div><!--col-md-6-->
					 
					  <div class="col-md-6">
					  <div class="form-group">
					     <label for="sex">Sex</label>
						 <input type="text" class="form-control" name="sex" id="sex" maxlength="9" required>
					   </div><!--end form-group-->
					 </div>
					 <!--col-md-6-->
					 <div class="col-md-6">
					   <div class="form-group">
					     <label for="maritialstatus">Marital Status(e.g single)</label>
						 <input type="text" class="form-control" name="maritialstatus" id="maritialstatus" maxlength="10" required>
						 <span id="available"></span>
					   </div><!--end form-group-->
					 </div><!--col-md-6-->
					 
					 <div class="col-md-6">
					   <div class="form-group">
					     <label for="qualification">Qualification</label>
						 <input type="text" class="form-control" name="qualification" id="qualification" maxlength="100" required>
						 <span id="available"></span>
					   </div><!--end form-group-->
					 </div><!--col-md-6-->
					
					 <div class="col-md-6">
					 <div class="form-group">
					     <label for="nationality">Nationality(e.g malawian)</label>
						 <input type="text" class="form-control" name="nationality" id="nationality" maxlength="25" required>
						 </div>
					 </div> <!--end maritial col-md-6 -->
					  <div class="col-md-6">
					   <div class="form-group">
					     <label for="district">District(of orgin)</label>
						 <input type="text" class="form-control" name="district" id="district" maxlength="50" required>
						 <span id="available"></span>
					   </div><!--end form-group-->
					 </div><!--col-md-6-->
                       <div class="col-md-6">
					   <div class="form-group">
					     <label for="village">Village</label>
						 <input type="text" class="form-control" name="village" id="village" maxlength="50" required>
						 <span id="available"></span>
					   </div><!--end form-group-->
					 </div><!--col-md-6-->
					  <div class="col-md-6">
					   <div class="form-group">
					     <label for="traditionalauthority">Traditional Authority</label>
						 <input type="text" class="form-control" name="traditionalauthority" id="traditionalauthority" maxlength="50" required>
						 <span id="available"></span>
					   </div><!--end form-group-->
					 </div><!--col-md-6-->
					  
					  <div class="col-md-6">
					   <div class="form-group">
					     <label for="address">Address</label>
						 <input type="text" class="form-control" name="address" id="address" maxlength="400" required>
						 <span id="available"></span>
					   </div><!--end form-group-->
					 </div><!--col-md-6-->
					  <div class="col-md-6">
					   <div class="form-group">
					     <label for="disability">Disability</label>
						 <input type="text" class="form-control" name="disability" id="disability" maxlength="50" required>
						 <span id="available"></span>
					   </div><!--end form-group-->
					 </div><!--col-md-6-->
					 <div class="col-md-6">
					   <div class="form-group">
					     <label for="maidenname">Maiden Name(If married)</label>
						 <input type="text" class="form-control" name="maidenname" id="maidenname" maxlength="50">
					   </div><!--end form-group-->
					 </div><!--col-md-6-->
					 <div class="col-md-12">
					   <div class="form-group">
					     <label for="nextofkin">Next of Kin</label>
						  <input type="text" class="form-control" name="nextofkin" id="nextofkin"  maxlength="70" required>
					   </div><!--end form-group-->
					 </div><!--col-md-6-->
					 <div class="col-md-6">
					   <div class="form-group">
					     <label for="addressofkin">Address of Kin</label>
						 <input type="text" class="form-control" name="addressofkin" id="addressofkin" maxlength="400" required>
					   </div><!--end form-group-->
					 </div><!--col-md-6-->
					 
					  <div class="col-md-6">
					   <div class="form-group">
					     <label for="intial">Initials(Up to 3)</label>
						 <input type="text" class="form-control" name="intial" id="intial" maxlength="8" required>
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
					<input type="submit" class="btn btn-success"  name="add" value="Add" style="width:200px;"><br><br>
					 <input type="button" class="btn btn-warning" data-dismiss="modal" onclick="closeForm()" value="Cancel" style="width:200px;"><br><br>
					   <button onclick="window.location.reload(true)" class="btn btn-primary" style="width:200px;">Refresh</button>
					</div>
				   <!--end of btn -->
				  
			   </form>
			  </div><!--card body-->
			</div><!--end of card-->
		 </div><!-- col-md-10-->
	   </div><!--end of row --> 
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
    
    <!-- End of Email validation -->
</body>    
    </html> <!--End of the page -->
