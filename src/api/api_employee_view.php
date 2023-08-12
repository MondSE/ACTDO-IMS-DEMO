<?php
include_once("./src/database/database_connection.php");

//view functional
if(isset($_GET['request'])){
    $id = $_GET['request'];

$query = $connect->query("SELECT `id`, `name`, `designation`, `email`, `contact_no`, `date_hired`, `status`, `sss_no`, `gsis_no`, `phil_health_no`, `tin_no`, `pag_ibig_no`, `salary_rate`, `img_status` FROM `employees` WHERE id='$id'");

if($query){
        while($value = $query->fetch_object()){
            $id=$value->id;
            $name=$value->name;
            $designation=$value->designation;
            $email=$value->email;
            $contact_no=$value->contact_no;
            $date_hired=$value->date_hired;
            $status=$value->status;
            $sss_no=$value->sss_no;
            $gsis_no=$value->gsis_no;
            $phil_health_no=$value->phil_health_no;
            $tin_no=$value->tin_no;
            $pag_ibig_no=$value->pag_ibig_no;
            $salary_rate=$value->salary_rate;
            $img_status=$value->img_status;

            $sqlimg = "SELECT * FROM employees WHERE `name`='$name'";
            $resultimg = mysqli_query($connect, $sqlimg);
            while ($rowimg = mysqli_fetch_assoc($resultimg)){
                    if ($rowimg['img_status']==0){
                        $profile_image = "src='./src/assets/profile_image/profile_img_".$name.".jpg'".mt_rand()."";
                    }else{
                        $profile_image = "src='./src/assets/profile_image/profiledefault.jpg'";
                    }
            }
        }
    }
}

?>