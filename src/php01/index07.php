<?php

function outputNumber($a){
    echo "引数の値は".$a."です";
    return;
}


$a=2;
outputNumber(5);

function outputHello(){
        echo "Hello world";
}

outputHello();


function text($number1,$number2)
{
    $value=$number1+$number2;
    return $value;
}

$total=text(2,4);
echo $total;

$total2=text(1,4);
echo $total2;

function clear($score1,$score2,$score3){

    $sum=$score1+$score2+$score3;

    if ($sum>210) {
        echo "合計点は".$sum."なので合格です";
        return;
    }else {
        echo "合計点は".$sum."なので不合格です";
        return;
    }

}

clear(10,20,30);

function exam($score1, $score2, $score3)
{
  $total = $score1 + $score2 + $score3;
  if ($total > 210) {
    echo $total . "点なので合格です";
  } else {
    echo $total . "点なので不合格です";
  }
}
echo (exam(80, 60, 90));

function triangle($base,$height){
    $area=$base*$height/2;
    return $area;
}
function square($base,$height){
    $area=$base*$height;
    return $area;
}

function trapezoid($upper_base,$lower_base,$height){
    $area=($upper_base+$lower_base)*$height/2;
    return $area;
}

echo triangle(4,2)."\n";
echo square(2,2)."\n";
echo trapezoid(5,10,2);