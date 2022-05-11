<?php
function hello(string $text): void {
    echo $text;
}
hello('parameter');

function repeatcontent(int $count = 1): void{
    if($count == 0){
        return ;
    }
    hello('parameter'.$count);
    repeatcontent(--$count);
}
repeatcontent(5);