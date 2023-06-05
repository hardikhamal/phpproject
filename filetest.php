<?php
$file="hardisk123.txt";
if(file_exists($file))
{
    if(unlink($file)){
        echo "file unliked successfully";
    }else{
        echo "file is not unlinked successfully";
    }
}else{
    echo "file is not exist";
}


?>