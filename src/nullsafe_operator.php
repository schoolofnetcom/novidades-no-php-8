<?php

class Address {
  public $country;

  public function __construct($address)
  {
    $this->country = $address;  
  }
}

class User {
  private $address;

  public function __construct(Address $address)
  {
    $this->address = $address;
  }

  public function getAddress() {
    return $this->address;
  }
}

class Session {
  public $user;

  public function __construct(User $user)
  {
      $this->user = $user;
  }
}

$address = new Address('Brazil');
$user = new User($address);
$session = new Session($user);

$country =  null;
 
// if ($session !== null) {
//   $user = $session->user;

//   if ($user !== null) {
//       $address = $user->getAddress();

//       if ($address !== null) {
//           $country = $address->country;
//       }
//   }
// }

// ?->
$country = $session?->user?->getAddress()?->country;

var_dump($country);
