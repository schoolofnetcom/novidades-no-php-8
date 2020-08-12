<?php

  function myMixedType(mixed $param): mixed {
    return $param;
  }

  var_dump(gettype(myMixedType('thiago valls')));