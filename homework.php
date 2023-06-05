<!--wap to print the name of a week by taking value from 1 to 7 and deny if it doesnot lie in between 1-7 
using function in parameterized statement-->
<?php
chooseday(1);
function chooseday($a){
switch($a){
case 1:
        echo "Sunday";
        break;
case 2:
        echo "Monday";
        break;
case 3:
        echo "Tuesday";
        break;
case 4:
        echo "Wednesday";
        break;
case 5:
        echo "Thursday";
        break;
case 6:
        echo "Friday";
        break;
case 7: 
        echo "Saturday";
        break;
default:
        echo "Doesnot validated";
}
}
?>