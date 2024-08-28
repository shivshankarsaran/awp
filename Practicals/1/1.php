<?php
$marks = 85; 
echo "your marks is $marks <br>";
if ($marks >= 90) {
    echo "Grade: A";
} elseif ($marks >= 80) {
    echo "Grade: B";
} elseif ($marks >= 70) {
    echo "Grade: C";
} elseif ($marks >= 60) {
    echo "Grade: D";
} elseif ($marks >= 50) {
    echo "Grade: E";
} else {
    echo "Grade: F";
}
?>
