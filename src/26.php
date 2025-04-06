<?php
    function isPalindrome($str) {
        $str = str_replace(' ', '', $str);
        $reversedStr = strrev($str);
        return $str == $reversedStr;
    }

    echo isPalindrome("A man, a plan, a canal: Panama");
?>
