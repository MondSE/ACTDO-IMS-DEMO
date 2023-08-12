<?php
include_once("./src/database/database_connection.php");

  if(isset($_POST['submit'])){
  $ticket_type = $_POST['ticket_type'];
  $ticket_no = $_POST['ticket_no'];
  $full_name = $_POST['full_name'];
  $officer_name = $_POST['officer'];
  $location_violation = ucwords($_POST['location_violation']);
  $date_apprehended = $_POST['date_apprehended'];
  $violation = $_POST['violation'];
  $remarks = ucwords($_POST['remarks']);
  $explanation_complaint = $_POST['explanation'];
      
  $violation_checkbox1 = implode(', ', $violation);
  $full_name_string = implode(', ', $full_name);

  $full_name_string= ucwords($full_name_string);
  $check_duplicate_ticket_no = mysqli_query($connect, "SELECT * FROM legal_complaint WHERE Ticket_No='$ticket_no'");


   if(mysqli_num_rows($check_duplicate_ticket_no)>0)
   {
       echo "<div class='alert alert-success alert-dismissible fade show'>
    <button type='button' class='btn-close' data-bs-dismiss='alert'></button>
    <strong>Warning!</strong> Hello client, It's is a Duplicate Ticket No. $ticket_no Not Enter!.
  </div>";
   }
   else{
       $sql = "INSERT INTO `legal_complaint`(`Ticket_Type`, `Ticket_No`, `Full_Name`, `violation`, `Officer`, `Location`, `Date_Complaint`, `Remarks`, `Explaination_Complain`) VALUES ('$ticket_type', '$ticket_no', '$full_name_string', '$violation_checkbox1', ' $officer_name', '$location_violation', '$date_apprehended', '$remarks', '$explanation_complaint')";
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