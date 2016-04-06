<?php

/**
*
*/
class Finger
{

  public $finger;

  function __construct($finger)
  {
    $this->finger = $finger;
  }

  public function getFinger()
  {
    return $this->finger;
  }
}
