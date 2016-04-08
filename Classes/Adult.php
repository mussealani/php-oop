<?php
class Adult extends Human
{
  public $partner_name;
  protected $royal;
  public $children;
  public function __construct($name, $gender, $royal = false)
  {
    $this->name   = $name;
    $this->gender = $gender;
    $this->royal  = $royal;

    $this->civil_status = false;
    $this->age = new Class_Date;
    $this->current_date = new Class_Date();
    $this->children = [];

  }
  public function getAge()
  {
    return round($this->age->dateDiff($this->birthday, $this->current_date) / 365);
  }

  public function getCivilStatus()
  {
    return $this->civil_status === false ? 'Single' : 'Married';
  }

  public function getMarrid(Family $married)
  {
    return $this->civil_status !== 1 ? 'Single' : 'Married';
  }
  public function isRoyal() {
    return $this->royal === true ? 'Royal' : $this->royal = 'N/R';
  }
  public function getChildren()
  {
    //print_r($this->children);
    //return !empty($this->children) ? $this->children : 'No children yet!';
    if (!empty($this->children)) {
      $item = '';
      foreach($this->children as $child => $val) {
        $item .= (is_array($val) ? $child . $this->getChildren($val) : $val);
      }
      return $item ;
    }else{
      return 'No children yet!';
    }
  }
}
