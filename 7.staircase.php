<?
function test($n) 
{
	for($i=1; $i<=$n; $i++)
	{
		echo str_repeat(' ', $n-$i) . str_repeat('#', $i);
		echo '\n';
	}

}

test(6);
?>