<?php
// Sample sentence
$sentence = "the quick brown fox jumps over the lazy dog";
// Replacing the first occurrence of 'the' with 'That'
$new_sentence = preg_replace('/\bthe\b/', 'That', $sentence, 1);
// Printing the result
echo "Updated sentence: " . $new_sentence;
?>
