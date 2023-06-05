<?php
$servername="localhost";
$username="root";
$password="";
$dbname="schoolproject";
$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
    die("connection failed");
}
$sql="create table bca(
    name varchar(255) not null,
    id_no int primary key ,
    department varchar(255)
);";
if($conn->query($sql)){
    echo "Table created successfully";
}else{
    echo "error creating table:".$conn->error;
}
?>