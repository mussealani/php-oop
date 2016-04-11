<?php
/**
*
*/
class Child_male extends Male
{
  public $last_name;
  public $parentB_name;

  function __construct($first_name = "First Name", $royal = false)
  {
    parent::__construct($first_name);
    $this->birthday = new Class_Date();
    $this->royal = $royal;
  }
  // get child birthday
  public function getBirthday()
  {
    return 'Birth of date: ' . $this->birthday;
  }
  public function getName()
  {
    return $this->first_name;
  }
  public function getChildren()
  {
    if (count($this->children) < 0) {
      return false;
    }
  }
}
