<?php
include_once("./src/database/database_connection.php");

  if(isset($_POST['submit'])){
  $ticket_type = $_POST['ticket_type'];
  $ticket_no = $_POST['ticket_no'];
  $full_name = $_POST['full_name'];
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
  $violation = $_POST['violation'];
  $remarks = ucwords($_POST['remarks']);
  $amount_payment = 0;
  $discount_amount_payment = 0;
  $date_transaction = "";
  $official_receipt_no = 0;
  $discount_ticket_no = "N/A";
  $responsible_name = "N/A";
  $transaction = "N/A";
      
  $violation_checkbox1 = implode(', ', $violation);
  $full_name_string = implode(', ', $full_name);

  $full_name_string= ucwords($full_name_string);
  $plate = preg_replace('/\s+/', '', $plate);
  $check_duplicate_ticket_no = mysqli_query($connect, "SELECT * FROM license WHERE ticket_no='$ticket_no'");


   if(mysqli_num_rows($check_duplicate_ticket_no)>0)
   {
       echo "<div class='alert alert-success alert-dismissible fade show'>
    <button type='button' class='btn-close' data-bs-dismiss='alert'></button>
    <strong>Warning!</strong> Hello client, It's is a Duplicate Ticket No. $ticket_no Not Enter!.
  </div>";
   }
   else{
       $sql = "INSERT INTO `license` (`Ticket_No`, `Ticket_Types`, `Driver_License_No`, `Plate_No`, `Vehicle_Model`, `Vehicle_Color`, `Full_Name`, `Violation`, `Location`, `Date_Apprehend`, `Type_Vehicle`, `Office`, `Amount_Payment`, `Discount_Amount_Payment`, `Official_Receipt_No`, `Discount_Ticket_No`, `Responsible_Name`, `Transaction`, `Officer_Name`,`Remarks`, `City`, `Public_Transport_State`) VALUES ('$ticket_no', '$ticket_type', '$driver_license_no', '$plate', '$brand_model', '$color_brand_model', '$full_name_string', '$violation_checkbox1', '$location_violation', '$date_apprehended', '$vehicle_type', '$office', '$amount_payment','$discount_amount_payment', '$official_receipt_no', '$discount_ticket_no', '$responsible_name', '$transaction', '$officer_name', '$remarks', '$province_city', '$public_transport_state')";
        if ($connect->query($sql)===true){
         echo "<div class='alert alert-success alert-dismissible fade show'>
    <button type='button' class='btn-close' data-bs-dismiss='alert'></button>
    <strong>Successfully!</strong> Hello client, You Register Ticket No. $ticket_no.
  </div>";
     }
     else{
         echo "<div class='alert alert-danger alert-dismissible fade show'>
    <button type='button' class='btn-close' data-bs-dismiss='alert'></button>
    <strong>Error!</strong> Hello client, Something went wrong.
  </div>";
     }
   }
}

$query2 = "SELECT * FROM `employees` order by `name` asc";
$result1 = mysqli_query($connect, $query2);