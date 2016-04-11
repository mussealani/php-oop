<?php
/**
* Humman class
*/
class Human
{
  // properties
  public $first_name;
  public $last_name;
  public $birthday;
  public $gender;
  public $age;
  public $get_age;
  public $civil_status;
  public $current_date;
  public $partner_name;

  // MySQL date format is YYYY-MM-DD
  public $MySQLDate;

  public $children;

  // class constructor
  public function __construct($first_name, $last_name)
  {
    $this->first_name = $first_name;
    $this->last_name = $last_name;

    $this->get_age = new Class_Date;
    $this->current_date = new Class_Date();
    $this->civil_status = 0;
    $this->children = [];

  }
  // get full name
  public function getName()
  {
    return is_string($this->first_name) && is_string($this->last_name) ? 'Full Name: ' . $this->first_name . ' ' . $this->last_name : ('Your name expects a string as "A-Z / a-z"');
  }

  // set birthday
  public function setBirthday($MySQLDate)
  {
    $this->birthday = new Class_Date;
    $this->MySQLDate = $MySQLDate;
    $this->birthday->setFromMySQL($MySQLDate);
  }
  // get Birthday
  public function getBirthday()
  {
    return 'Birth of Date: ' . $this->birthday;
  }

  // get age
  public function getAge()
  {
    $this->age =  floor($this->get_age->dateDiff($this->birthday, $this->current_date) / 365);
    return $this->age;
  }
  // get civil status
  public function getCivilStatus()
  {
    // check if under age
    if ($this->getAge() < 18) {
      $this->civil_status = 2;
      return $this->civil_status = 'Child';
    }else if ($this->civil_status == 1) {
      $this->civil_status = 1;
      return $this->civil_status = 'Married';
    }else{
      $this->civil_status = 0;
      return $this->civil_status = 'Single';
    }
    //return 'Civil Status: ' . ($this->civil_status === false ||) ? 'Single' : 'Married';
  }
  // get married
  public function getMarrid(Family $married)
  {
    return $this->civil_status;
  }
  // get partner name
  public function getPartnerName()
  {
    return $this->partner_name;
  }

  // public function getChildren()
  // {
  //   //print_r($this->children);
  //   //return !empty($this->children) ? $this->children : 'No children yet!';
  //   if (!empty($this->children)) {
  //     $item = '';
  //     foreach($this->children as $child => $val) {
  //       $item .= (is_array($val) ? $child . $this->getChildren($val) : $val);
  //     }
  //     return $item ;
  //   }else{
  //     return 'No children yet!';
  //   }
  // }
}


