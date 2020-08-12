<?php
  
  // class Number {
  //   /**
  //    * @var int|float $number
  //    */
  //   private $number;

  //   /**
  //    * @param int|float $number
  //    */
  //   public function setNumber($number) {
  //       $this->number = $number;
  //   }

  //   /**
  //    * @return int|float
  //    */
  //   public function getNumber() {
  //       return $this->number;
  //   }
  // }

  // $number = new Number();
  // $number->setNumber('Thiago');
  // echo "meu numero retornado é {$number->getNumber()} \n";


  class Number {
    private int|float $number;

    public function setNumber(int|float $number): void {
        $this->number = $number;
    }

    public function getNumber(): int|float {
        return $this->number;
    }
  }

  $number = new Number();
  $number->setNumber('minha string');
  echo "meu numero retornado é {$number->getNumber()} \n";


  // doc_rfc
  // https://wiki.php.net/rfc/union_types_v2