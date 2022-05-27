<?php

class Solution{
    function getmap($str)
    {
        $str_arr = "abcdefghijklmnopqrstuvwxyz";
        $str_arr = str_split($str_arr);
        $str_arr = array_count_values($str_arr);

        $strr = str_split($str);
        foreach( $strr as $a ) {
            $str_arr[$a] += 1;
        }
         return $str_arr;   
    }
    function checkInclusion($s1, $s2)
    {
        if( strlen( $s1 ) > strlen( $s2 ) )
            return false;

        $len = strlen($s1);
        $str1 = $this->getmap($s1);
        $str2 = $this->getmap(substr($s2, 0, $len));
        $len2 = strlen($s2);

        for( $i = 0; $i <= (strlen($s2) - strlen($s1)); $i++ ){
            //echo "\nCompare: ".print_r($str1, true).';;'.print_r($str2, true);
            if( $str1 === $str2 )
                return true;


            $str2[$s2[$i]]--;

            $str2[$s2[$i+strlen($s1)]]++;
        }
        return false;
    }
}

$s1 = "ab";
$s2 = "eidbaooo";
$s1 = "adc";
$s2 = "dcda";
$s1 = "ab";
$s2 = "ab";
$s1 = "hello";
$s2 = "ooolleoooleh";

$sol = new Solution();
$ans = $sol->checkInclusion($s1, $s2 );
echo "\n\n";
var_dump($ans);
