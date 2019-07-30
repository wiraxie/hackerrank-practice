<?php

function test($s)
{
	$belakang = substr($s, -2); //AM or PM
	
	if($belakang == 'PM')
	{
		$jam = substr($s, 0, 2);
		if($jam == 12)
		{
			$sisanya = str_replace('PM', '', substr($s, -8));
			echo ($jam).$sisanya;
		}
		else
		{
			$sisanya = str_replace('PM', '', substr($s, -8));
			echo ($jam+12).$sisanya;
		}
	}
	elseif($belakang == 'AM')
	{
		$jam = substr($s, 0, 2);
		if($jam == 12)
		{
			$res = str_replace('12', '00', $s);
			$res = str_replace('AM', '', $res);
			echo $res;
		}
		else
		{
			$res = str_replace('AM', '', $s);
			echo $res;
		}
	}
	
}

$a = '12:45:54PM';
test($a);
?>