<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "schoolproject";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM bca WHERE id_no=1";
$result = $conn->query($sql);

echo "<table border=1px width=400 bgcolor=grey>";
if ($result->num_rows > 0) {
    echo "<tr>";
    echo "<th>Name</th>";
    echo "<th>ID</th>";
    echo "<th>Department</th>";
    echo"</tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['name'] . "</td>";
        echo "<td>" . $row['id_no'] . "</td>";
        echo "<td>" . $row['department'] . "</td>";
        echo "</tr>";
    }
}
echo "</table>";

$conn->close();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* td{
            text-align=center;
        } */
    </style>
</head>
<body>
    
</body>
</html>