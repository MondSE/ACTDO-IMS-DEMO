<?php 
include_once("./src/database/database_connection.php");

if(isset($_POST['submit'])){

$full_name = $_POST['full_name'];
$email = $_POST['email'];
$phone_no = $_POST['phone_no'];
$designation = $_POST['designation'];
$salary_rate = $_POST['salary_rate'];
$date_hired = $_POST['date_hired'];
$sss_no = $_POST['sss_no'];
$phil_health_no = $_POST['phil_health_no'];
$gsis_no = $_POST['gsis_no'];
$pag_ibig_no = $_POST['pag_ibig_no'];
$tin_no = $_POST['tin_no'];
$status = "active";

$full_name_string = implode(', ', $full_name);
$full_name_string= ucwords($full_name_string);
$check_duplicate_name = mysqli_query($connect, "SELECT * FROM employees WHERE `name` = '$full_name_string'");


 if(mysqli_num_rows($check_duplicate_name)>0)
 {
     echo "<div class='alert alert-success alert-dismissible fade show'>
  <button type='button' class='btn-close' data-bs-dismiss='alert'></button>
  <strong>Warning!</strong> Hello client, It's is a Duplicate Ticket No. $full_name_string Not Enter!.
</div>";
 }
 else{
$file =$_FILES['file_image'];
$fileName = $file ['name'];
$fileTmpName = $file['tmp_name'];
$fileSize = $file['size'];
$fileError = $file['error'];
$fileType = $file['type'];

$fileExt = explode ('.', $fileName);
$fileActualExt = Strtolower(end($fileExt));

    $allowed = array('JPG', 'JPEG', 'PNG', 'PDF','jpg', 'jpeg', 'png', 'pdf',);
    $fileNameNew = "profile_img_".$full_name_string.".".$fileActualExt;
    $fileDestination = './src/assets/profile_image/'.$fileNameNew;
    move_uploaded_file($fileTmpName, $fileDestination);
    $img_status = 0;
     $sql = "INSERT INTO `employees`(`name`, `designation`, `email`, `contact_no`, `date_hired`, `status`, `sss_no`, `gsis_no`, `phil_health_no`, `tin_no`, `pag_ibig_no`, `salary_rate`, `img_status`) VALUES ('$full_name_string', '$designation', '$email', '$phone_no', '$date_hired', '$status', '$sss_no', '$gsis_no', '$phil_health_no', '$tin_no', '$pag_ibig_no', '$salary_rate', '$img_status')";
      if ($connect->query($sql)===true){
       echo "<div class='alert alert-success alert-dismissible fade show'>
  <button type='button' class='btn-close' data-bs-dismiss='alert'></button>
  <strong>Successfully!</strong> Hello client, You Register Ticket No. $full_name_string.
</div>";
   }
   else{
       echo "<div class='alert alert-danger alert-dismissible fade show'>
  <button type='button' class='btn-close' data-bs-dismiss='alert'></button>
  <strong>Error!</strong> Hello client, Something went wrong.
</div>";
   }
 }
 
}
