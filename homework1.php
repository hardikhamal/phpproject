<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>"method="POST" >
        <label>Num1:</label>
        <input type="number" name="num1"><br><br>
        <label>Num2:</label>
        <input type="number" name="num2"><br><br>
        <input type="submit" name="submit" value="submit">
</form>
        <?php
        if(isset($_POST['submit'])){
        if($_SERVER["REQUEST_METHOD"]=="POST"){
        $a=$_POST['num1'];
        $b=$_POST['num2'];
        $sum1=$a+$b;
        echo $sum1;
    }}      
?>
</body>
</html>