<?php
session_start();
unset($_SESSION['user']);
unset($_SESSION['status']);
session_destroy();
header("Location: \personal project\angeles_city_traffic_development_office_management_system_v3.0\index.php?successfully_Log_out");
exit();