<?php

// $number = 1;

// PHP 7 switch
// switch ($number) {
//   case 0:
//       $result = 'igual a zero';
//       break;

//   case 1:
//       $result = 'igual a um';
//       break;

//   case 2:
//       $result = 'igual a dois';
//       break;

//   default:
//       'nenhum retorno';
//       break;
// }

// PHP 8 match expression
$result = match ($number) {
  0 => 'igual a zero',
  1 => 'igual a um',
  2 => 'igual a dois',
  default => 'nenhum retorno',
};

var_dump($result);


// use (==)
// switch ('0') {
//   case 0:
//     $result = "o que o computador entendeu!\n";
//     break;
//   case '0':
//     $result = "O que eu espero que seja\n";
//     break;
// }

// use (===) strict comparison
// $result = match ('0') {
//   0 => "o que o computador entendeu!\n",
//   '0' => "O que eu espero que seja\n",
// };

// echo $result;

// Documentation
// https://laravel-news.com/match-expression-php-8