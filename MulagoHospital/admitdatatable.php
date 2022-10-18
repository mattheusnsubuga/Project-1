





<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="mulag.png" />

  <title>Patients Table</title>

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


<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>


  <script src = "http://localhost/patientrecords/assets/js/scripts/jquery.canvasjs.min.js"></script>



 <style>
   .sidenav {
  width: 100%;
  position: fixed;
  top: 0;
  left: 0;
  background: #80215f;
  background-color: #skyblue;


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
 
 
        
 <div class='alert-secondary text-center'><div class="text-center">Mulago Hospital <b> Clerk</b></div></div>  
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
         <a class="nav-link collapsed " >
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
       

       
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
      
            <div class="card-header py-3">
           
            <!-- Page Heading -->
          <h5 class="mb-2 text-gray-800">Patient Records Table <a style="margin-left: 700px;" href="opd_form.php" >
                    <i class="fa fa-plus text-secondary"></i>
                  </a>   
                  </h5>  

            </div>
            <div class="card-body">

            
           
             
            
               <hr>
              <div class="container">
            
             </div>

              <div class="table">
                <table class="table table-bordered " id="dataTable" width="100%" cellspacing="0">

                  <thead>
                    <tr>
                      <th class="text-center">Patient Card Number</th>
                      <th class="text-center">Last Name</th>
                      <th class="text-center">First Name</th>
                      <th class="text-center">Middle Name</th>
                      <th class="text-center">Gender</th>
                      <th class="text-center">Age</th>
                      <th class="text-center">Contact No.</th>
                      <th class="text-center">Date Added</th>
                      <th class="text-center">Action</th>
                    
                    </tr>
                  </thead>
                  <tbody>


<?php
include_once 'includes/dbh.php';

$sql = "SELECT * FROM patient_record";
$result = $conn->query($sql);

// reading data of each row
while($row = $result->fetch_assoc()){

  $pr_id = $row['pr_id'];
  $pr_card = $row['pr_card'];
  $pr_lname =$row['pr_lname'];
  $pr_fname= $row['pr_fname'];
  $pr_mname = $row['pr_mname'];
  $pr_gen = $row['pr_gen'];
  $pr_age = $row['pr_age'];
  $pr_number = $row['pr_number'];
  $pr_date = $row['pr_date'];

echo ' <tr>
    <td>  '.$pr_card.'</td>
    <td>  '.$pr_lname.'</td>
    <td>  '.$pr_fname.'</td>
    <td>  '.$pr_mname.'</td>
    <td>  '.$pr_gen.'</td>
    <td>  '.$pr_age.'</td>
    <td>  '.$pr_number.'</td>
    <td>  '.$pr_date.'</td>
<td>
   
  <button class="btn btn-secondary"> <a href = "opd_edit.php?eid='.$pr_id.'" class="text-light"> Edit </a> </button>
  <button class="btn btn-danger"> <a href = "opd_delete.php?did='.$pr_id.'" class="text-light"> Delete </a> </button>
  <button class="btn btn-primary"> <a href = "patientdataview.php?vid='.$pr_id.'"  class="text-light"> View </a> </button>
    

</td>


</tr>';


}


?>







                       
                  </tbody>

                </table>
              </div>
            </div>
          </div>


 

 <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>




 <script>

  /* $(document).ready(function(){
  
  $('#import_form').on('submit', function(event) {
    event.preventDefault();
   
   $.ajax({
     beforeSend:function(){
      $('#btn-upload').html('Importing...');
     },
      success:function(){
       $('#import_form')[0].reset();
       $('#btn-upload').attr('disabled', false);
       $('#btn-upload').html('Import Done');
      }
   });

  });
*/
</script>


            
        </div>
       
       </div>
      <!-- End of Main Content -->
  <br><br><br><br><br><br><br><br><br><br>
      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Mulago Hospital 2022</span>
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
          <a class="btn btn-success" href="index.php">Logout</a>
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


