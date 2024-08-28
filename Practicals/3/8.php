<?php
// Creating an array of names
$names = ['Alice', 'Bob', 'Amanda', 'Charlie', 'Andrew'];
// Filtering names that start with 'A'
foreach ($names as $name) {
    if (strtoupper($name[0]) === 'A') {
        echo $name . "\n";
    }
}
?>
