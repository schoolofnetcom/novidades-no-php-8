<?php

// BEFORE/ANTES
// class Point {
//     public float $x;
//     public float $y;
//     public float $z;
 
//     public function __construct(
//         float $x = 0.0,
//         float $y = 0.0,
//         float $z = 0.0,
//     ) {
//         $this->x = $x;
//         $this->y = $y;
//         $this->z = $z;
//     }
// }

// AFTER/DEPOIS
class Point {
  public function __construct(
      public float $x = 0.0,
      public float $y = 0.0,
      private float $z = 0.0,
  ) {}
}

$mypoint = new Point(1, 2, 3);

var_dump($mypoint);

// doc_rfc
// https://wiki.php.net/rfc/constructor_promotion