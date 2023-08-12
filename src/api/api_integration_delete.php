<?php
include_once("./src/database/database_connection.php");

//view functional
if(isset($_GET['request'])){
    $Id = $_GET['request'];

$sql = ("DELETE FROM `license` WHERE Ticket_No='$Id' AND `Transaction`='N/A'");

if($connect->query($sql)===true){
            echo "<div class='alert alert-success alert-dismissible fade show'>
            <button type='button' class='btn-close' data-bs-dismiss='alert'></button>
            <strong>Successfully!</strong> Hello client, The Register Ticket No. $Id has been deleted.
          </div>";
    }else{
    }
}
?>