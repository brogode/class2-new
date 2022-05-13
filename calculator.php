<?php
function sum(float ...$num1): float{
    foreach($num1 as $key => $num){
        if($key > 0){
            $st = $ans + $num;
            $ans = $st;
        }
        else{
            $ans = $num;
        }
    }
    return $ans;
}
function diff(float ...$num1): float{
    foreach($num1 as $key => $num){
        if($key > 0){
            $st = $ans - $num;
            $ans = $st;
        }
        else{
            $ans = $num;
        }
    }
    return $ans;
}
function div(float ...$num1): float{
    foreach($num1 as $key => $num){
        if($key > 0){
            $st = $ans / $num;
            $ans = $st;
        }
        else{
            $ans = $num;
        }
    }
    return $ans;
}
function mult(float ...$num1): float{
    foreach($num1 as $key => $num){
        if($key > 0){
            $st = $ans * $num;
            $ans = $st;
        }
        else{
            $ans = $num;
        }
    }
    return $ans;
}
echo sum(10,2)."<br/>";
echo diff(10,2)."<br/>";
echo div(10,2)."<br/>";
echo mult(10,2)."<br/>";

function calculator(float $num1,string $opp,float $num2,): float{
    if (!($opp == '+' or $opp == '-' or $opp == '/' or $opp == '*')){
        return 0;
    }
    switch ($opp){
        case '+': return sum($num1,$num2);
        case '-': return diff($num1,$num2);
        case '/': return div($num1,$num2);
        case '*': return mult($num1,$num2);
            
    }
}
echo calculator(1,'+',2)."<br/>";
echo calculator(1,'/',2)."<br/>";
echo calculator(1,'*',2)."<br/>";
echo calculator(1,'-',2)."<br/>";

