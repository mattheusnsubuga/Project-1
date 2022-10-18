<?php

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "patientrecord";

$conn = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);


if (!$conn){
	die("Connection Failed: " . mysqli_connect_error());
}


//Saving patient  data to the database

if(isset($_POST["submit"])){
    $pr_card = $_POST['pr_card'];
    $pr_lname = $_POST['lname']; 
    $pr_fname = $_POST['fname'];
    $pr_mname = $_POST['middlen'];       
    $pr_addrs = $_POST['address'];       
    $pr_age = $_POST['age'];       
    $pr_bdate = $_POST['datebirth'];       
    $pr_bplace  = $_POST['birthplace'];      
    $pr_civilstat = $_POST['civilstat'];   
    $pr_gen   = $_POST['gen'];     
    $pr_number  = $_POST['number'];      
    $pr_religion= $_POST['religion'];      
    $pr_occup = $_POST['occup'];

$sql= "INSERT INTO patient_record (pr_card,pr_lname,pr_fname,pr_mname,pr_addrs,pr_age,pr_bdate,pr_bplace,pr_civilstat,pr_gen,pr_number,pr_religion,pr_occup) VALUES ('$pr_card','$pr_lname','$pr_fname','$pr_mname','$pr_addrs','$pr_age','$pr_bdate','$pr_bplace','$pr_civilstat','$pr_gen','$pr_number','$pr_religion','$pr_occup')";

  $result = mysqli_query($conn,$sql);
if($result){
  echo  "<script> window.alert('Patient Added Successfully');</script>";


  header("location:../admitdatatable.php");
}
else{
  die(mysli_error($conn));
}

}







?>