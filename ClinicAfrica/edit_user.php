




<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="Clogo.png" />

  <title>Edit Users</title>

  <!-- Custom fonts for this template-->
  <link href="http://localhost/patientrecords/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="http://localhost/patientrecords/assets/css/sb-admin-2.min.css" rel="stylesheet">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>  
 <script src="http://localhost/patientrecords/assets/jquery-3.3.1.min.js"></script>

 <link rel="stylesheet" type="text/css" href="http://localhost/patientrecords/assets/loader.css">
 
 <script src = "http://localhost/patientrecords/assets/js/scripts/bootstrap.js"></script>
<script src = "http://localhost/patientrecords/assets/js/scripts/jquery.min.js"></script>
<script src = "http://localhost/patientrecords/assets/js/scripts/dropdown.js"></script>
<script src = "http://localhost/patientrecords/assets/js/scripts/sidebar.js"></script>
<script src = "http://localhost/patientrecords/assets/js/scripts/jquery.dataTables.js"></script>
<script src = "http://localhost/patientrecords/assets/js/scripts/custom.js"></script>
<script type = "text/javascript">
	$(document).ready(function() {
		$('#table').DataTable();
		$('#table1').DataTable();
	});
	
</script>

<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>


  <script src = "http://localhost/patientrecords/assets/js/scripts/jquery.canvasjs.min.js"></script>


 <style>
   .sidenav {
  width: 100%;
  position: fixed;
  top: 0;
  left: 0;
  background: forestgreen;

}


.main {
  margin-left: 225px; /* Same as the width of the sidenav */

}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}



</style>



</head> 


<body id="page-top">
 
        
 <div class='alert-success text-center'><div class="text-center">Clinic Africa Kajjansi <b>admin</b></div></div>   
</div>


          
  </div>
          

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class=" navbar-nav bg-gradient-success sidenav sidebar sidebar-dark accordion " id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center"  href="#">
        <div class="sidebar-brand-icon rotate-n-0">
           <i class="fas fa-folder-open"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Patient Records</div>
      </a>
   

 <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Divider -->
      <hr class="sidebar-divider">


      <!-- Nav Item - for Patient Records Table (link for specific page)-->
      <li class="nav-item active">
         <!-- Nav Item - Tables -->
        <a class="nav-link collapsed " href="admitdatatable.php"> 

          <i class="fas fa-fw fa-table "></i>
          <span>Patient Records Table</span></a>
      </li>

      <!-- Nav Item - for Insert Multiple Record (link for specific page) -->
      <li class="nav-item active">
         <!-- Nav Item - Tables -->
        <a class="nav-link collapsed " href="multiplerecordview.php">
          <i class="fas fa-fw fa-list-alt "></i>
          <span>Add Records</span></a>
      </li>


      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">


    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="main d-flex flex-column">

      <!-- Main Content -->
      <div id="content"> 
 
      
    <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
 
  
         <!-- Nav Item - Tables -->
        <a  class="nav-link collapsed text-secondary" href="adduserview.php">
          <i class="fas fa-fw fa-user-plus "></i>
          <span>Add Users</span></a>


 <div class="topbar-divider d-none d-sm-block"></div>

         <!-- Nav Item - Tables -->
        <a  class="nav-link collapsed text-secondary" href="adddoctorview.php">
          <i class="fas fa-fw fa-user-md"></i>
          <span>Add Doctors</span></a>


    
          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

   
            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                  
     <!-- u_user coming from database -->

       <b>admin</b>
                           </span>
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">   
             <a class="dropdown-item" href="http://localhost/patientrecords/indexcontrol/changepassupdate">
             <i class="fas fa-fw fa-key mr-2 text-gray-400"></i>
               Change Password
             </a>
             <a class="dropdown-item" href="http://localhost/patientrecords/indexcontrol/secretquestion">
             <i class="fas fa-fw fa-user mr-2 text-gray-400"></i>
                Account Recovery
             </a>



                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->
 

        <!-- Begin Page Content -->
        <div class="container-fluid">
       

       
 

          <!-- DataTales Example -->
          <div  id="editusertable" class="card shadow mb-4">
      
            <div class="card-header py-3">
           
            <!-- Page Heading -->
          <h5 class="mb-2 text-gray-800">Edit User <a style='margin-left: 800px; text-decoration:none;' class='text-secondary' href='http://localhost/patientrecords/addusercontrol/adduserview/#addusertable'> <i class="fa 
                   fa-arrow-left"></i></a> </h5>  

            </div>
            <div class="card-body">
       <div class="container">
             </div>
           
           
               
                <td class='text-center'> 
                <form action="http://localhost/patientrecords/addusercontrol/edit_user/54#addusertable" id="edit_user_form" class="form-horizontal user" method="post" accept-charset="utf-8">
<div class="container-fluid">
 
<div class="row">




  
<div class="col-sm-2">
     <div style="margin-bottom:17px;">
                <div class="row no-gutters">
                 <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">
                   Username
                 </div>   
                </div>
        <div class="h5 mb-1 font-weight-bold text-gray-800"><input class="form-control " type="text" name="e_user" placeholder="Enter Username" value="gabriel" ></div>
         <div class="text-danger text-center"></div>
               </div>

</div>
<div class="col-sm-3">
                <div style="margin-bottom:17px;">
                <div class="row no-gutters">
                 <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">
                   Password
                 </div>   
                </div>
        <div class="h5 mb-1 font-weight-bold text-gray-800"><input class="form-control  " type="password" name="e_pass" placeholder="Enter Password" value="" ></div>
         <div class="text-danger text-center"></div>
               </div>

</div>

<div class="col-sm-3  ">
   <div style="margin-bottom:17px;">
                <div class="row no-gutters">
                 <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">
                   Firstname
                 </div>   
                </div>
        <div class="h5 mb-1 font-weight-bold text-gray-800"><input class="form-control  " type="text" name="e_fname" placeholder="Enter Firstname" value="Gabriel" ></div>
         <div class="text-danger text-center"></div>
               </div>
 </div>
   <div class="col-sm-2">
                <div class="row no-gutters">
                  <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">
                   Position
                 </div>      
                </div>
           <select class="form-control" name="e_position">
                
             <option value="Standard User">Standard User</option>
                <option value="Doctor">Doctor</option>
         </select>
        <div class="text-danger text-center"></div>  
     </div>
   
      <div class="col-sm-2">
        <div class="text-gray-800">
         <button  style='margin-top:19px;' type='submit' class='btn btn-success btn-icon-split' name='submit' href='http://localhost/patientrecords/addusercontrol/edit_user/#editusertable'> 
                 <span class="icon text-white-100">
                  <i class="fas fa-arrow-right"></i>  
                    Update User
                  </span>
                </button> 
          </div>
        </div>


   </div>


  </div>

          

  </form>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script></td>
          

               
            </div>
          </div>

            
        </div>
       
       </div>
      <!-- End of Main Content -->
  <br><br><br><br><br><br><br><br><br><br>
      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Clinic Africa Kajjansi </span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-success" href="http://localhost/patientrecords/usercontrol/logout">Logout</a>
        </div>
      </div>
    </div>
  </div>

 


 <!-- Bootstrap core JavaScript-->
  <script src="http://localhost/patientrecords/assets/vendor/jquery/jquery.min.js"></script>
  <script src="http://localhost/patientrecords/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="http://localhost/patientrecords/assets/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="http://localhost/patientrecords/assets/js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="http://localhost/patientrecords/assets/vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="http://localhost/patientrecords/assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="http://localhost/patientrecords/assets/js/demo/datatables-demo.js"></script>

  
<!-- jQuery library -->
<script src="http://localhost/patientrecords/assets/printarea/jquery-print-plugin-master/lib/jquery.printThis.js"></script>
 


</body>

</html>


