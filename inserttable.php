<?php
$servername="localhost";
$username="root";
$password="";
$dbname="schoolproject";
$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
    die("connection failed");
}
$sql="INSERT INTO bca(name,id_no,department)VALUES('Hardik Hamal',1,'C++')";
if($conn->query($sql)){
    echo "Table inserted successfully";
}else
{
    echo "Error".$conn->error;
}
?>