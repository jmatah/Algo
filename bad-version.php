<?php
/* The isBadVersion API is defined in the parent class VersionControl.
      public function isBadVersion($version){} */

class VersionControl
{
    function isBadVersion($n)
    {
        global $badversion;
        return ($n >= $badversion? true: false);
    }
}

class Solution extends VersionControl {
    /**
     * @param Integer $n
     * @return Integer
     */
    function firstBadVersion($n) {
        if( $this->isBadVersion($n) == false )
            return 0;
        else if( $this->isBadVersion(1) != false )
            return 1;

        $left = 0;
        $right = $n;
        $lastBadVersion = 0;

        $ret = 0;
        while( $left <= $right ) {
            $mid = $left + ceil( ($right - $left)/ 2 );
            echo "\nLeft: ".$left."; Right: ".$right."; Mid: ".$mid."; LastBedVersion: ".$lastBadVersiona;
            $bad = $this->isBadVersion($mid);
            if( $bad == false ) {
                $left = $mid + 1;
                if( $lastBadVersion> 0 && $lastBadVersion - $mid == 1 )
                    break;
            }
            else {
                $right = $mid - 1;
                $lastBadVersion = $mid;
            }
            echo "\n2: Left: ".$left."; Right: ".$right."; Mid: ".$mid."; LastBedVersion: ".$lastBadVersiona;
        }
        return $lastBadVersion;
    }
}

global $badversion, $force;
$badversion = 20000;

$solution = new Solution();
echo sprintf( "\n%d is the first bad version.", $solution->firstBadVersion(20001) );