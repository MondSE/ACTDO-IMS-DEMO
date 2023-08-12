<?php
include_once("./src/database/database_connection.php");

 //get page number
 if(isset($_GET['page_no']) && $_GET['page_no'] !== "") {
    $page_no = $_GET['page_no'];
 }else{
    $page_no = 1;

 }
 
 //total rows or records to display
 $total_records_per_page = 10;
 //get the page offset for the limit query
 $offset = ($page_no - 1) * $total_records_per_page;
 //get the page
 $previous_page = $page_no - 1;
//get the next page
 $next_page = ($page_no + 1);


//get the total count of records
$result_count = mysqli_query($connect, "SELECT COUNT(*) as total_records FROM `license`");
//total records
$records = mysqli_fetch_array($result_count);
//store total_records to a variable
$total_records = $records['total_records'];
//get total pages 
$total_no_of_page = ceil($total_records/$total_records_per_page);

 //query string
 $sql = "SELECT * FROM license ORDER BY Id DESC LIMIT $offset , $total_records_per_page";
//result
 $result = mysqli_query($connect, $sql) or die(mysqli_error($connect));

  while($row = mysqli_fetch_array($result)){
   $transaction= $row['Transaction'];?>
            <tr>
            <td><?php echo $row['Ticket_No'];?></td>
            <td><?php echo $row['Full_Name'];?></td>
            <td><?php echo $row['Violation'];?></td>
            <td ><?php echo $row["Date_Apprehend"];?></td>
            <td><?php echo $row['Officer_Name'];?></td>
            <td><?php echo "<a class='border border-3 border-primary rounded-pill bg-primary text-light link-offset-2 link-underline link-underline-opacity-0 link-opacity-10-hover' href='integrations_view.php?request=".$row['Id']."'>View</a>"?></td>
            <td><?php if($transaction=='N/A'){echo "<a class='border border-3 border-danger rounded-pill bg-danger text-light link-offset-2 link-underline link-underline-opacity-0 link-opacity-10-hover' href='integration.php?request=".$row['Ticket_No']."'>Delete</a>";}else{echo "<p class='border border-3 border-success rounded-pill bg-success text-light link-offset-2 link-underline link-underline-opacity-0 link-opacity-10-hover'>Invoice</p>";}?></td>
            </tr>
            <?php } ?>



