<?php

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "patientrecord";

$conn = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);


if (!$conn){
  die("Connection Failed: " . mysqli_connect_error());
}


//Saving data to OPD



if(isset($_POST["opdsubmit"])){

    $pr_card = $_POST['pr_card']; 
    $pr_complaint = $_POST['a_chief_complaint'];
    $pr_history = $_POST['a_historyillness'];       
    $pr_bp = $_POST['a_bp'];       
    $pr_rr = $_POST['a_rr'];       
    $pr_cr = $_POST['a_cr'];       
    $pr_temp  = $_POST['a_temp'];      
    $pr_wt = $_POST['a_wt'];   
    $pr_pr   = $_POST['a_pr'];     
    $pr_date  = $_POST['a_date'];      
    $pr_physicalexam= $_POST['a_physicalexam'];      
    $pr_diagnosis = $_POST['a_diagnosis'];
    $pr_treatment= $_POST['a_medical_treatment'];      
    $pr_physician = $_POST['a_physician'];
    $f_hospital = $_POST['f_hospital'];


$sql= "INSERT INTO findings (pr_card,f_chiefcomplaint,f_historypresentillness,f_bp,f_rr,f_cr,f_temp,f_wt,f_pr,f_date,f_physicalexam,f_diagnosis,f_medication,f_nameofphysician, f_hospital) VALUES ('$pr_card','$pr_complaint','$pr_history','$pr_bp','$pr_rr','$pr_cr','$pr_temp','$pr_wt','$pr_pr','$pr_date','$pr_physicalexam','$pr_diagnosis','$pr_treatment','$pr_physician', '$f_hospital')";

  $result =mysqli_query($conn,$sql);


if($result){
  echo  "<script> window.alert('OPD Record Added Successfully');</script>";

  header('location:admitdatatable.php');
}
else{
  die(mysli_error($conn));
}

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

  <title>Out Patient Findings</title>

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


  <!-- itong part is para malaman kung nakalogin ba si user checheck nya via session  -->
 
 
        
 <div class='alert-secondary text-center'><div class="text-center">Mulago Hospital <b>Clerk</b></div></div>
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
 
  
         <!-- Nav Item - Tables -->
        <a  class="nav-link collapsed text-secondary" href="multiplerecordview.php">
          <i class="fas fa-fw fa-file "></i>
          <span>Out Patient Findings</span></a>


        <div class="topbar-divider d-none d-sm-block"></div>

         <!-- Nav Item - Tables -->
        <a  class="nav-link collapsed text-secondary" href="admissionviewform.php">
          <i class="fas fa-fw fa-bed "></i>
          <span>Admission Record</span></a>


    
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
 



 <!-- ito n yung variable na kinomvert n na kay $data['topbar'] need mo lagyan ng $this->load->view(); then sa loob yung variable para maiload nya yung nilalaman ni variable $topbar which is yung script para sa navigation bar  --> 
      

        <!-- Begin Page Content -->
        <div class="container-fluid">
       

       

          <!-- DataTales Example -->
          <div id="Findings" class="card shadow mb-4">
      
            <div class="card-header py-3">
           
            <!-- Page Heading -->
          <h5 class="mb-2 text-gray-800"> Out Patient Findings 
                  </h5>  

            </div>
            <div class="card-body">

       <div class="container">
            
             </div>

              <div class="table">
                <table class="table table-bordered " id="dataTable" width="100%" cellspacing="0">
           
                 
                  <tbody>
                   
                <form action="" id="" class="form-horizontal user" method="post" accept-charset="utf-8">
<div class="container-fluid">

   <div class="row">             
   	 <div class="col-sm-6">
         

               <div style="margin-bottom:17px;">
                <div class="row no-gutters">
                 <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Patient Card Number</div>   
                </div>
        <div class="h5 mb-1 font-weight-bold text-gray-800"><input class="form-control " type="text" name="pr_card" placeholder="Scan Card" value=""> </div>
        <div class="text-danger text-center"></div>
               </div>
   	 
               <div style="margin-bottom:17px;">
               	<div class="row no-gutters">
                 <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Chief Complaint</div>   
                </div>
 				<div class="h5 mb-1 font-weight-bold text-gray-800"><textarea class="form-control" type="text" name="a_chief_complaint" placeholder="Enter Chief Complaint"></textarea></div>
               </div>

               <div style="margin-bottom:17px;">
                <div class="row no-gutters">
                 <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">History of Present Illness</div>   
                </div>
 				<div class="h5 mb-1 font-weight-bold text-gray-800">
          <input class="form-control " type="text" name="a_historyillness" value="" placeholder="Enter History of Present Illness"></div>
        <div class="text-danger text-center"></div>
 			   </div>
    
 			   <div style="margin-bottom:17px;">
 				<div class="row no-gutters">
       <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Vital Signs</div>
        </div>
 				  <div class="row"><!--Begin First Column -->
           <div class="col-sm-4">
           <label>Blood Pressure</label>          <input class="form-control" type="text" name="a_bp" value="" placeholder="BP">            
           </div>
           <div class="col-sm-4">
          <label>Respiratory Rate</label>          <input class="form-control" type="text" name="a_rr" value=""  placeholder="RR">  
           </div>
           <div class="col-sm-4">
             <label>Capillary Refill</label>          <input class="form-control" type="text" name="a_cr" value=""  placeholder="CR">   
           </div>
          </div><!--End First Column -->
           <div class="row"><!--Begin Second Column -->
          <div class="col-sm-4">
          <label>Temperature</label>          <input class="form-control" type="text" name="a_temp" value="" placeholder="TEMP">
           </div>
          <div class="col-sm-4">
              <label>Weight</label>          <input class="form-control" type="text" name="a_wt" value="" placeholder="WT">     
           </div>
          <div class="col-sm-4">
              <label>Pulse Rate</label>          <input class="form-control" type="text" name="a_pr" value="" placeholder="PR">  
           </div>

          </div><!--End Second Column -->
 			   </div>

   	 </div><!-- End of Column 1 -->

    <div class="col-sm-6">
       <div style="margin-bottom:17px;">
                <div class="row no-gutters">
                 <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Date</div>   
                </div>
        <div class="h5 mb-1 font-weight-bold text-gray-800"><input class="form-control " type="date" name="a_date" placeholder="Enter Case Number" value=""> </div>
        <div class="text-danger text-center"></div>
               </div>

    	       <div style="margin-bottom:17px;">
               	<div class="row no-gutters">
                 <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Physical Examination</div>   
                </div>
 				<div class="h5 mb-1 font-weight-bold text-gray-800"><textarea class="form-control" type="text" name="a_physicalexam" placeholder="Enter Physical Examination"></textarea></div>
               </div>

               <div style="margin-top:40px;">
                <div class="row no-gutters">
                 <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Diagnosis</div>   
                </div>
 				<div class="h5 mb-1 font-weight-bold text-gray-800"><textarea class="form-control  " type="text" name="a_diagnosis" placeholder="Enter Diagnosis"></textarea></div>
        <div class="text-danger text-center"></div>
 			   </div>
    
 			  <div style="margin-top:40px;">
               	<div class="row no-gutters">
                 <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Medication/Treatment</div>   
                </div>
 				<div class="h5 mb-1 font-weight-bold text-gray-800"><textarea class="form-control  " type="text" name="a_medical_treatment" placeholder="Enter Medication/Treatment"></textarea></div>
        <div class="text-danger text-center"></div>
               	</div>

 			   </div><!-- End of Column 2 -->
    </div><!-- End of Row -->
    <div class="row">
      <div class="col-sm-6">
           <div style="margin-bottom:17px;">
                <div class="row no-gutters">
                 <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1"> Attending Physician</div>   
                </div>
           <select name="a_physician" class="form-control">
              <option value="">Select Physician</option>
                                          <option value=Sabrina.Kitaka / Pediatrician>Dr. Sabrina Kitaka / Pediatrician</option>
                                           <option value=Christine.Namiiro/ Dermatologist>Dr. Christine.Namiiro/ Dermatologist</option>
                                           <option value=James.Kigwogwa / Ophthalmologist>Dr. James.Kigwogwa / Ophthalmologist</option>
                                           <option value=Edmwin.Kyambadde / Orthopedic.surgeon>Dr. Edmwin.Kyambadde / Orthopedic.surgeon</option>
                                           <option value=Emmanueal.Mukwaya / Psychiatrist>Dr. Emmanueal.Mukwaya / Psychiatrist</option>
                                           <option value=Josua.Mukisa / Gynecologist>Dr. Josua.Mukisa / Gynecologist</option>
                                           <option value=Gabriel.Kitutu / Surgeon>Dr. Gabriel.Kitutu / Surgeon</option>
                                           <option value=Mustafa.Faruk / Emergency.Medicine.Specialist>Dr.Mustafa.Faruk / Emergency.Medicine.Specialist</option>
                                           <option value=Hajjara.Nakakeeto / Obstetrician>Dr. Hajjara.Nakakeeto / Obstetrician</option>
                                           <option value=Muawemuko.Latifa / Chief Physician>Dr. Muawemuko.Latifa / Chief Physician</option>
                                           <option value=Namiiro.Rose / Cardiologist>Dr. Namiiro.Rose / Cardiologist</option>
                                           <option value=Mbogoli.James / Radiologist>Dr. Mbogoli.James / Radiologist</option>
                                           <option value=Nankya.Florence / General Physician>Dr. Nankya.Florence / General Physician</option>
                                           <option value=Frank.Ainembabazi / General Doctor>Dr. Frank.Ainembabazi / General Doctor</option>
                                           <option value=John.Kigundu / Clinical Officer>CO. John.Kigundu / Clinical Officer</option>
                                           <option value=Alice.Mugisha / Endocrinologist>Dr. Alice.Mugisha / Endocrinologist</option>
                                           <option value=Conrad.Ayesigye / Oncologist>Dr. Conrad.Ayesigye / Oncologist></option>
                                           <option value=Ronah.Nakonde / Immunologist>Dr. Ronah.Nakonde / Immunologist</option>
                                           <option value=Nuwagaba.Davin / General Nurse>Rn.. Nuwagaba.Davin / General Nurse</option>
                                           <option value=Abwooli.Annete / Neurologist>Dr. Abwooli.Annete / Neurologist</option>
                                           <option value=Kizza.Calvin / Medical Intern Doctor>Dr. Kizza.Calvin / Medical Intern Doctor</option>
                                           <option value=Agnes.Atim/ Pulmonologist>Dr. Agnes.Atim/ Pulmonologist</option>
                                                                </select> 
                <div class="text-danger text-center"></div>  
              </div>
         </div>
      <div class="col-sm-6">
        <div style="margin-bottom:17px;">
                <div class="row no-gutters">
                 <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1"> Medical Facility</div>   
                </div>
           <select name="f_hospital" class="form-control">
      
                                            <option > Mulago Hospital</option>
                                           
                                                                </select> 
                <div class="text-danger text-center"></div>  
              </div>
         </div>
        
           </div>
            </div>

           <button style='margin-left: 410px; margin-bottom: 20px; text-decoration:none ; background-color: maroon;' type='submit' class='btn btn-success btn-icon-split' name='opdsubmit' href='add_multiple_findings.html'> 
                 <span class="icon text-white-100">
                  <i class="fas fa-arrow-right"></i>  
                    Add Findings
                  </span>
                </button>	

</div>
 
  
  </form>

<script>
  $(document).ready(function(){

   $('#medicalfield').change(function(){
  var fp_id = $('#medicalfield').val();
  if (fp_id != '')
  {
   $.ajax({
    url:"http://localhost/patientrecords/admissioncontrol/get_physician",
    method:"POST",
    data:{fp_id:fp_id},
    success:function(data)
    {
     $('#physician').html(data);
    }
   });
  }
  else
  {
   $('#physician').html('<option value="">Select Physician</option>');
  }
 });

});
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>		
                  </tbody>

                </table>
              </div>
            </div>
          </div>

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


