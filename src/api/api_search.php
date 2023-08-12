<?php

if(isset($_POST['submit']))
{
    $valueToSearch = $_POST['search_client'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `license` WHERE CONCAT(`Ticket_No`, `Driver_License_No`, `Plate_No`, `Full_Name`, `Remarks`, `Vehicle_Model`, `Discount_Ticket_No`) LIKE '%".$valueToSearch."%' ORDER BY id DESC Limit 10";
    $search_result = filterTable($query);
}
 else {
    $query = "SELECT * FROM `license` ORDER BY id DESC LIMIT 10";
    $search_result = filterTable($query);
}

// function to connect and execute the query
function filterTable($query)
{
  $connect = mysqli_connect("localhost", "root", "admin", "schema_test_actdo");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}

// populate table from mysql database 
 while($row = mysqli_fetch_array($search_result)):
?>
    <tr>
    <td><?php echo $row['Ticket_No'];?></td>
    <td><?php echo $row['Full_Name'];?></td>
    <td><?php echo $row['Violation'];?></td>
    <td ><?php echo $row["Date_Apprehend"];?></td>
    <td><?php echo $row['Officer_Name'];?></td>
    <td><?php echo $row['Date_Transaction'];?></td>
    </tr>
<?php endwhile;?>