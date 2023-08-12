<?php

    $server = "localhost";
    $user = "root";
    $password = "admin";
    $schema_database = "schema_test_actdo";

    $connect = new mysqli($server,$user,$password,$schema_database) or die("Unable to connect");

    