<?php
function test($arr) 
{
	$count = count($arr);
	
	$positive = 0;
	
	$zero = 0;
	
	$negative = 0;
	
	for($i=0; $i<$count; $i++)
	{
		if($arr[$i] > 0)
		{
			$positive++;
		}
		//$positive = $positive/6;
		
		if($arr[$i] == 0)
		{
			$zero++;
		}
		//$zero = $zero/6;
		
		if($arr[$i] < 0)
		{
			$negative++;
		}
		//$negative = $negative/6;
	}
	
	$positive = $positive/$count;
	$zero = $zero/$count;
	$negative = $negative/$count;

	$positive = number_format((float)$positive, 6, '.', '');
	
	$zero = number_format((float)$zero, 6, '.', '');
	
	$negative = number_format((float)$negative, 6, '.', '');
	
	$result = [$positive, $negative, $zero];
	foreach($result as $val)
	{
		echo $val;
		echo "\n";
	}
}

$a = [-4, 3, -9, 0, 4, 1];
$a
test($a);
?>