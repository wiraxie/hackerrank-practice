<?php

function test($arr)
{
	$count = array_count_values($arr);
	$max = max($arr);
	echo $count[$max];
}

$a = [3, 2, 1, 3];
test($a);
?>