<?php

function test($arr) 
{
	$sum = array_sum($arr);
	
	$last = max($arr);
	
	$first = min($arr);
	
	$res1 = $sum - $last;
	
	$res2 = $sum - $first;
	
	echo $res1;
	echo " ";
	echo $res2;
}

$a = [7, 69, 2, 221, 8974];
test($a);

?>
