<?php
include_once("./src/database/database_connection.php");

//view functional
if(isset($_GET['request'])){
    $Id = $_GET['request'];

$query = $connect->query("SELECT `Ticket_No`,`Amount_Payment`, `Discount_Amount_Payment`, `Date_Transaction`, `Official_Receipt_No`, `Discount_Ticket_No`, `Transaction` FROM `license` WHERE Id='$Id'");

if($query){
        while($value = $query->fetch_object()){
            $Ticket_No=$value->Ticket_No;
            $Amount_Payment=$value->Amount_Payment;
            $Discount_Amount_Payment=$value->Discount_Amount_Payment;
            $Date_Transaction=$value->Date_Transaction;
            $Official_Receipt_No=$value->Official_Receipt_No;
            $Discount_Ticket_No=$value->Discount_Ticket_No;
            $Transaction=$value->Transaction;
        }
    }
}

?>