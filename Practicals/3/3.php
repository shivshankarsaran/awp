<?php
// Accepting input from user
$haystack = readline("Enter the main string: ");
$needle = readline("Enter the string to search for: ");
// Checking if $needle is in $haystack
if (strpos($haystack, $needle) !== false) {
    echo "The string '$needle' is found in '$haystack'.";
} else {
    echo "The string '$needle' is not found in '$haystack'.";
}
?>
