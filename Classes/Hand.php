<?php


/**
*
*/
class Hand
{
  public $fingers_arr = [];
  public $which_hand;
  public $thumb_finger;
  public $index_finger;
  public $middle_finger;
  public $ring_finger;

  function __construct($which_hand, Finger $thumb_finger, Finger $index_finger, Finger $middle_finger, Finger $ring_finger, Finger $pinky)
  {
    $this->which_hand     = $which_hand;
    $this->thumb_finger   = $thumb_finger;
    $this->index_finger   = $index_finger;
    $this->middle_finger  = $middle_finger;
    $this->ring_finger    = $ring_finger;
    $this->middle_finger  = $middle_finger;
    $this->pinky          = $pinky;
    array_push($this->fingers_arr, $thumb_finger->getFinger(), $index_finger->getFinger(), $middle_finger->getFinger(), $ring_finger->getFinger(), $pinky->getFinger());
  }

  public function getFingers()
  {
    return $this->fingers_arr;
  }

  public function getWhichHand()
  {
    return $this->which_hand;
  }

}
