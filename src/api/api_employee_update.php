<?php 
include_once("./src/database/database_connection.php");

if(isset($_POST['submit'])){

$full_name = ucwords($_POST['full_name']);
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

$file =$_FILES['file_image'];
$fileName = $file ['name'];
$fileTmpName = $file['tmp_name'];
$fileSize = $file['size'];
$fileError = $file['error'];
$fileType = $file['type'];

$fileExt = explode ('.', $fileName);
$fileActualExt = Strtolower(end($fileExt));

    $allowed = array('JPG', 'JPEG', 'PNG', 'PDF','jpg', 'jpeg', 'png', 'pdf',);
    $fileNameNew = "profile_img_".$full_name.".".$fileActualExt;
    $fileDestination = './src/assets/profile_image/'.$fileNameNew;
    move_uploaded_file($fileTmpName, $fileDestination);
    $img_status = 0;
    $sql = "UPDATE `employees` SET `name`='$full_name',`designation`='$designation',`email`='$email',`contact_no`='$phone_no',`date_hired`='$date_hired',`status`='$status',`sss_no`='$sss_no',`gsis_no`='$gsis_no',`phil_health_no`='$phil_health_no',`tin_no`='$tin_no',`pag_ibig_no`='$pag_ibig_no',`salary_rate`='$salary_rate',`img_status`='$img_status' WHERE `name`='$full_name'";
    if ($connect->query($sql)===true){
     echo "<div class='alert alert-success alert-dismissible fade show'>
<button type='button' class='btn-close' data-bs-dismiss='alert'></button>
<strong>Successfully!</strong> Hello client, You Updated Register Name. $full_name.
</div>";
   }
   else{
       echo "<div class='alert alert-danger alert-dismissible fade show'>
  <button type='button' class='btn-close' data-bs-dismiss='alert'></button>
  <strong>Error!</strong> Hello client, Something went wrong.
</div>";
   }
 
}
