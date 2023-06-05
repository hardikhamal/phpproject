<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="main">
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
        Name:
        <input type="text" name="name">
        <br><br>
        Email:
        <input type="email" name="email">
        Address:
        <input type="text" name="address">
        <br><br>
        Bio:
        <textarea name="bio" cols="20" rows="5"></textarea>
        <br><br>
        <input type="submit" name="submit">
    </form>
    <?php
        if($_SERVER['REQUEST_METHOD']=='POST'){
            $uname=$_POST['name'];
            if(!preg_match("/^[A-Za-z]\d*$/",$uname)){
                echo " name is not validated";
            }else{
                echo "The name is ".$uname;
            }
        }

?>
    </div>
</body>
</html>