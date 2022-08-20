<?php
function isPalindrome($str)
{
    $strLen = strlen($str) - 1;
    $revStr = '';
    for ($i = $strLen; $i >= 0; $i--) {
        $revStr .= $str[$i];
    }
    if ($revStr == $str)
        return 'Palindrome';
    else
        return "Not palindrome";
}


