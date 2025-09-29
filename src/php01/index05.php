<?php
$a=7;
$people="Saburo";

if($a===5){
    echo"\$aは5です";
}elseif($a===7){
    echo"\$aは7です";
}else{
    echo"\$aは5,7以外です";
}

echo "<br/>";

switch($people){
    case "Ichiro":
    echo "一郎です";
    break;
    case "Jiro":
    echo "次郎です";
    break;
    case "Saburo":
    echo "三郎です";
    break;
}

echo "<br/>"

$b=($a===7)?"TRUE":"FALSE";
echo $b;