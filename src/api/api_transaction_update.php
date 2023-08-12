<?php 
//database connection
include_once("./src/database/database_connection.php");
    //Transaction Update Data
    if(isset($_POST['submit'])){
        $ticket_no = $_POST['ticket_no'];
        $official_receipt_no = $_POST['official_receipt_no'];
        $data_transaction = $_POST['data_transaction'];
        $original_amount_payment = $_POST['original_amount_payment'];
        $discounted_amount_payment = $_POST['discounted_amount_payment'];
        $discount_serial_no = $_POST['discount_serial_no'];
        $transact_type = $_POST['transact_type'];
    
        $update_query="UPDATE `license` SET `Amount_Payment`='$original_amount_payment',`Discount_Amount_Payment`='$discounted_amount_payment',`Date_Transaction`='$data_transaction',`Official_Receipt_No`='$official_receipt_no',`Discount_Ticket_No`=' $discount_serial_no',`Transaction`='$transact_type' WHERE `Ticket_No`='$ticket_no' ";

        try{
            $update_result=mysqli_query($connect, $update_query);
            if($update_result){
            if(mysqli_affected_rows($connect)>0){
                echo "<div class='alert alert-success alert-dismissible fade show'>
                <button type='button' class='btn-close' data-bs-dismiss='alert'></button>
                <strong>Successfully!</strong> Hello client, The Register Ticket No. $ticket_no is update.
            </div>";
            }else{
                echo "<div class='alert alert-danger alert-dismissible fade show'>
                <button type='button' class='btn-close' data-bs-dismiss='alert'></button>
                <strong>Error!</strong> Hello client, Something went wrong.
            </div>";

            }
            }
        }catch(Exception $ex){
            echo("error in update".$ex->getMessage());
        }
        }
