<?
function test($n) 
{
	$spasi = $n;
	$pagar = 0;
	
	for($i=1; $i<=$n; $i++)
	{
		echo str_repeat(" ", $spasi-$i) . str_repeat("#", $pagar+$i);
		echo "\n";
	}

}

test(6);
?>