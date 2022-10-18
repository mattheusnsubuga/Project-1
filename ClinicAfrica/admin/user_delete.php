<?php

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "patientrecord";

$conn = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);


if (!$conn){
  die("Connection Failed: " . mysqli_connect_error());
}

//Deleting Values
if(isset($_GET['did'])){
  $id=$_GET['did'];

$sql="delete from realusers where u_id=$id";
$result=mysqli_query($conn,$sql);
if($result){
  echo  "<script> window.alert('Patient Has Been Deleted');</script>";
  header('location:usersview.php');
}else
die(mysli_error($conn));
}



?>