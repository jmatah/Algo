<?php

class bubbleSort{
    var $array;
    function __construct($arr)
    {
        $this->array = $arr;
    }

    function sort_this()
    {
        do {
            $swapped = false;
            foreach(range(0,count($this->array)-2) as $a ) {
                if( $this->array[$a] > $this->array[$a + 1]) {
                    list( $this->array[$a+1], $this->array[$a]) = array($this->array[$a], $this->array[$a+1]);
                    $swapped = true;
                }
            }
        } while( $swapped == true);

        return $this->array;
    }
}

$test_array = array(3, 0, 2, 5, -1, 4, 1);
echo "Original Array :\n";
echo implode(', ',$test_array );
echo "\nSorted Array\n:";
$sort = new bubbleSort($test_array);
$sorted = $sort->sort_this();
echo implode(', ',$sorted);