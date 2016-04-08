<?php
/**
*
*/
class GetMarrid
{
  public $partn1;
  public $partn2;


  function __construct($partn1, $partn2)
  {
    $this->partn1 = $partn1;
    $this->partn2 = $partn2;
    ($partn1->civil_status !== 1 && $partn1->getAge() >= 18) ? $partn1->civil_status = 1 : false;
    ($partn2->civil_status !== 1 && $partn2->getAge() >= 18) ? $partn2->civil_status = 1 : false;

  }
}
