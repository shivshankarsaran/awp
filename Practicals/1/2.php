<?php
$a=4;
$b=75;
$c=7;

$item=array($a,$b,$c);

    if($item[0]>$item[1]){
        if($item[0]>$item[2]){
            echo "$item[0] is largest";
        }
        else{
            echo "$item[2] is largest";
        }}

    else{
        if($item[1]>$item[2]){
            echo "$item[1] is largest";
        }
        else{
            echo "$item[2] is largest";
        }
    }
    

?>