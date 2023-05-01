<?php
$get_id = $_GET['id'];

require "inc/conn.php";

require "inc/sql.php";

$sql = new sql;

$result = $sql->write_sql("SELECT * FROM `data` WHERE `id` = '$get_id'");

$get_num_rows = $result->num_rows;

if($get_num_rows > 0){
$dele_result = $sql->write_sql("DELETE FROM `data` WHERE `data`.`id` = '$get_id';");

if($dele_result){
    echo 'deleted successfully';
    header("location: ./");
}



}else{
    header("location: ./");
}



?>