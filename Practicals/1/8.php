<?php
    $a=6;
    $b=12;
    
    // hcf
    $hcf=1;
    for($i=1;$i<=min($a,$b);$i++){
        $hcf=$i;
    }
    echo "hcf of 6 and 12 is $hcf <br>";

$lcm=($a*$b)/$hcf;
    echo "lcm of 6 and 12 is $lcm";

    ?>