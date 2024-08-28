<?php
    $number = 24; // Hardcoded data
    $factors = [];

    for ($i = 1; $i <= $number; $i++) {
        if ($number % $i == 0) {
            $factors[] = $i;
        }
    }

    echo "<p>Number: $number</p>";
    echo "<p>Factors: " . implode(', ', $factors) . "</p>";
    ?>