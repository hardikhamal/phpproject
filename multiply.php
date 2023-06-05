<?php
$num=5;
$i;
$m;
mul($num);
function mul($num)
{
    for($i=1;$i<=10;$i++)
    {
        $m=$num*$i;
        echo $num."*".$i."=".$m;
        echo "<br>";
    }
}
?>