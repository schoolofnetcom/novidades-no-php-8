<?php

class Test {
  public function __construct(private $x){}

  public function createFromWhatever($whatever): static {
      return new static($whatever);
  }
}

$test1 = new Test(3);
var_dump($test1);

$test2 = $test1->createFromWhatever(2);
var_dump($test2);


// doc_rfc
// https://wiki.php.net/rfc/static_return_type