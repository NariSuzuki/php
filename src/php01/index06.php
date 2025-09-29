<?php

// for($i=1; $i<=5; $i++){
//     echo $i*2;
// }

echo "<br/>";

// $i=0;
// while($i<10){
//     if($i==5){
//         $i++;
//         continue;
//     }
//     echo $i;
//     $i++;
// }

echo "<br/>";

$count=0;

while($count<=100){
    if($count==20){
        break;
    }elseif($count%3===0){
        $count++;
        continue;
    }
    echo $count."<br/>";
    $count++;
}

$i=0;

do{
    echo $i."<br/>";
    $i++;
}while($i<0);

$num=0;
do{
    echo "num=". $num."<br/>";
    $num++;
}while($num<=2);



$Fizz = "Fizz";
$Buzz = "Buzz";
$FizzBuzz = "FizzBuzz";

for($num=1; $num<=50; $num++){
    if($num%15==0){
        echo $FizzBuzz;
    }elseif ($num%3==0) {
        echo $Fizz;
    }elseif ($num%5==0) {
        echo $Buzz;
    }else{
        echo $num;
    }
}

for($i=1; $i<=5; $i++){
    for ($j=1; $j<=5 ; $j++)
         {
            echo "●";
    }
    echo "<br/>";
}

// $Fizz = "Fizz";
// $Buzz = "Buzz";
// $FizzBuzz = "FizzBuzz";

// for ($i = 1; $i <= 50; $i++) {
//   if ($i % 15 == 0) {
//     echo $FizzBuzz;
//   } else if ($i % 3 == 0) {
//     echo $Fizz;
//   } else if ($i % 5 == 0) {
//     echo $Buzz;
//   } else {
//     echo $i;
//   }
// }