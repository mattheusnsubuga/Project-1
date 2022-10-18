
<?php
session_start();

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "patientrecord";

$conn = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);


if (!$conn){
  die("Connection Failed: " . mysqli_connect_error());
}

if(isset($_POST['Login']))
{
  $u_name = $_POST['u_name'];
  $u_password = $_POST['u_password'];
  $u_password = sha1($u_password); 
  $u_role = $_POST['u_role'];

$sql ="SELECT * FROM realusers where u_name= AND u_password=? AND u_role=?";

$stmt = $conn->prepare($sql);
$stmt->bind_param("sss", $u_name,$u_password, $u_role);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();

session_regenerate_id();
$_SESSION['u_name'] = $row['u_name'];
$_SESSION['u_role'] = $row['u_role'];
session_write_close();

if($result->num_rows==1 && $_SESSION['u_role']=="admin"){
  header("location:dashboard.php");
}

elseif($result->num_rows==1 && $_SESSION['u_role']=="clerk"){
  header("location:patientdataview.php");

}else{
  $msg = "Username or Password Is Incorrect";
}
} 
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Login Account</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="Clogo.png" />
  </head>

  <style type="text/css">
    
body{
  margin: 0;
  padding: 0;
  font-family: sans-serif;
  background: url(Afri1.png) no-repeat;
  background-size: cover;
}
.login-box{
  width: 280px;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
  color: white;
}
.login-box h1{
  float: left;
  font-size: 40px;
  border-bottom: 6px solid #4caf50;
  margin-bottom: 50px;
  padding: 13px 0;
}
.textbox{
  width: 100%;
  overflow: hidden;
  font-size: 20px;
  padding: 8px 0;
  margin: 8px 0;
  border-bottom: 2px solid #4caf50;
}
.textbox i{
  width: 26px;
  float: left;
  text-align: center;
  color: green;
}
.textbox input{
  border: none;  
  outline: none;
  background: none;
  color: black;
  font-size: 18px;
  width: 80%;
  float: left;
  margin: 0 10px;
}
.btn{
  width: 100%;
  background: none;
  border: 0x solid #4caf50;
  color: white;
  padding: 5px;
  font-size: 18px;
  cursor: pointer;
  margin: 12px 0;
  background-color: forestgreen;
}
.btn: hover{
  background: forestgreen;
  color: forestgreen;
}



  </style>
<form action="<?= $_SERVER['PHP_SELF']?>" method="POST">
<div class="login-box">
  <h1>Login</h1>

  <div class="textbox">
    <i class="fas fa-user"></i>
    <input type="text" placeholder="Username"  class="input"  name="u_name"  value="">
  </div>

  <div class="textbox">
    <i class="fas fa-lock"></i>
    <input type="password" placeholder="Password"  class="input" name="u_password" value="">
  </div>


<div class="form-group lead btn-success">
  <label> Loged in as in as a: </label>
  <input type="radio" name="u_role" value="admin" class="custom-radio" required>&nbsp;Admin 
  <input type="radio" name="u_role" value="Clerk" class="custom-radio" required>&nbsp;Clerk
</div>

  <p> <a href=""> <input type="button" value="Login" type="submit" class="btn btn-success btn-icon-split" name="Login"  class="btn btn-success btn-icon-split"> </p></a>
</div>
</form>

<!-- Bootstrap core JavaScript-->
  <script src="http://localhost/patientrecords/assets/vendor/jquery/jquery.min.js"></script>
  <script src="http://localhost/patientrecords/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="http://localhost/patientrecords/assets/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="http://localhost/patientrecords/assets/js/sb-admin-2.min.js"></script>
  </body>
</html>


