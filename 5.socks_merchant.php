<?php

function test($n, $ar) {
    $arnew = array();
    $cnt=0;
    foreach($ar as $val)
	{
        if (isset($arnew[$val]))
		{
			echo 'true<br>';
            $cnt++;
            unset($arnew[$val]);
        }
        else
		{
			echo 'false<br>';
            $arnew[$val]=1;
        }
    }
    echo $cnt;die();
}

$a = 9;
$b = [10, 20, 20, 10, 10, 30, 50, 10, 20];

test($a, $b);

?>