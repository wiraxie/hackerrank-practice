<?php
function test($arr) {
    
    $i = 0; 
    $n = count($arr);
    return abs(array_reduce($arr, 
        function  ($c, $str) use (&$i, $n ) 
        {
            $i++;
            return $c + $str[$i-1] - $str[$n-$i];
        }, 0));
    
}
?>