<?php

  // NEGATIVE ARRAY INDEX AND NAMED PARAMATERS

  $fill = array_fill(0, 5, 1);
  var_dump($fill);

  $fill_named = array_fill(value: 50, num: 100, start_index: 0);


  // documentation
  // https://wiki.php.net/rfc/named_params
  // https://www.php.net/array_fill