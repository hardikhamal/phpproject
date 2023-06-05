<?php
$servername="localhost";
$username="root";
$password="";
$dbname="schoolproject";
$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
    die("connection failed");
}

$sql="select * from user";
$result=$conn->query($sql);
if($result->num_rows>0){
    while($row=$result->fetch_assoc()){
        echo "Id:{$row["id"]}-Name:{$row["username"]}-phone:{$row["phone"]}-email:{$row["email"]}-usertype:{$row["usertype"]}-password:{$row["password"]}\n";
    }
}else{
    echo "no reult found";
}
$conn->close();
?>