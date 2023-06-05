<?php
$servername="localhost";
$username="root";
$password="";
$dbname="schoolproject";
$conn=new mysqli($servername,$username,$password,$dbname);
if(!$conn){
    echo "Database is not connected successfully";
}else{
    echo "Database connected successfully";
}
?>