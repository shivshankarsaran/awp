<?php
$num=10;
$fib=array(1,1);
echo "fibonacci series of $num terms <br>";
echo "1 <br> 1 <br>";
for($i=2;$i<$num;$i++){
    $f=$fib[$i-1];
    $s=$fib[$i-2];
    $t=$f+$s;
    $fib[$i]=$t;
    echo "$fib[$i] <br>";
}

?>