<!DOCTYPE html>
<html>
<head>
    <title>HCF and LCM Calculator</title>
</head>
<body>
    <h1>HCF and LCM Calculator</h1>
    <form method="post">
        <label for="num1">Number 1:</label>
        <input type="number" id="num1" name="num1" required><br>
        <label for="num2">Number 2:</label>
        <input type="number" id="num2" name="num2" required><br>
        <input type="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];

        // Calculate HCF
        function hcf($a, $b) {
            while ($b != 0) {
                $temp = $b;
                $b = $a % $b;
                $a = $temp;
            }
            return $a;
        }

        $hcf = hcf($num1, $num2);
        // Calculate LCM
        $lcm = ($num1 * $num2) / $hcf;

        echo "<p>HCF of $num1 and $num2 is $hcf.</p>";
        echo "<p>LCM of $num1 and $num2 is $lcm.</p>";
    }
    ?>
</body>
</html>
