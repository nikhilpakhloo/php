<?php

// $num = 10;
//         $str = '10';
//         if ($num !== $str) {
//             echo "The number and strings are not identical";
//         }

// if(5 > 10 xor 5 < 3 xor 6 < 7 xor 7 > 6 xor 8 > 7) {
//     echo "Only one of the expressions was true";
//   }

// $numbers = [4,5];
// $scores = [1,2,3, ...$numbers];

// print_r($scores);

$ar1 = ['1' => 1,'2' => 2];
$ar2 = ['3' => 3, '4' => 4];
$total = [...$ar2,...$ar1];
print_r($total);
?>