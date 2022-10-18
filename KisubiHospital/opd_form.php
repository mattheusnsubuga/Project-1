<?php

include 'includes/dbh.php';
include 'includes/data_send.php';



?>


<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="Kisubi.png" />

  <title>Add Patient Form</title>

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
  background: midnightblue;

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


 
        
 <div class='alert-primary text-center'><div class="text-center">Kisubi Hospital <b>Clerk</b></div></div>  


          
  </div>
          

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class=" navbar-nav bg-gradient-success sidenav sidebar sidebar-dark accordion " id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center"  href="#">
        <div class="sidebar-brand-icon rotate-n-0">
           <img src="GeneralLogal3.png">
        </div>

   
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
      
 <li class="nav-item active">
         <!-- Nav Item - Tables -->
        <a class="nav-link collapsed " href="partners.php">
          <i class="fas fa-fw  fa-users "></i>
          <span>Partner Facilities</span></a>
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


          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

    

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                  
     <!-- u_user coming from database -->

       <b>Clerk</b>
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
       

           
   
            
         

     <div class="container-fluid">

         <h1 class="h3 mb-2 text-gray-800 text-center">Add Patient Record</h1>

              <hr>
                 <div class="row "><!-- ROW 1 -->
                   <div class="col-sm-4"></div>
                   <div class="col-sm-4">
                     <h6 class="text-center"><b>Kisubi Hospital</b></h6>
                     <h5 class="text-center"><b>PATIENT RECORD</b></h5>
                   </div>
                   <div class="col-sm-4"></div>
                 </div>
                             <form action="includes/dbh.php" id="opd_form" class="form-horizontal user" method="POST" accept-charset="utf-8">
              
                   <div class="row"> <!-- ROW 2 -->
                
                 <div class="col-sm-12 "><!-- first column -->
                  <div class="row">
                
                  
                  
                  </div><!--  ROW -->   
               
                   <div class="row">
                     <div style="margin-left: 4px;" class="col-sm-4">
                          <label>Card Number</label>                   <input type="text"  class="form-control  "  name="pr_card" placeholder="Card Number">
                  <div class="text-danger text-center"></div>
                     </div>
                     <div style="margin-left: 4px;" class="col-sm-4">
                          <label>Lastname</label>                   <input type="text"  class="form-control  "  name="lname" placeholder="Lastname">
                  <div class="text-danger text-center"></div>
                     </div>
                     <div class="col-sm-4">
                       <label>Firstname</label>                           <input type="text" style="margin-left: 4px;"  class="form-control  "  name="fname" placeholder="Firstname" value="">
                  <div class="text-danger text-center"></div>
                     </div>
                     <div class="col-sm-3">
                      <label>MiddleInitial</label>                       <input type="text" style="margin-left: 2px;" class="form-control  "  name="middlen" placeholder="Middleinitial" value="">
                  <div class="text-danger text-center"></div>
                     </div>

                   </div>
                  <div class="row">
                    <div style="margin-left: 4px;" class="col-sm-11">
                      <label>Address</label>                                <input type="text" style="margin-left: 7px;" class="form-control  "  name="address" placeholder="Permanent Address" value="">
                  <div class="text-danger text-center"></div>
                    </div>          
                  </div>
                   <div class="row">
                     <div style="margin-left: 4px;" class="col-sm-2">
                       <label>Age</label>                                <input type="text" class="form-control  "  name="age" placeholder="Age" value="">
                  <div class="text-danger text-center"></div>  
                     </div>
                    <div style="margin-left: 4px;" class="col-xs-3">
                       <label>Birthday</label>                                <input type="date" class="form-control  "  name="datebirth" value="">
                     <div class="text-danger text-center"></div> 
                     </div>
                     <div style="margin-left: 4px;" class="col-sm-3">
                       <label>Birthplace</label>                                <input type="text" class="form-control  " placeholder="Birth Place"  name="birthplace" value="">
                     <div class="text-danger text-center"></div> 
                     </div>
                     <div style="margin-left: 4px;" class="col-sm-3">
                     <label>Civil Status</label>                       <select  class="form-control" name="civilstat" >
                         <option value="">Select</option>
                                                                        <option value=Single>Single</option>
                                                <option value=Married>Married</option>
                                                <option value=Separated>Separated</option>
                                                                      </select> 
                     <div class="text-danger text-center"></div>   
                     </div>
                    </div>

                  </div>
                <div class="row">
                 <div style="margin-left: 30px;" class="col-xs-3">
                        <label>Gender</label>                      <select name="gen" class="form-control " name="gen">
                        <option value="">Select Gender</option>
                                                                        <option value=Male>Male</option>
                                                <option value=Female>Female</option>
                                                                      </select>  
                   <div class="text-danger text-center"></div>
                    </div>

                     <div style="margin-left: 30px;" class="col-xs-3">
                        <label>Mobile/Tel No.</label>                                <input type="number" class="form-control  " placeholder="Mobile/Tel No."  name="number" value="">
                     <div class="text-danger text-center"></div>

                    </div>

                    <div style="margin-left: 20px;" class="col-xs-3">
                        <label>Religion</label>                                <input type="text" class="form-control  " placeholder="Religion"  name="religion" value="">
                     <div class="text-danger text-center"></div> 
                   </div>

                    <div style="margin-left: 20px;" class="col-xs-3">
                      <label>Occupation</label>                                <input type="text" class="form-control " placeholder="Occupation"  name="occup" value="">
                     <div class="text-danger text-center"></div>
                     </div>                   
                   </div>

                  </div>
                  <br><br>
            
                   <button style="margin-left:430px;  background-color: navy;" id="submitbtn" type="submit" class="btn btn-success btn-icon-split" name="submit">
                 <span class="icon text-white-100">
                  <i class="fas fa-arrow-right"></i>  
                    Add Record
                  </span>
                </button>
                      
               </form>                
             </div>

 <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>
 <!-- ganun din dito ito naman scripts para sa isang bahagi ng website -->
            
        </div>
       
       </div>
      <!-- End of Main Content -->
  <br><br><br><br><br><br><br><br><br><br>
      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Kisubi Hospital 2022</span>
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


