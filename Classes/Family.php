<?php
/**
*
*/
class Family
{
  public $partn1;
  public $partn2;
  public $_child;
  public $baby;
  public $fertilization;


  public function __construct($partn1, $partn2)
  {
    $this->partn1 = $partn1;
    $this->partn2 = $partn2;
    ($partn1->civil_status === 0 && $partn1->getAge() >= 18 && $partn2->getAge() >= 18) ? $partn1->civil_status = 1 : 2;
    ($partn2->civil_status === 0 && $partn1->getAge() >= 18 && $partn2->getAge() >= 18) ? $partn2->civil_status = 1 : 2;
    $this->partn1->partner_name = $this->partn2->first_name . ' '. $this->partn2->last_name;
    $this->partn2->partner_name = $this->partn1->first_name . ' '. $this->partn1->last_name;
    $this->_child = [];
  }
  public function makeBaby(Child_male $baby)
  {
    $baby->last_name = $this->partn1->last_name;
    $baby->parentB_name = $this->partn2->first_name;

    // $this->child_name = $child_name;
    // $this->fertilization = rand(1, 5);
    // $this->fertilization === 3 ? array_push($this->partn1->children, $baby) : false;
    array_push($this->partn1->children, $baby);
    array_push($this->partn2->children, $baby);

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
