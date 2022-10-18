<?php
$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "patientrecord";

$conn = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);


if (!$conn){
  die("Connection Failed: " . mysqli_connect_error());

}


$sql = "SELECT f_hospital, COUNT(f_id) AS number from findings group by f_hospital";


$result = $conn->query($sql);


while($row=mysqli_fetch_array($result)){

    $f_hospital[] = $row['f_hospital'];
    $number[] = $row['number'];
}



$sql2 = "SELECT f_diagnosis, COUNT(f_id) AS number from findings group by f_diagnosis";
$result2 = $conn->query($sql2);

while($row2=mysqli_fetch_array($result2)){

    $f_diagnosis[] = $row2['f_diagnosis'];
    $number2[] = $row2['number'];
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

    <title> Dashboard</title>

    <!-- Custom styles for this template-->
 <link href="sb-admin-2.css" rel="stylesheet" type="text/css">
    
 <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

        <link rel="stylesheet" type="text/css" href="css/print.css" media="print"> 
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
  background: grey;
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

 



</style>



</head> 


<body id="page-top">
 
 
        
 <div class='alert-primary text-center'><div class="text-center"> Super <b>admin</b></div></div>  
</div>
          
  </div>
          
  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class=" navbar-nav bg-gradient-primary sidenav sidebar sidebar-dark accordion " id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center"  href="#">
        <div class="sidebar-brand-icon rotate-n-0">
          <img src="GeneralLogal3.png">
        </div>
       
      </a>
     <div class="sidebar-brand-text mx-3 align-items-center justify-content-center"> <b> Super Admin</b> </div>

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

      <!-- Nav Item - for Add Users (link for specific page)-->
      <li class="nav-item active">
         <!-- Nav Item - Tables -->
        <a class="nav-link collapsed " href="usersview.php">
          <i class="fas fa-fw fa-user-plus "></i>
          <span>Add Users</span></a>
      </li>

       <!-- Divider -->
  <hr class="sidebar-divider my-0">
      <!-- Nav Item - for Add Users (link for specific page)-->
      <li class="nav-item active">
         <!-- Nav Item - Tables -->
        <a class="nav-link collapsed " href="reports.php">
          <i class="fas fa-fw fa-clipboard "></i>
          <span>Reports</span></a>
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



















    </head>

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
                                              Total Registered Patients</div>
                                              <?php
                                $cpresult =" SELECT * FROM patient_record " ;
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
                                           <i class="fa fa-book-medical fa-2x text-primary-300"></i>
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
                                           <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Total Admissions
                                           </div>
                                           <div class="row no-gutters align-items-center">
                                               <div class="col-auto">
                                                   <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                                                   <a href="./pages/users.php" >
                                                       <p><?php
                                $cdresult =" SELECT * FROM findings " ;
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
                               <div class="card-body" href="dash.php">
                                   <div class="row no-gutters align-items-center">
                                       <div class="col mr-2">
                                           <div class="text-xs font-weight-bold text-primary text-uppercase mb-1 "><p style="font-size:20px;">Partners
                                           </p></div>
                                           <div class="row no-gutters align-items-center">
                                               <div class="col-auto">
                                                   <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                                                   <a href="./pages/users.php" >
                                                        <p> <?php
                                $cdresult =" SELECT * FROM partners " ;
                               if($cddisplay=mysqli_query($conn, $cdresult)) {
                                $cdrow=mysqli_num_rows($cddisplay);
                               }
                            ?>
                            <h3 style="font-size:30px; align-items: center;"><?php echo $cdrow;  ?></h3> </p>

                            </a>
                                                   </div>
                                               </div>
                                               
                                           </div>
                                       </div>
                                       <div class="col-auto">
                                           <i class="fas fa-users fa-2x text-gray-300"></i>
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

    <div class="row" id="graphs" >
    
    <div class="col-md-8 col-md-4 col-sm-12 mt-5">
      <div class="card"> 
      <div class="card-header bg">
        <h3 class="text-secondary" style="font-size: large; text-align: center;">Hospital Admissions Per Health Facility</h3>
      </div>
          <div class="card-body">
            <canvas id="chartjs_bar"></canvas>
          </div>
      </div>
      
    </div>
    <div class="card col-lg-4 col-md-4 col-sm-12 mt-5">
        <div class="card-header bg">
            <h3 class="text-secondary" style="text-align: center; font-size: large;">Disease Distribution</h3>
        </div>
        <div class="card-body">
            <canvas id="chartjs_pie"></canvas>
         </div>
      </div>
      
  </div>
  <!-- <script type="text/javascript"src="https://cdn.jsdelivr.net/npm/chart.js"></script> -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>

    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/chartjs-plugin-datalabels/2.1.0/chartjs-plugin-datalabels.min.js" integrity="sha512-Tfw6etYMUhL4RTki37niav99C6OHwMDB2iBT5S5piyHO+ltK2YX8Hjy9TXxhE1Gm/TmAV0uaykSpnHKFIAif/A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->
    </div>
   



<script type="text/javascript">
      var ctx = document.getElementById("chartjs_bar").getContext('2d');

      let colorHex = [ 'forestgreen', 'midnightblue', '#80215f', 'black'];

      var myChart = new Chart(ctx,{
          type: 'bar',
          
          data: {
          labels:<?php echo json_encode($f_hospital);  ?>,

            datasets: [
      {          
      label: 'Admissions',
      data: <?php echo json_encode($number);  ?>,
    backgroundColor: colorHex,
    borderColor: colorHex,
    hoverBackgroundColor: 'white',
    borderWidth: 3,
    
    }

            ]
          },
          options:{
              legend: {
                  display:false,
                  position:'bottom',
                  labels: {
                      fontColor: '#71748d',
                      fontFamily: 'Circular Std Book',
                      fontSize: 14,
                  }
              },
              scales: {
                 yAxes: [{
                     ticks: {
                         beginAtZero: true,
                         stepSize: 1
                        
                     },
                     scaleLabel: {
                        display: true,
                        labelString: 'Patient Number'
                   }
                }],
                xAxes: [{
                    ticks: {
                        fontSize: 11,
                     },
                    scaleLabel: {
                        display: true,
                        labelString: "Health Facility"

                    }

                }]
            } ,    
          }
      });

    //   pie chartjs



  let colorHex2 = [ 'red', 'blue', 'maroon', 'creem', 'green', 'yellow', 'brown','indigo','orange','purple'];


      var ctx = document.getElementById("chartjs_pie").getContext('2d');
      var myChart = new Chart(ctx,{
          type: 'pie',
          

          data: {
          labels:<?php echo json_encode($f_diagnosis);  ?>,

            datasets: [
      {          
      label: 'Dataset 1',
      data: <?php echo json_encode($number2);  ?>,
    backgroundColor: colorHex2,
    borderColor: colorHex2,
    hoverBackgroundColor: 'white',
    // borderWidth: 2,
    
    }

            ]

            
          },
          options:{
              legend: {
                  display:true,
                  position:'bottom',
                },
                  plugins:{
                  labels: {
                      render: 'value',
                    //   fontColor: '#71748d',
                    //   fontFamily: 'Circular Std Book',
                    //   fontSize: 14,  
              },
            }
             
                
          }, 
         
          
      });

      
    </script>


       <!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script><!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

</div>
<!-- End of Page Wrapper -->



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
                <a class="btn btn-primary" href="../login.php">Logout</a>
            </div>
        </div>
    </div>
</div>

<!-- </div> -->
</body>

</html>
