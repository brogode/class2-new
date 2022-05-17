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

function calculator(string $main){
    $new = str_split($main);
    $rel = [];
    $j = 0;
    foreach($new as $key => $car){
        if ($car == '+' or $car == '-' or $car == '/' or $car == '*'){
            $rep = (str_split($main, $key));
            $main = substr($main, $j);
            $j = 1;
            array_push($rel, floatval($rep[0]),$car);
            
        }
        if($key == count($new)-1){
            array_push($rel, floatval($main));
            
        }
    $j += 1;
    }
    
     
    
    if(count($rel) == 3){
        switch ($rel[1]){
            case '+': return sum($rel[0],$rel[2]);
            case '-': return diff($rel[0],$rel[2]);
            case '/': return div($rel[0],$rel[2]);
            case '*': return mult($rel[0],$rel[2]);
                
        }
    }
    if(count($rel) == 5){
        switch ($rel[1]){
            case '+': 
                $ans = sum($rel[0],$rel[2]);
                break;
            case '-': 
                $ans = diff($rel[0],$rel[2]);
                break;
            case '/': 
                $ans = div($rel[0],$rel[2]);
                break;
            case '*': 
                $ans = mult($rel[0],$rel[2]);
                break;
        }
        
        switch ($rel[3]){
            case '+': return sum($ans,$rel[4]);
            case '-': return diff($ans,$rel[4]);
            case '/': return div($ans,$rel[4]);
            case '*': return mult($ans,$rel[4]);
        }    
    }
    
        
                
    

    
}

echo calculator('1+15758*3')."<br/>";
#echo calculator(1,'/',2)."<br/>";
#echo calculator(1,'*',2)."<br/>";
#echo calculator(1,'-',2)."<br/>";

