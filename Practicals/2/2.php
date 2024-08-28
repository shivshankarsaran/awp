<!DOCTYPE html>
<html>
<head>
    <title>Largest Number Finder</title>
</head>
<body>
    <h1>Find the Largest Number</h1>
    <form method="post">
        <label for="num1">Number 1:</label>
        <input type="number" id="num1" name="num1" required><br>
        <label for="num2">Number 2:</label>
        <input type="number" id="num2" name="num2" required><br>
        <label for="num3">Number 3:</label>
        <input type="number" id="num3" name="num3" required><br>
        <input type="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $num3 = $_POST['num3'];
        $largest = max($num1, $num2, $num3);
        echo "<p>The largest number is: $largest</p>";
    }
    ?>
</body>
</html>
