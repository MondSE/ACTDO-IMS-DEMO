<?php
session_start();
if(!empty($_SESSION["id"])) {
    include_once "./src/partials/navbar.php";
    include_once "./src/components/employees/employee_registration.php";
    include_once "./src/partials/body_closing.php";
    include_once "./src/partials/html_closing.php";
}else{
     unset($_SESSION['user']);
     unset($_SESSION['status']);
     session_destroy();
     require_once "index.php";
    }


