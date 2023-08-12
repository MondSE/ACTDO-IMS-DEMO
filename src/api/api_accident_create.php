<?php
include_once("./src/database/database_connection.php");

  if(isset($_POST['submit'])){
  $code = $_POST['code'];
  $date = $_POST['date'];
  $location = ucwords($_POST['location']);
  $property = ucwords($_POST['property']);
  $injured = $_POST['injured'];
  $fatality = $_POST['fatality'];
  $single = $_POST['single'];
  $tricycle = $_POST['tricycle'];
  $sedan = $_POST['sedan'];
  $suv = $_POST['suv'];
  $puj = $_POST['puj'];
  $bus = $_POST['bus'];
  $truck = $_POST['truck'];
  $involved = $_POST['involved'];
  $cctv = $_POST['cctv'];
  $full_name = ucwords($_POST['full_name']);

  $check_duplicate_code_no = mysqli_query($connect, "SELECT * FROM accidents WHERE code='$code'");

     if(mysqli_num_rows($check_duplicate_code_no)>0)
   {
       echo "<div class='alert alert-success alert-dismissible fade show'>
    <button type='button' class='btn-close' data-bs-dismiss='alert'></button>
    <strong>Warning!</strong> Hello client, It's is a Duplicate Code No. $code Not Enter!.
  </div>";
   }
   else{
    $sql = "INSERT INTO `accidents`(`code`,`date_time`, `location`, `damage`, `fatality`, `injured`, `cctv`, `involved`, `name_operator`, `single`, `sedan`, `truck`, `puj`, `tricycle`, `bus`, `suv`) VALUES ('$code','$date', '$location', '$property', '$fatality', '$injured', '$cctv', '$involved', '$full_name', '$single', '$sedan', '$truck', '$puj', '$tricycle', '$bus', '$suv')";
    if ($connect->query($sql)===true){
      echo"<div class='alert alert-success alert-dismissible fade show'>
              <button type='button' class='btn-close' data-bs-dismiss='alert'></button>
              <strong>Successfully!</strong> Hello client, You Register Date. $date.
          </div>";
    }else{
       echo"<div class='alert alert-danger alert-dismissible fade show'>
                  <button type='button' class='btn-close' data-bs-dismiss='alert'></button>
                  <strong>Error!</strong> Hello client, Something went wrong.
           </div>";
       }  
   }
}