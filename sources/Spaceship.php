<?php

function spaceship($data, $base)
{
    return $data <=> $base;
}

function sign(int $num): int
{
    return $num <=> 0;
}

function wrapText(string $text, int $len): string
{
    $realLen = strlen($text);

    switch($len <=> $realLen){
        case -1:
            return substr($text, 0, $len-3) . '...';
        case 0:
            return $text;
        case 1:
            return $text . str_repeat(' ', $len-$realLen);
    }
}

$items = [
    [ 5, 5 ],
    [ 1, 0 ],
    [ 0, 1 ],
];

print "\nspaceship demo operator\n";

foreach($items as $item){
    print sprintf("%d <=> %d result is %d\n", $item[0], $item[1], spaceship($item[0], $item[1]));
}


$items = [
    'This is a very little example',
    'This is a short message',
    'When I have time I can write more and more',
];

print "\nwrap text with spaceship operator\n";
foreach($items as $item){
    print sprintf("[%s]\n", wrapText($item, 29));
}

print "\nuse of spaceship to figure out the math sign\n";

for($i=0;$i<5;$i++){
    $value = rand(-5,5);
    print sprintf("The sign of %d is %d\n", $value, sign($value));
}