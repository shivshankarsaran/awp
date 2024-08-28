<?php
$num=7;
$root=sqrt($num);
$val=0;
for($i=2;$i<=$root;$i++){
    if($num%$i==0){
        // echo " $num is composite $i <br>";
       $val=1;
       
        break;
       
    }

}
if($val==1){
    echo "$num is composite";
}else{
    echo "$num is prime";
}
?>