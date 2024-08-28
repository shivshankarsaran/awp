<!DOCTYPE html>
<html>
<head>
    <title>Leap Year Checker</title>
</head>
<body>
    <h1>Leap Year Checker</h1>
    <form method="post">
        <label for="year">Enter a year:</label>
        <input type="number" id="year" name="year" required>
        <input type="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $year = $_POST['year'];
        if (($year % 4 == 0 && $year % 100 != 0) || $year % 400 == 0) {
            echo "<p>$year is a leap year.</p>";
        } else {
            echo "<p>$year is not a leap year.</p>";
        }
    }
    ?>
</body>
</html>
