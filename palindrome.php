<?php
function isPalindrome($number) {
    $original = strval($number);
    $reversed = strrev($original);

    if ($original === $reversed) {
        return true;
    } else {
        return false;
    }
}

$number = 141; 

if (isPalindrome($number)) {
    echo "$number is a palindromic number.";
} else {
    echo "$number is not a palindromic number.";
}
?>