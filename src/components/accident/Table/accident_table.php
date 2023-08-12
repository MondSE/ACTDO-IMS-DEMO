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
$result_count = mysqli_query($connect, "SELECT COUNT(*) as total_records FROM `accidents`");
//total records
$records = mysqli_fetch_array($result_count);
//store total_records to a variable
$total_records = $records['total_records'];
//get total pages 
$total_no_of_page = ceil($total_records/$total_records_per_page);

 //query string
 $sql = "SELECT * FROM accidents ORDER BY id DESC LIMIT $offset , $total_records_per_page";
//result
 $result = mysqli_query($connect, $sql) or die(mysqli_error($connect));

  while($row = mysqli_fetch_array($result)){
            ?>
            <tr>
            <td><?php echo $row['id'];?></td>
            <td><?php echo $row['code'];?></td>
            <td><?php echo $row['date_time'];?></td>
            <td><?php echo $row['involved'];?></td>
            <td><?php echo $row['cctv'];?></td>
            <td ><?php echo $row["name_operator"];?></td>
            <td><?php echo "<a class='border border-3 border-primary rounded-pill bg-primary text-light link-offset-2 link-underline link-underline-opacity-0 link-opacity-10-hover' href='accident_view.php?request=".$row['id']."'>View</a>"?></td>
            </tr>
            <?php } ?>



