<?php
include_once("./src/database/database_connection.php");

  if(isset($_POST['submit'])){
  $Id = $_GET['request'];
  $ticket_type = $_POST['ticket_type'];
  $ticket_no = $_POST['ticket_no'];
  $full_name = ucwords($_POST['full_name']);
  $driver_license_no = strtoupper($_POST['driver_license_no']);
  $plate = strtoupper($_POST['plate']);
  $province_city = ucwords($_POST['province_city']);
  $brand_model = ucwords($_POST['brand_model']);
  $color_brand_model = ucwords($_POST['color_brand_model']);
  $vehicle_type = $_POST['vehicle_type'];
  $public_transport_state = $_POST['public_transport_state'];
  $officer_name = $_POST['officer'];
  $office = $_POST['office'];
  $location_violation = ucwords($_POST['location_violation']);
  $date_apprehended = $_POST['date_apprehended'];
  $violation = ucwords($_POST['violation']);
  $remarks = ucwords($_POST['remarks']);
  $plate = preg_replace('/\s+/', '', $plate);


   
  $update_query="UPDATE `license` SET `Ticket_No` = '$ticket_no', `Ticket_Types` = '$ticket_type', `Driver_License_No` = '$driver_license_no', `Plate_No` = '$plate', `Vehicle_Model` = '$vehicle_type', `Vehicle_Color` = '$brand_model', `Full_Name` = '$full_name', `Violation` = '$violation', `Location` = '$location_violation', `Date_Apprehend` = '$date_apprehended', `Type_Vehicle` = '$vehicle_type', `Office` = '$office', `Officer_Name` = '$officer_name', `Remarks` = '$remarks', `City` = '$province_city', `Public_Transport_State` = '$public_transport_state' WHERE Id='$Id' ";
  try{
    $update_result=mysqli_query($connect, $update_query);
    if($update_result){
      if(mysqli_affected_rows($connect)>0){
        echo "<div class='alert alert-success alert-dismissible fade show'>
        <button type='button' class='btn-close' data-bs-dismiss='alert'></button>
        <strong>Successfully!</strong> Hello client, You Update Ticket No. $ticket_no.
      </div>";
      }else{
        echo"<div class='alert alert-danger alert-dismissible fade show'>
        <button type='button' class='btn-close' data-bs-dismiss='alert'></button>
        <strong>Warning!</strong> Hello client, Something went wrong on Ticket No. $ticket_no.
      </div>";

      }
    }
  }catch(Exception $ex){
    echo("error in update".$ex->getMessage());
  }
}