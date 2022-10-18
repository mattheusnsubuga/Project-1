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



if(isset($_POST["submit"])){

    $pr_card = $_POST['pr_card']; 
    $pr_wards = $_POST['a_wards'];
    $pr_date  = $_POST['a_date'];       
    $pr_admitted = $_POST['a_admitted'];       
    $pr_physician = $_POST['a_physician'];       
    $pr_father = $_POST['a_father'];       
    $pr_mother  = $_POST['a_mother'];      
    $pr_chargeaccount = $_POST['a_chargeaccount'];   
    $pr_relationtopatient   = $_POST['a_relationtopatient'];     
    $pr_address  = $_POST['a_address'];      
    $pr_number= $_POST['a_number'];      
    $pr_totalpayment = $_POST['a_totalpayment'];
    $pr_dischargedate= $_POST['a_dischargedate'];      
    $pr_complain = $_POST['a_complain'];
    $pr_completediagnosis= $_POST['a_completediagnosis'];      
    $pr_medication = $_POST['a_medication'];
    $pr_conditiondischarge= $_POST['a_conditiondischarge'];      
    $pr_remarks = $_POST['a_remarks'];
    $f_hospital = $_POST['f_hospital'];
   

$sql= "INSERT INTO admission_record (pr_card,ad_wardname,ad_date,ad_admittedby,ad_physician,ad_father,ad_mother,ad_chargetoaccount,ad_relationtopatient,ad_address,ad_number,ad_totalpayment,ad_dischargedate,ad_complaint,ad_completediagnosis,ad_medication,ad_conditiontodischarge,ad_remarks,f_hospital) VALUES ('$pr_card','$pr_wards','$pr_date','$pr_admitted','$pr_physician','$pr_father','$pr_mother','$pr_chargeaccount','$pr_relationtopatient','$pr_address','$pr_number','$pr_totalpayment','$pr_dischargedate','$pr_complain','$pr_completediagnosis','$pr_medication','$pr_conditiondischarge','$pr_remarks','$f_hospital')";


  $result =mysqli_query($conn,$sql);


if($result){
echo  "<script> window.alert('Admission Record Added Successfully');</script>";
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
  <link rel="shortcut icon" href="Clogo.png" />

  <title>Admission Record</title>

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
  background: #228B28;

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


 
        
 <div class='alert-success text-center'><div class="text-center">Clinic Africa Kajjansi <b>Clerk</b></div></div>   
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
 

        <!-- Begin Page Content -->
        <div class="container-fluid">
       

       

          <!-- DataTales Example -->
          <div id="Admission" class="card shadow mb-4">
      
            <div class="card-header py-3">
           
            <!-- Page Heading -->
          <h5 class="mb-2 text-gray-800"> Admission Record
                  </h5>  

            </div>
            <div class="card-body">

       <div class="container">
            
             </div>

              <div class="table">
                <table class="table table-bordered " id="dataTable" width="100%" cellspacing="0">
           
                 
                  <tbody>
                    
                <form action="" id="add_admission_form" class="form-horizontal user" method="post" accept-charset="utf-8">
<div class="container-fluid">

<div class="row">
 
         <div  class="col-sm-6 ">
  <div style="margin-bottom:17px; ">
                <div class="row no-gutters">
                 <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Patient Card Number</div>   
                </div>
        <div style="margin-right:20px;" class="h6 mb-1  text-gray-800">
        
   
                  <input class="form-control " type="text" name="pr_card" placeholder="Scan Card" value="">       
              
             <div class="text-danger text-center"> 
          </div> 
     </div>
      </div>
  </div>

 <div  class="col-sm-6 ">
       <div style="margin-bottom:17px; ">
                <div class="row no-gutters">
                 <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Admit Date</div>   
                </div>
        <div style="margin-right:20px;" class="h6 mb-1  text-gray-800">
        
    
                  <input class="form-control " type="date" name="a_date" value="">       
              
             <div class="text-danger text-center"> 
          </div> 
       
     </div>
      </div>
  </div>
</div>

<div class="row">
  
  <div  class="col-sm-6 ">
             <div style="margin-bottom:17px; ">
                <div class="row no-gutters">
                 <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Admitted By</div>   
                </div>
        <div style="margin-right:20px;" class="h6 mb-1  text-gray-800">
        
                  <input class="form-control " type="text" name="a_admitted" placeholder="Admitted by" value="">       
              
             <div class="text-danger text-center"> 
          </div> 

       </div>
      </div>
    </div>

    <div  class="col-sm-6 ">
             <div style="margin-bottom:17px; ">
                <div class="row no-gutters">
                 <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Discharge Date</div>   
                </div>
        <div style="margin-right:20px;" class="h6 mb-1  text-gray-800">
        
                  <input class="form-control " type="date" name="a_dischargedate"  value="">       
              
             <div class="text-danger text-center"> 
          </div> 

       </div>
      </div>
    </div>

</div>
         

           <div style="margin-bottom:17px;">
                <div class="row no-gutters">
                 <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">For Minor: Name of Parents</div>   
                </div>
        <div class="h5 mb-1 font-weight-bold text-gray-800">
          <div class="row no-gutters">
  
                </div>
            <div class="row">
              <div class="col-sm-6">
                  <input class="form-control " type="text" name="a_father" placeholder="Name of Father" value="">       
              </div> 
              <div class="col-sm-6">
                  <input class="form-control" type="text" name="a_mother" placeholder="Name of Mother" value="">       
              </div>
            </div>
        
         </div>
      </div>
 

   <div class="row">            
   	 <div class="col-sm-6">
           <div style="margin-bottom:17px;">
                <div class="row no-gutters">
                 <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Ward</div>   
                </div>
        <div class="h6 mb-1  text-gray-800">
        
         <select name="a_wards" class="form-control">
              <option value="">Select Ward</option>
                                                      <option value=Male Ward>Male Ward</option>
                                           <option value=Female Ward>Female Ward</option>
                                           <option value=Pulmonary>Pulmonary</option>
                                           <option value=ICU>ICU</option>
                                           <option value=Gyne>Gyne</option>
                                           <option value=Caesarian Section>Caesarian Section</option>
                                           <option value=NSD>NSD</option>
                                           <option value=MaleSurgical>MaleSurgical</option>
                                           <option value=FemaleSurgical>FemaleSurgical</option>
                                           <option value=Pedia>Pedia</option>
                                           <option value=OB-Gyne>OB-Gyne</option>
                                           <option value=*Under.Observation>*Under.Observation</option>
                                                                </select> 
             <div class="text-danger text-center"> 

        </div>
     </div>
      </div>
    </div>
    <div class="col-sm-6">
           <div style="margin-bottom:17px;">
                <div class="row no-gutters">
                 <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Attending Physician</div>   
                </div>
        <div class="h6 mb-1 text-gray-800">
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
             <div class="text-danger text-center"> 

        </div>
     </div>
      </div>
    </div>
   
<div class="col-sm-6">
        <div style="margin-bottom:17px;">
                <div class="row no-gutters">
                 <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1"> Medical Facility</div>   
                </div>
           <select name="f_hospital" class="form-control">
                                          
                                           <option >Clinic Africa </option>
                                           
                                
                                                                </select> 
                <div class="text-danger text-center"></div>  
              </div>
         </div>
        
 
    </div><!-- End of Row -->  

       <div class="row">            
     <div class="col-sm-6">
           <div style="margin-bottom:17px;">
                <div class="row no-gutters">
                 <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Charge Account to</div>   
                </div>
        <div class="h6 mb-1  text-gray-800">
          <input class="form-control  " type="text" name="a_chargeaccount" placeholder="Charge account to" value="">
         <div class="text-danger text-center"> 
        </div>
     </div>
      </div>
    </div>
    <div class="col-sm-6">
           <div style="margin-bottom:17px;">
                <div class="row no-gutters">
                 <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Relation to Patient</div>   
                </div>
        <div class="h6 mb-1 text-gray-800">
       <input class="form-control " type="text" name="a_relationtopatient" placeholder="Relation to Patient" value="">
             <div class="text-danger text-center"> 

        </div>
     </div>
      </div>
    </div>
   

 
    </div><!-- End of Row -->  
    <div class="row">
       <div class="col-sm-12">
           <div style="margin-bottom:17px;">
                <div class="row no-gutters">
                 <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Address</div>   
                </div>
        <div class="h6 mb-1 text-gray-800">
       <input class="form-control " type="text" name="a_address" placeholder="Enter Address" value="">
             <div class="text-danger text-center"> 

        </div>
     </div>
      </div>
    </div>
    </div>

    <div class="row">
       <div class="col-sm-6">
           <div style="margin-bottom:17px;">
                <div class="row no-gutters">
                 <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Mobile Number/Telephone No.</div>   
                </div>
        <div class="h6 mb-1 text-gray-800">
       <input class="form-control " type="text" name="a_number" placeholder="Enter Number" value="">
             <div class="text-danger text-center"> 

        </div>
     </div>
      </div>
    </div>
       <div class="col-sm-6">
           <div style="margin-bottom:17px;">
                <div class="row no-gutters">
                 <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Total Payment Made For Admission</div>   
                </div>
        <div class="h6 mb-1 text-gray-800">
       <input class="form-control " type="text" name="a_totalpayment" placeholder="Enter Total Payment Amount" value="">
             <div class="text-danger text-center"> 

        </div>
     </div>
      </div>
    </div>

    </div>

<!--Begin -->
 
 <div style="margin-left: 10px; margin-right: 10px;" class="row">
               <div class="col-sm-12">
        <div class=" no-gutters ">
              <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1"> Complaint</div>
                </div>
             <div class="h6 mb-1  text-gray-800">
               <textarea class="form-control " type="text" name="a_complain" placeholder="Enter  Complaint"></textarea>         
               <div class="text-danger text-center"></div>
             </div>
              </div>
            </div>


     <div style="margin-left: 10px; margin-right: 10px;" class="row">
               <div class="col-sm-12">
        <div class=" no-gutters ">
              <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Complete Diagnosis</div>
                </div>
             <div class="h6 mb-1  text-gray-800">
               <textarea class="form-control " type="text" name="a_completediagnosis" placeholder="Enter Diagnosis"></textarea>         
               <div class="text-danger text-center"></div>
             </div>
              </div>
            </div>

      <div style="margin-left: 5px;" class="row">
               <div class="col-sm-12">
        <div class=" no-gutters ">
              <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Medication/Treatment</div>
                </div>
             <div class="h6 mb-1  text-gray-800">
               <textarea class="form-control " type="text" name="a_medication"  placeholder="Enter Medication/Treatment"></textarea>
         <div class="text-danger text-center"></div>
             </div>
              </div>
            </div>

          
       
          <div style="margin-left: 10px; margin-right: 10px;" class="row">
               <div class="col-sm-12">
        <div class=" no-gutters ">
              <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Condition on Discharge</div>
                </div>
             <div class="h4 mb-1 font-weight-bold text-gray-800">
               <input class="form-control  " type="text" name="a_conditiondischarge" value="" placeholder="Enter Condition to Discharge"></div>
              <div class="text-danger text-center"></div>
             </div>
              </div>
            

           <div style="margin-left: 10px;  margin-right: 10px;" class="row">
               <div class="col-sm-12">
        <div class=" no-gutters ">
              <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Remarks</div>
                </div>
             <div class="h4 mb-1 font-weight-bold text-gray-800">
             <input class="form-control  " type="text" name="a_remarks" value="" placeholder="Enter Remarks"></div>
              <div class="text-danger text-center"></div>
             </div>
              </div>
           
  
   <br><br>

  


           <button style='margin-left: 410px; margin-bottom: 20px; background-color: forestgreen; text-decoration:none' type='submit' class='btn btn-success btn-icon-split' name='submit' href='http://localhost/patientrecords/admissioncontrol/admit_form'> 
                 <span class="icon text-white-100">
                  <i class="fas fa-arrow-right"></i>  
                    Admit Patient
                  </span>
                </button>	


 
  
  </form>


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
            <span>Copyright &copy; Clinic Africa 2022</span>
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


