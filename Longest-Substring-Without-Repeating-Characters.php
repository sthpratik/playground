<?php

function lengthOfLongestSubstring($s) {
    if (($s == " ") or strlen($s) == 1)
        $LongestSubstring = 1;
    else {
        $LongestSubstring = 0;
        $splitString = str_split($s);
        $repeatText = $splitString[0];
        for ($i = 1; $i < strlen($s); $i++) {

            if (strpos($repeatText, $splitString[$i]) === false) {
                $repeatText.= $splitString[$i];
            } else {
                $postionofChar = strpos($repeatText, $splitString[$i]);
                $repeatText = substr($repeatText, $postionofChar + 1, $i - $postionofChar);
                $repeatText.= $splitString[$i];
            }

            if (strlen($repeatText) > $LongestSubstring)
                $LongestSubstring = strlen($repeatText);
        }
    }
    return $LongestSubstring;
}


?>
