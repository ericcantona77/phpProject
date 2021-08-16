<?php
$host='localhost';
$user='root';
$password='';

$db_name='cantona';
$conn= new mysqli($host,$user,$password,$db_name);
if($conn->connect_error){
    die('database connection error:'.$conn->connect_error);
}
else{
    echo 'database connected successfully';
}





?>