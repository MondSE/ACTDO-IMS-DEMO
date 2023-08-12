<?php
 $loading='';

if(isset($_POST['login'])){
 $username=strtoupper($_POST['user']);
 $password=$_POST['password'];

 $sql ="SELECT * FROM user WHERE `users`='$username' AND `password`='$password' AND `status`='active'";
 $user = $connect->query($sql) or die ($connect->error);

 $row = $user->fetch_assoc();
 $total = $user->num_rows;

 if($total > 0){
	$_SESSION['id'] = $row['id'];
  $_SESSION['users'] = $row['users'];
  $_SESSION['status'] = $row['status'];
	$_SESSION['person'] = $row['fullname'];
	$_SESSION['app'] = $row['office'];
	$_SESSION['key'] = $row['general_key'];

  $loading= "<div class='spinner-grow text-primary' role='status'>
</div>
<div class='spinner-grow text-secondary' role='status'>
</div>
<div class='spinner-grow text-success' role='status'>
</div>
<div class='spinner-grow text-danger' role='status'>
</div>
<div class='spinner-grow text-warning' role='status'>
</div>
<div class='spinner-grow text-info' role='status'>
</div>
<div class='spinner-grow text-dark' role='status'>
</div>
<span class='sr-only fw-bolder'>Loading please wait...</span>";
  $refresher = header("refresh: 5;");
 }else{
    echo "<div class='alert alert-warning alert-dismissible fade show'>
    <button type='button' class='btn-close' data-bs-dismiss='alert'></button>
    <strong>Warning!</strong> Hello client, The user not found or may be disabled.
  </div>";
 }
}?>