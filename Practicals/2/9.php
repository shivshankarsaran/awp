<!DOCTYPE html>
<html>
<head>
    <title>Factors Finder</title>
</head>
<body>
    <h1>Find Factors of a Number</h1>
    <form method="post">
        <label for="number">Enter a number:</label>
        <input type="number" id="number" name="number" required>
        <input type="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = $_POST['number'];
        echo "<p>Factors of $number are:</p><ul>";
        for ($i = 1; $i <= $number; $i++) {
            if ($number % $i == 0) {
                echo "<li>$i</li>";
            }
        }
        echo "</ul>";
    }
    ?>
</body>
</html>
