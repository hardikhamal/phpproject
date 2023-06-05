<?php
$servername="localhost";
$username="root";
$password="";
$dbname="schoolproject";
$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
    die("connection failed");
}
$sql="select sum(id_no) from bca";
$result=$conn->query($sql);
if($result->num_rows>0){
    $row=$result->fetch_assoc();
    print_r($row);
}
?>