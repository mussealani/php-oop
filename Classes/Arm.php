<?php

/**
* Arm class
*/
class Arm
{
  public $which_arm;
  public function __construct($which_arm, Hand $hand)
  {
    $this->which_arm = $which_arm;
    $this->hand = $hand;
    //$this->fingers = $fingers;
  }
  public function getWhichArm()
  {
    return $this->which_arm;
  }

  public function getHand()
  {
    return $this->hand;
  }

  // public function getFingers()
  // {
  //   return $this->fingers;
  // }

}
