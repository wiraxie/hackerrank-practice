<?php

function test($ar) {

	for($i=0;$i<count($ar);$i++)
	{
		$res=$res+$ar[$i];
		return $res;
	}
}

?>