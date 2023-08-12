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
 $sql = "SELECT * FROM license ORDER BY Date_Transaction DESC LIMIT $offset , $total_records_per_page";
//result
 $result = mysqli_query($connect, $sql) or die(mysqli_error($connect));

  while($row = mysqli_fetch_array($result)){?>
            <tr>
            <td><?php echo $row['Ticket_No'];?></td>
            <td>&#8369; <?php echo $row['Amount_Payment'];?></td>
            <td>&#8369; <?php echo $row['Discount_Amount_Payment'];?></td>
            <td><?php echo $row['Discount_Ticket_No'];?></td>
            <td><?php echo $row['Official_Receipt_No'];?></td>
            <td><?php echo $row['Transaction'];?></td>
            <td ><?php echo $row["Date_Transaction"];?></td>
            <td><?php echo "<a class='border border-3 border-primary rounded-pill bg-primary text-light link-offset-2 link-underline link-underline-opacity-0 link-opacity-10-hover' href='transaction_view.php?request=".$row['Id']."'>View</a>"?></td>
            </tr>
            <?php } ?>



