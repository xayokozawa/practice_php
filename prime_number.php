<?php



function primeNumberJudgment(int $number = 0)
{

    if($number <= 1 ) return false;
    if($number === 2) return true;
    
    if($number % 2 == 0 ) return false;

    for($i = 3; $i <= $number; $i += 2) {
        if($number % $i == 0 && $number != $i ) return false;  
    }

    return true;   
}