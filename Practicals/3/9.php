<?php
// Creating an associative array
$marks = [
    'Math' => 85,
    'Science' => 90,
    'English' => 78,
    'History' => 88,
    'Art' => 92
];
// Displaying all keys and values
foreach ($marks as $subject => $mark) {
    echo "$subject: $mark\n";
}
// Sorting the array by keys
ksort($marks);
echo "Sorted by keys:\n";
foreach ($marks as $subject => $mark) {
    echo "$subject: $mark\n";
}
?>
