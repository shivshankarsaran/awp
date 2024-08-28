<?php
$num=10;
if ($num==0){
    echo "factorial of $num is 1";
}
else{
    $fac=1;
    for($i=1;$i<=$num;$i++){
        $fac=$fac*$i;
    }
}
echo "factorial of $num is $fac";
?>