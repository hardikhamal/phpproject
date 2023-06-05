<?php
class interestcalculator{
var $rate;
var $duration;
var $capital;
function calculateInterest(){
    return (($this->rate*$this->duration*$this->capital)/100);
}
}
$calculator=new interestcalculator();
$calculator->rate=3;
$calculator->duration=2;
$calculator->capital=300;
echo $calculator->calculateInterest();
?>