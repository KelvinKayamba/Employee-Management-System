<?php
include_once 'add-attendance.php';
 include 'Database/connect.php';
 $result = mysqli_query($conn,"SELECT * FROM attendance ");
  $count = mysqli_num_rows($result);
 ?>
<html>
  <head>
        <meta charset= "UTF-8">
        <meta name="viewport" content="width=device-width",inital-scale="1",maximum-scale="1">
        <!-- Name of the page -->
         <title>Manage Attendance</title>
      
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
		         <a href="#add-requision.php" class="btn btn-success" onclick='openForm()'><i class="fa fa-plus"></i> Add attendance</a>
				 <a href="#" class="btn btn-danger" onclick="createPDf()"><i class="fa fa-print"></i> Print</a>
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
           <th>Attendance No</th>
		    <th>Fullname</th>
			<th>Employee No</th>
			<th>Attendance Type</th>
			<th>Reason</th>
			<th>Current Date</th>
			<th>Initials</th>
			<th>Action</th>
		 </tr>
			</thead>
			   <tbody>
			     <?php 
			       while($row =mysqli_fetch_array($result))
				   {
			         $attendanceid   = $row["attendanceid"];
                     $fullname    = $row["fullname"]; 
					 $employeeid   = $row["employeeid"]; 
					 $attendancetype    = $row["attendancetype"]; 
					 $attenddescription  = $row["attenddescription"]; 
					 $date  = $row["date"];
					 $initial   = $row["initial"];
					 
				    
					  ?>
					 
				  
				   <tr>
                     <td><?php echo $attendanceid   ?></td>
				     <td><?php echo $fullname   ?></td>
			         <td><?php echo $employeeid ?></td>
			         <td><?php echo $attendancetype  ?></td>
			         <td><?php echo $attenddescription  ?></td>
			         <td><?php echo $date   ?></td>
			         <td><?php echo $initial  ?></td>
					 
			         <td>
			          <!--<a href="" class="edit" title="Edit"><i class="material-icons" data-toggle="tooltip"><i class="fa fa-pen"></i></i></a>
			          <a href="" class="delete" name="delete" title="Delete"><i class="material-icons" data-toggle="tooltip"><i class="fa fa-trash"></i></i></a> -->
                      <a href="#" class=" btn btn-success" id="export" style="color:white;" >Accept</a>
                      <a href="decline-attendance.php?attendanceid=<?php echo $row['attendanceid']; ?>" class="btn btn-danger" id="delete" style="color:white;" >Delete</a>
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
			     <div class="hint-text">Showing <b> <?php echo $count  ?></b> out of<b> <?php echo $count  ?></b> entries</div>
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
</body>    
    </html> <!--End of the page -->
