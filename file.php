<?php
$file="hello.txt";
if(file_exists($file)){
    if(unlink($file)){
        echo "file removed successfully";
    }else{
        echo "file cannot be removed";
    }
}else{
    echo "File doesnot exist";
}
?>