<?php
$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "patientrecord";

$conn = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);


if (!$conn){
  die("Connection Failed: " . mysqli_connect_error());
}


?>



<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="mulag.png" />

  <title>Patient Records</title>
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
  background: #80215f;



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


 
 
        
 <div class='alert-secondary text-center'><div class="text-center">Mulago Hopsital <b>clerk</b></div></div>  


          
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
 




              <!-- Findings Box -->
            <div  id="findings" class="col-xl-8 col-lg-4">

              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                   <h6 class="m-0 font-weight-bold text-danger">Admission Details <a data-toggle='tooltip' title='Print' style='margin-left: 20px; margin-right: 21px;' class="btn_print text-secondary"><i class="fa 
                   fa-print"></i></a></h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                   <div class="col-sm-12">
                  </div>
                  
           <?php

$ad_id=$_GET['adid'];

$sql = "SELECT * FROM admission_record where ad_id=$ad_id" ;
$result = $conn->query($sql);

// reading data of each row
$row=mysqli_fetch_assoc($result);


  $ad_id = $row['ad_id'];
  $pr_card = $row['pr_card'];
  $ad_date = $row['ad_date'];
$ad_admittedby =$row['ad_admittedby'];
$ad_dischargedate = $row['ad_dischargedate'];
$ad_father = $row['ad_father'];
$ad_mother = $row['ad_mother'];
$ad_wardname = $row['ad_wardname'];
$f_hospital = $row['f_hospital'];
$ad_chargetoaccount = $row['ad_chargetoaccount'];
$ad_relationtopatient = $row['ad_relationtopatient'];
$ad_address = $row['ad_address'];
$ad_number = $row['ad_number'];
$ad_totalpayment = $row['ad_totalpayment'];
$ad_complaint = $row['ad_complaint'];
$ad_completediagnosis = $row['ad_completediagnosis'];
$ad_medication = $row['ad_medication'];
$ad_conditiontodischarge = $row['ad_conditiontodischarge'];
$ad_remarks = $row['ad_remarks'];
$ad_physician = $row['ad_physician'];



    
?>      
<div class="card-body">

              <div id="printablearea"><!-- Printable Area -->
  

                  <div class="row "><!-- ROW 1 -->
                   <div class="col-sm-2"></div>
                   <div class="col-sm-8">
                     <h5 class="text-center"><b>ADMISSION DETAILS</b></h5>
                     <hr>
                   </div>
                   <div class="col-sm-2"></div>
                 </div>
           
                <div style="margin-bottom:17px;">
        <div class="row no-gutters">
              <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1"></div>
                </div>
             <div class="h4 mb-1 font-weight-bold text-gray-800">                        
             </div>
            </div>
            
               <div style="margin-bottom:17px;">
        <div class="row no-gutters">
              <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1"></div>
                </div>
             <div class="h3 mb-1 font-weight-bold text-gray-800">
                                                       
             </div>
            </div>

          <div style="margin-left: 5px;" class="row">
            

                <div style="margin-bottom:17px;">
        <div class="row no-gutters">
              <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Admission Date</div>
                </div>
             <div class="h4 mb-1 font-weight-bold text-gray-800">
                              <?php echo $ad_date  ?>                            </div>
              </div>

          <div class="ml-auto" style="margin-bottom:17px; margin-right: 20px;">
        <div class="row no-gutters">
              <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Admitted By</div>
                </div>
             <div class="h5 mb-1 font-weight-bold text-gray-800">
              <?php echo $ad_admittedby  ?></div>
              </div>

          </div>
          
          <div class="row"><!-- Begin Row -->
           <div class="col-sm-4">
             
            <div style="margin-bottom:17px;">
        <div class="row no-gutters">
              <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Mother's Name</div>
                </div>
             <div class="h5 mb-1 font-weight-bold text-gray-800">
                           <p><?php echo $ad_mother  ?></p>
                
             </div>
              </div> 


           </div>          
            <div class="col-sm-4">
             

            <div  style="margin-bottom:17px;">
        <div class="row no-gutters">
              <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Father's Name</div>
                </div>
             <div class="h5 mb-1 font-weight-bold text-gray-800">
                           <p><?php echo $ad_father  ?></p>
                            </div>
              </div> 


            </div>
           <div class="col-sm-4">
             

            <div type="margin-bottom:17px;">
        <div class="row no-gutters">
              <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Attending Physician</div>
                </div>
             <div class="h5 mb-1 font-weight-bold text-gray-800">
                            <p><?php echo $ad_physician  ?></p>
               
               </div>
              </div> 

           </div>

          </div><!-- End Row -->

          <div class="row"><!-- Begin Row -->
           <div class="col-sm-4">
             
            <div style="margin-bottom:17px;">
        <div class="row no-gutters">
              <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Charge Account to</div>
                </div>
             <div class="h5 mb-1 font-weight-bold text-gray-800">
                             <p><?php echo $ad_chargetoaccount  ?></p>
                             
               </div>
              </div> 


           </div>          
            <div class="col-sm-4">
             
            <div style="margin-bottom:17px;">
        <div class="row no-gutters">
              <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Relationship</div>
                </div>
             <div class="h5 mb-1 font-weight-bold text-gray-800">
                            <p><?php echo $ad_relationtopatient  ?></p>
               
               </div>
              </div> 

            </div>
           <div class="col-sm-4">
             
          <div style="margin-bottom:17px;">
        <div class="row no-gutters">
              <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Address</div>
                </div>
             <div class="h5 mb-1 font-weight-bold text-gray-800">
                         <p><?php echo $ad_address  ?></p>
              
               </div>
              </div> 

           </div>

          </div><!-- End Row -->
          
         
            <div class="col-sm-12" style="margin-bottom:17px;">
        <div class="row no-gutters">
              <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Telephone</div>
                </div>
             <div class="h5 mb-1 font-weight-bold text-gray-800">
                         <p><?php echo $ad_number  ?></p>
                
               </div>
              </div> 

             <div class="col-sm-12" style="margin-bottom:17px;">
        <div class="row no-gutters">
              <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Total Payment</div>
                </div>
             <div class="h5 mb-1 font-weight-bold text-gray-800">
                           <p> Ugx <?php echo $ad_totalpayment  ?></p>
                          </div>
              </div>     

                 <div class="col-sm-12" style="margin-bottom:17px; margin-right:70px ">
        <div class="row no-gutters">
              <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Complaint</div>
                </div>
             <div class="h5 mb-1 font-weight-bold text-gray-800 ">
                         <p><?php echo $ad_complaint  ?></p>
                       </div>
              </div>         
       
           <div class="col-sm-12"  style="margin-bottom:17px; margin-right:70px">
        <div class="row no-gutters">
              <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Complete Diagnosis</div>
                </div>
             <div class="h5 mb-1 font-weight-bold text-gray-800 ">
                            <p><?php echo $ad_completediagnosis  ?></p>
            
            </div>
              </div>     

              <div class="col-sm-12"  style="margin-bottom:17px; margin-right:70px">
        <div class="row no-gutters">
              <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Medication</div>
                </div>
             <div class="h5 mb-1 font-weight-bold text-gray-800 ">
                         <p><?php echo $ad_medication  ?></p>
                       </div>
              </div>             
       
           </div>
            <div class="col-sm-12"  style="margin-bottom:17px; margin-right:70px">
        <div class="row no-gutters">
              <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Condition On Discharge</div>
                </div>
             <div class="h5 mb-1 font-weight-bold text-gray-800 ">
                         <p><?php echo $ad_conditiontodischarge  ?></p>
                       </div>
              </div>             
       
           </div>

               

<div class="col-sm-12"  style="margin-bottom:17px; margin-right:70px">
        <div class="row no-gutters">
              <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Remarks</div>
                </div>
             <div class="h5 mb-1 font-weight-bold text-gray-800 ">
                         <p><?php echo $ad_remarks  ?></p>
                       </div>
              </div>             
       
           </div>




<div class="col-sm-12"  style="margin-bottom:17px; margin-right:70px">
        <div class="row no-gutters">
              <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Discharge Date</div>
                </div>
             <div class="h5 mb-1 font-weight-bold text-gray-800 ">
                         <p><?php echo $ad_dischargedate  ?></p>
                       </div>

<div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Medical Facility</div>
                </div>
             <div class="h5 mb-1 font-weight-bold text-gray-800 ">
                         <p><?php echo $f_hospital  ?></p>
                       </div>


              </div>             
       
           </div>

              
                </div><!-- Card Body End tag -->
              </div>
            </div>


  

     


</div><!-- End of Row -->



 
<!-- Print Area -->
<script>
  $(document).ready(function() {
  $('.btn_print').on('click', function(e) {
    $('#printablearea').printThis();
  })
});
</script>
 </div>
       
       </div>


 
              </div>

            </div>
           </div>
    
  

   


</div><!-- End of Row -->

  <!-- ganun din dito ito naman scripts para sa isang bahagi ng website -->
            
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


