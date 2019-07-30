<?php

function test($ar) 
{
    $score = array(); 
    $aTotal = 0; 
    $bTotal = 0; 
    for($i=0; $i<count($a); $i++)
    { 
        if($a[$i] > $b[$i])
        { 
            $aTotal=$aTotal+1; 
            //$aTotal = array($aTotal);
        }
        else if ($a[$i]<$b[$i])
        { 
            $bTotal=$bTotal+1; 
            //$bTotal = array($bTotal);
        } 
    } 

    $score [0] = $aTotal;
    $score [1] = $bTotal;
    
    print_r($score);
    return $score;
}

?>