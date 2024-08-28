<?php
// Accepting input from user
$input = readline("Enter a string: ");
// Checking if the string is in lowercase
if (ctype_lower($input)) {
    echo "The string consists of lowercase characters only.";
} else {
    echo "The string contains characters other than lowercase.";
}
?>
