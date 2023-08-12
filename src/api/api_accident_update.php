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

    $sql = "UPDATE `accidents` SET `code`='$code',`date_time`='$date',`location`='$location',`damage`='$property',`fatality`='$fatality',`injured`='$injured',`cctv`='$cctv',`involved`='$involved',`name_operator`='$full_name',`single`='$single',`sedan`='$sedan',`truck`='$truck',`puj`='$puj',`tricycle`='$tricycle',`bus`='$bus',`suv`='$suv' WHERE `code`='$code'";
    if ($connect->query($sql)===true){
     echo "<div class='alert alert-success alert-dismissible fade show'>
<button type='button' class='btn-close' data-bs-dismiss='alert'></button>
<strong>Successfully!</strong> Hello client, You Updated Register code. $code.
</div>";
   }
   else{
       echo "<div class='alert alert-danger alert-dismissible fade show'>
  <button type='button' class='btn-close' data-bs-dismiss='alert'></button>
  <strong>Error!</strong> Hello client, Something went wrong.
</div>";
   }
 
}
