<?php
$hostname='localhost';
$username='root';
$password='';
$database='emirates';




$connect=mysqli_connect($hostname,$username,$password,$database);
//testing connection 
if(!$connect){
    echo " connection error". mysqli_connect_error();
}

?>