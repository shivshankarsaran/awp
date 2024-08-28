<!DOCTYPE html>
<html>
<head>
    <title>Number Analysis</title>
</head>
<body>
    <h1>Number Analysis</h1>
    <form method="post">
        <label for="number">Enter a number:</label>
        <input type="number" id="number" name="number" required>
        <input type="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = $_POST['number'];

        // Sum of digits
        $sumOfDigits = array_sum(str_split($number));

        // Reverse of the number
        $reversedNumber = strrev($number);

        // Palindrome check
        if ($number == $reversedNumber) {
            $isPalindrome = 'Yes';
        } else {
            $isPalindrome = 'No';
        }

        echo "<p>Sum of digits: $sumOfDigits</p>";
        echo "<p>Reversed number: $reversedNumber</p>";
        echo "<p>Is palindrome: $isPalindrome</p>";
    }
    ?>
</body>
</html>
