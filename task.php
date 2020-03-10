<?php

//1
$str = "123456789";

$arr = str_split($str);
for($i=0; $i<count($arr); $i++)
{
    $arr[$i] = $arr[$i] . " ";
    print_r($arr[$i]);
}

echo "\n";

//2

$number=2;
$step = 4;
$argum = 1;

for($i=0; $i<$step; $i++)
{
    $argum*=$number;
}

echo $argum . "\n";



//3

$numbers=787;
$sum = 0;

if($numbers>9 && $numbers <100)
{
    $first = $numbers%10;
    $second = (int)($numbers/10);
    $sum = $first+$second;
}
if($numbers>99 && $numbers <1000)
{
    $first = $numbers%10;
    $second = (int)(($numbers%100)/10);
    $third = (int)($numbers/100);
    $sum = $first+ $second+$third;
}

if($numbers>999 && $numbers <10000)
{
    $first = $numbers%10;
    $second = (int)(($numbers%100)/10);
    $third = (int)(($numbers%1000)/100);
    $forth = (int)($numbers/1000);
    $sum = $first+ $second+$third +$forth;
}

if($numbers>9999 && $numbers <100000)
{
    $first = $numbers%10;
    $second = (int)(($numbers%100)/10);
    $third = (int)(($numbers%1000)/100);
    $forth = (int)(($numbers%10000)/1000);
    $fifth = (int)($numbers/10000);
    $sum = $first+ $second+$third +$forth+$fifth;
}

echo "Число " . $numbers . "\n";
echo $sum;

