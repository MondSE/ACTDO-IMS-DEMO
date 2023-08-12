<?php
include_once("./src/database/database_connection.php");

//view functional
if(isset($_GET['request'])){
    $Id = $_GET['request'];

$query = $connect->query("SELECT `Id`, `Ticket_No`, `Ticket_Types`, `Driver_License_No`, `Plate_No`, `Vehicle_Model`, `Vehicle_Color`, `Full_Name`, `Violation`, `Location`, `Date_Apprehend`, `Type_Vehicle`, `Office`, `Officer_Name`, `Remarks`, `City`, `Public_Transport_State` FROM `license` WHERE Id='$Id'");

if($query){
        while($value = $query->fetch_object()){
            $Ticket_Types=$value->Ticket_Types;
            $Ticket_No=$value->Ticket_No;
            $Full_Name=$value->Full_Name;
            $Driver_License_No=$value->Driver_License_No;
            $Plate_No=$value->Plate_No;
            $Vehicle_Model=$value->Vehicle_Model;
            $Vehicle_Color=$value->Vehicle_Color;
            $Violation=$value->Violation;
            $Location=$value->Location;
            $Date_Apprehend=$value->Date_Apprehend;
            $Type_Vehicle=$value->Type_Vehicle;
            $Office=$value->Office;
            $Officer_Name=$value->Officer_Name;
            $Remarks=$value->Remarks;
            $City=$value->City;
            $Public_Transport_State=$value->Public_Transport_State;
        }
    }
}

//for officer selection list
$query2 = "SELECT * FROM `employees` order by `name` asc";
$result1 = mysqli_query($connect, $query2);
?>