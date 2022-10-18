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
  <link rel="shortcut icon" href="../mulag.png" />

  <title>Admin Panel Dashboard</title>

  <!-- Custom fonts for this template-->
  <link href="http://localhost/patientrecords/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="http://localhost/patientrecords/assets/css/sb-admin-2.min.css" rel="stylesheet">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>  
 <script src="http://localhost/patientrecords/assets/jquery-3.3.1.min.js"></script>

 <link rel="stylesheet" type="text/css" href="http://localhost/patientrecords/assets/loader.css">
 
 
 <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> 
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,400,500,600" rel="stylesheet" type="text/css"> 



<script src = "http://localhost/patientrecords/assets/js/scripts/bootstrap.js"></script>
<script src = "http://localhost/patientrecords/assets/js/scripts/jquery.min.js"></script>
<script src = "http://localhost/patientrecords/assets/js/scripts/dropdown.js"></script>
<script src = "http://localhost/patientrecords/assets/js/scripts/sidebar.js"></script>
<script src = "http://localhost/patientrecords/assets/js/scripts/jquery.dataTables.js"></script>
<script src = "http://localhost/patientrecords/assets/js/scripts/custom.js"></script>
<script type = "text/javascript">

  
  /* $(document).ready(function() {
    $('#table').DataTable();
    $('#table1').DataTable();
  });*/
  
</script>

<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>


  <script src = "http://localhost/patientrecords/assets/js/scripts/jquery.canvasjs.min.js"></script>


 <style type="text/css"> 
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






body{ 
  background:#eee; 
  font-family: 'Raleway', sans-serif;
   } 


.main-part{ 
  width:80%; 
  margin:0 auto; 
  text-align: center; 
  padding: 0px 5px;
   }

 .cpanel{ 
  width:32%; 
  display: inline-block; 
  background-color:#34495E; 
  color: white; 
  margin-top: 50px; 
  box-shadow: yellow;
  cursor: pointer;
 ; 




    }


    .cpanel:hover{
      transform: translateY(-30px); 

    }


.icon-part i{ 
  font-size: 30px; 
  padding:10px; 
  border:1px solid white; 
  border-radius:50%; 
  margin-top:-25px; 
  margin-bottom: 10px; 
  background-color:#34495E; 

} 




.icon-part p{ 
  margin:0px; 
  font-size: 20px; 
  padding-bottom: 10px; 
} 

.card-content-part p{
 color:grey;
text-decoration: none;
   } 

.cpanel-green .icon-part,.cpanel-green .icon-part i{
 background-color: cornflowerblue; 
  
  }


</style>



</head> 


<body id="page-top">
 
 
        
 <div class='alert-secondary text-center'><div class="text-center">Mulago Hospital <b>admin</b></div></div>  
</div>
          
  </div>
          
  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class=" navbar-nav bg-gradient-primary sidenav sidebar sidebar-dark accordion " id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center"  href="#">
        <div class="sidebar-brand-icon rotate-n-0">
           <i class="fas fa-user-cog"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Admin</div>
      </a>
     

 <!-- Divider -->
      <hr class="sidebar-divider my-0">


      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="Dashboard.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

       <!-- Divider -->
      <hr class="sidebar-divider my-0">


      <!-- Divider -->

      <!-- Nav Item - for Add Users (link for specific page)-->
      <li class="nav-item active">
         <!-- Nav Item - Tables -->
        <a class="nav-link collapsed " href="usersview.php">
          <i class="fas fa-fw fa-user-plus "></i>
          <span>Add Users</span></a>
      </li>

     
      <hr class="sidebar-divider my-0">

      <li class="nav-item active">
         <!-- Nav Item - Tables -->
        <a class="nav-link collapsed " href="../partners.php">
          <i class="fas fa-fw  fa-users "></i>
          <span>Partner Facilities</span></a>
      </li>


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
          <div class="card shadow mb-4">
      
            <div class="card-header py-4">
           
            <!-- Page Heading -->
          <h5 class="mb-8 text-gray-800 text-center" >Dash Board </h5>  

            </div>
     
             
              <!-- Display Cards showing individual element totals -->

           <body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper"><style>
    .img-profile{
        object-fit: cover;
  object-position: center center;
  
    }
    .collapse-item{
padding: 20px;


    }
</style>
<!-- Sidebar -->

               <!-- Begin Page Content -->
               <div class="container-fluid" style="box-shadow: 0 0 5px 0 rgb(58 59 69 /45%); padding: 30px; margin: 0 30px 10px; width: 80vw;">

                   <!-- Page Heading -->
                   <div class="d-sm-flex align-items-center justify-content-between mb-4">
                       <h1 class="h3 mb-0 text-gray-800"><div class="fas fa-user-cog">
                       </div></h1>
                       
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
     <div style=" padding: 10px 15px; color: gray; display: flex; justify-content: space-between; align-self: center; border-radius: 10px;">
        <h4 style="color:gray; margin-right: 10px; "> <i class="fa fa-clock fa-2x text-primary-300"></i> </h4> 
        <div>          
           <div id="clock"></div>
           <div id="time"></div>
     </div>
 </div>
 
 <script>
// const element = document.getElementById("clock");
var date=new Date();  
var day=date.getDate();  
var month=date.getMonth()+1;  
var year=date.getFullYear();  
var dated = year+"/"+month+"/"+day;
// document.write("<br>Date is: );  


document.getElementById("clock").innerHTML = dated;
// setInterval(function() {element.innerHTML = date}, 1000);

function showTime() {
  var time = new Date();
  var h = time.getHours();
  var m = time.getMinutes();
  var s = time.getSeconds();
  var session = "AM";

  if (h>12){
    h=h-12;
    session = "PM";
  }
  h=( h<10)?"0"+h:h;
  m=( m<10)?"0"+m:m;
  s=( s<10)?"0"+s:s;

  document.getElementById("time").innerHTML=h+":"+m+":"+s+":"+session;

  setTimeout(showTime, 1000);
}
showTime();
</script>




                   </div>

                   <!-- Content Row -->
                   <div class="row">

                       <!-- Earnings (Monthly) Card Example -->
                       <div class="col-xl-3 col-md-6 mb-4">
                           <div class="card border-left-primary shadow h-100 py-2">
                               <div class="card-body">
                                   <div class="row no-gutters align-items-center">
                                       <div class="col mr-2">
                                           <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                              Total Mulago Hospital Findings</div>
                                              <?php
                                $cpresult =" SELECT * FROM findings where f_hospital = 'Mulago Hospital' " ;
                               if($cpdisplay=mysqli_query($conn, $cpresult)) {
                                $cprow=mysqli_num_rows($cpdisplay);
                               }
                            ?>
                  
                                           <div class="h5 mb-0 font-weight-bold text-gray-800 align-items-center">
                                               <a href="./pages/crop-pests.php">
                                               <p>
                            <h2><?php echo $cprow;  ?></h2></p></a>
                                                  
                                           </div>
                                       </div>
                                       <div class="col-auto">
                                           <i class="fas fa-book-medical fa-2x text-primary-300"></i>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>

                      
                       <!-- Earnings (Monthly) Card Example -->
                       <div class="col-xl-3 col-md-6 mb-4">
                           <div class="card border-left-primary shadow h-100 py-2">
                               <div class="card-body">
                                   <div class="row no-gutters align-items-center">
                                       <div class="col mr-2">
                                           <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Total Mulago Hospital Admissions
                                           </div>
                                           <div class="row no-gutters align-items-center">
                                               <div class="col-auto">
                                                   <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                                                   <a href="./pages/users.php" >
                                                       <p><?php
                                $cdresult =" SELECT * FROM admission_record where f_hospital = 'Mulago Hospital' " ;
                               if($cddisplay=mysqli_query($conn, $cdresult)) {
                                $cdrow=mysqli_num_rows($cddisplay);
                               }
                            ?>
                            <h3><?php echo $cdrow;  ?></h3> </p>
                            </a>
                                                   </div>
                                               </div>
                                               
                                           </div>
                                       </div>
                                       <div class="col-auto">
                                           <i class="fas fa-hospital fa-2x text-primary-300"></i>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>

                       <!-- Pending Requests Card Example -->
                        <!-- Earnings (Monthly) Card Example -->
                       <div class="col-xl-3 col-md-6 mb-4"> 
                           <div class="card border-left-primary shadow h-100 py-2">
                               <div class="card-body">
                                   <div class="row no-gutters align-items-center">
                                       <div class="col mr-2">
                                           <div class="text-xs font-weight-bold text-primary text-uppercase mb-1 ">Most Common Disease
                                           </p></div>
                                           <div class="row no-gutters align-items-center">
                                               <div class="col-auto">
                                                   <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                                                        <p> <?php
                                $cdresult =" SELECT `f_diagnosis` FROM `findings` where f_hospital = 'Mulago Hospital' GROUP BY `f_diagnosis` ORDER BY COUNT(*) DESC LIMIT 1 " ;
                               if($cddisplay=mysqli_query($conn, $cdresult)) {
                                $cdrow=mysqli_fetch_assoc($cddisplay);
                               }
                            ?>
                            <h3 style="font-size:30px; align-items: center;"><?php echo $cdrow['f_diagnosis'];  ?></h3> </p>

                            </a>
                                                   </div>
                                               </div>

                                           </div>
                                       </div>
                                       <div class="col-auto">
                                           <i class="fas fa-exclamation-triangle fa-2x text-primary-300"></i>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>


                         <!-- Earnings (Monthly) Card Example -->
                       <div class="col-xl-3 col-md-6 mb-4">
                           <div class="card border-left-info shadow h-100 py-2">
                               <div class="card-body">
                                   <div class="row no-gutters align-items-center">
                                       <div class="col mr-2">
                                           <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Total Admins
                                           </div>
                                           <div class="row no-gutters align-items-center">
                                               <div class="col-auto">
                                                   <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                                                   <a href="./pages/users.php" >
                                                        <p> <?php
                                $cdresult =" SELECT * FROM realusers where u_role = 'Admin' " ;
                               if($cddisplay=mysqli_query($conn, $cdresult)) {
                                $cdrow=mysqli_num_rows($cddisplay);
                               }
                            ?>
                            <h3><?php echo $cdrow;  ?></h3> </p>
                            </a>
                                                   </div>
                                               </div>
                                               
                                           </div>
                                       </div>
                                       <div class="col-auto">
                                           <i class="fas fa-user-cog fa-2x text-gray-300"></i>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>


                                              

                   <!-- Content Row -->

                   

               
               <!-- /.container-fluid -->

           
           <!-- End of Main Content -->
       </div>
       <!-- End of Content Wrapper -->



 

 


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
  <br><br><br>
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


