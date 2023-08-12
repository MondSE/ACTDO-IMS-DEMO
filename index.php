<?php
 session_start();
if(isset($_SESSION["users"])) {
    header('Location:dashboard.php');
}else{
    include_once("./src/partials/head.php");
    include_once "./src/components/login/login.php";
    include_once "./src/partials/body_closing.php";
    include_once "./src/partials/footer.php";
    include_once "./src/partials/html_closing.php";
   }

