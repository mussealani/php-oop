<?php
/**
*
*/
class Female extends Human
{
  // public $partner_name;

  function __construct($first_name = "First Name", $last_name = "Last Name", $royal = false)
  {
    parent::__construct($first_name, $last_name);
    $this->royal = $royal;
  }
  // get gender
  public function getGender()
  {
    $this->gender = "Gender: Female";
    return $this->gender;
  }
  // get royal
  public function isRoyal()
  {
    $this->royal = $this->royal === true ? $this->royal = 'Empress' : $this->royal = 'N/R';
    return $this->royal;
  }

  public function getChildren()
  {
    if (count($this->children) < 0) {
      return false;
    }
  }
}
