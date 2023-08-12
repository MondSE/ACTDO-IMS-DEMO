<?php
include_once("./src/database/database_connection.php");

//view functional
if(isset($_GET['request'])){
    $Id = $_GET['request'];

$query = $connect->query("SELECT `id`,`Ticket_Type`, `Ticket_No`, `Full_Name`, `violation`, `Officer`, `Location`, `Date_Complaint`, `Remarks`, `Explaination_Complain` FROM `legal_complaint` WHERE id='$Id'");

if($query){
        while($value = $query->fetch_object()){
            $Ticket_Types=$value->Ticket_Type;
            $Ticket_No=$value->Ticket_No;
            $Full_Name=$value->Full_Name;
            $Violation=$value->violation;
            $Location=$value->Location;
            $Date_Apprehend=$value->Date_Complaint;
            $Officer_Name=$value->Officer;
            $Remarks=$value->Remarks;
            $Explaination_Complain=$value->Explaination_Complain;
        }
    }
}

//for officer selection list
$query2 = "SELECT * FROM `employees` order by `name` asc";
$result1 = mysqli_query($connect, $query2);
?>