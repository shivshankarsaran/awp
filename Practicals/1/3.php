<?php
    $number = 7; // Hardcoded data

    echo "<table>";
    echo "<tr><th>Multiplier</th><th>Result</th></tr>";
    for ($i = 1; $i <= 10; $i++) {
        echo "<tr><td>$number x $i</td><td>" . ($number * $i) . "</td></tr>";
    }
    echo "</table>";
    ?>