<!-- <?php
if(isset($_POST['submit'])){
    $username=$_POST['username'];
    $password=$_POST['pass'];
    if(strlen($username)<=8)
    {
        echo "username should be more than 8 characters";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form validation</title>
</head>
<body>
    <form action="" method="POST">
        username:
        <input type="text" name="username"><br><br>
        password:
        <input type="password" name="pass"><br><br>
        <input type="submit" value="submit" name="submit">
    </form>
</body>
</html> -->
<?php
$string="PHP is the web scripting php language of choice.825";
$exp=preg_match_all("/[^a-d0-5]/i",$string,$array);
if($exp)
{
    echo "A match was found";
}
else{
     echo "A match was not found";
    }
    echo "<pre>";
print_r($array);
?>