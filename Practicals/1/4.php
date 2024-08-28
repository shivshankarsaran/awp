<?php
$year=1991;

if ($year%100==0 && $year%400==0){
    echo "$year is leap year";
}
if($year%100!=0 && $year%4==0){
    echo "$year is leap year";
}
else{
    echo "$year is not leap year";
}
?>