<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $marks = $_POST['marks'];
    if ($marks >= 90) {
        $grade = 'A';
    } elseif ($marks >= 80) {
        $grade = 'B';
    } elseif ($marks >= 70) {
        $grade = 'C';
    } elseif ($marks >= 60) {
        $grade = 'D';
    } elseif ($marks >= 50) {
        $grade = 'E';
    } else {
        $grade = 'F';
    }
    echo "<p>Grade: $grade</p>";
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Grade Calculator</title>
</head>
<body>
    <h1>Grade Calculator</h1>
    <form method="post">
        <label for="marks">Enter marks (0-100):</label>
        <input type="number" id="marks" name="marks" min="0" max="100" required>
        <input type="submit" value="Submit">
    </form>
</body>
</html>