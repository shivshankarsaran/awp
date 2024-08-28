<!DOCTYPE html>
<html>
<head>
    <title>Fibonacci Series</title>
</head>
<body>
    <h1>Fibonacci Series</h1>
    <form method="post">
        <label for="terms">Enter number of terms:</label>
        <input type="number" id="terms" name="terms" required>
        <input type="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $terms = $_POST['terms'];
        $a = 0;
        $b = 1;
        echo "<p>Fibonacci Series:</p><ul>";
        for ($i = 0; $i < $terms; $i++) {
            echo "<li>$a</li>";
            $next = $a + $b;
            $a = $b;
            $b = $next;
        }
        echo "</ul>";
    }
    ?>
</body>
</html>
