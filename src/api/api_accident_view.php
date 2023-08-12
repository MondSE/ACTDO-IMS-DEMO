<?php
include_once("./src/database/database_connection.php");

//view functional
if(isset($_GET['request'])){
    $id = $_GET['request'];

$query = $connect->query("SELECT `id`, `code`, `date_time`, `location`, `damage`, `fatality`, `injured`, `cctv`, `involved`, `name_operator`, `single`, `sedan`, `truck`, `puj`, `tricycle`, `bus`, `suv` FROM `accidents` WHERE id='$id'");

if($query){
        while($value = $query->fetch_object()){
            $code = $value->code;
            $date = $value->date_time;
            $location = $value->location;
            $property = $value->damage;
            $injured = $value->injured;
            $fatality = $value->fatality;
            $single = $value->single;
            $tricycle = $value->tricycle;
            $sedan = $value->sedan;
            $suv = $value->suv;
            $puj = $value->puj;
            $bus =$value->bus;
            $truck = $value->truck;
            $involved = $value->involved;
            $cctv = $value->cctv;
            $full_name = $value->name_operator;
        }
    }
}

?>