<?php
// Accepting input from user
$string = readline("Enter a string: ");
// Removing non-alphanumeric characters and converting to lowercase
$cleaned_string = strtolower(preg_replace("/[^A-Za-z0-9]/", '', $string));
// Checking if the cleaned string is a palindrome
if ($cleaned_string === strrev($cleaned_string)) {
    echo "The string is a palindrome.";
} else {
    echo "The string is not a palindrome.";
}
?>
