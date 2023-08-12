<?php
include_once("./src/database/database_connection.php");

//Total count Ticket
$query = "SELECT count(Ticket_No) AS count FROM `license` WHERE `Transaction` LIKE '%N/A%'";
$query_result = mysqli_query($connect,$query);

while($row = mysqli_fetch_assoc($query_result)){
    $output1 = $row['count'];
}

//Total count Employee
$query2 = "SELECT count(id) AS count FROM `employees`";
$query_result2 = mysqli_query($connect,$query2);

while($row = mysqli_fetch_assoc($query_result2)){
    $output2 = $row['count'];
}

//Total count Transaction
$query3 = "SELECT count(date_transaction) AS count FROM `license`";
$query_result3 = mysqli_query($connect,$query3);

while($row = mysqli_fetch_assoc($query_result3)){
    $output3 = $row['count'];
}

//Total count complaints
$query4 = "SELECT count(id) AS count FROM `legal_complaint`";
$query_result4 = mysqli_query($connect,$query4);

while($row = mysqli_fetch_assoc($query_result4)){
    $output4 = $row['count'];
}

//Total count accidents
$query5 = "SELECT count(id) AS count FROM `accidents`";
$query_result5 = mysqli_query($connect,$query5);

while($row = mysqli_fetch_assoc($query_result5)){
    $output5 = $row['count'];
}

//Total count violators
$query6 = "SELECT count(Full_Name) AS count FROM `license`";
$query_result6 = mysqli_query($connect,$query6);

while($row = mysqli_fetch_assoc($query_result6)){
    $output6 = $row['count'];
}

