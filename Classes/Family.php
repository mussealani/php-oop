<?php
/**
*
*/
class Family
{
  public $partn1;
  public $partn2;
  protected $_child;
  public $child_name;
  public $fertilization;


  public function __construct($partn1, $partn2)
  {
    $this->partn1 = $partn1;
    $this->partn2 = $partn2;
    ($partn1->civil_status !== 1 && $partn1->getAge() && $partn2->getAge() >= 18) ? $partn1->civil_status = 1 : false;
    ($partn2->civil_status !== 1 && $partn1->getAge() && $partn2->getAge() >= 18) ? $partn2->civil_status = 1 : false;
    $this->partn1->partner_name = $this->partn2->name;
    $this->partn2->partner_name = $this->partn1->name;
    $this->_child = [];
  }
  public function makeBaby($child_name)
  {
    $this->child_name = $child_name;
    $this->fertilization = rand(1, 5);
    $this->fertilization === 3 ? $this->registerBaby() : false;
  }
  public function adoptBaby($child_name)
  {
    $this->child_name = $child_name;
    $this->registerBaby();
  }
  protected function registerBaby()
  {
    array_push($this->partn1->children, $this->child_name);
    array_push($this->partn2->children, $this->child_name);
  }
}
