<?php
// Sample string
$string = "hello ## this ## is ## php ## programming";
// Exploding the string into an array
$array = explode(' ## ', $string);
// Printing each element
foreach ($array as $index => $element) {
    echo "Array[$index]=$element\n";
}
?>
