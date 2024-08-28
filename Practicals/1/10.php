<?php
// Function to find the sum of digits of a number
function sumOfDigits($number) {
    $sum = 0;
    while ($number > 0) {
        $sum += $number % 10;
        $number = floor($number / 10);
    }
    return $sum;
}

// Function to reverse a number
function reverseNumber($number) {
    $reversed = 0;
    while ($number > 0) {
        $reversed = $reversed * 10 + $number % 10;
        $number = floor($number / 10);
    }
    return $reversed;
}

// Function to check if a number is a palindrome
function isPalindrome($number) {
    return $number == reverseNumber($number);
}

// Main program
$number = 12321; // Replace this with the number you want to check
echo "Sum of digits: " . sumOfDigits($number) . "\n";
echo "Reversed number: " . reverseNumber($number) . "\n";
echo "Is palindrome? " . (isPalindrome($number) ? "Yes" : "No") . "\n";
?>
