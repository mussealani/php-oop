<?php
/**
* Humman class
*/
class Human
{

  public $name;
  public $birthday;
  public $age;
  public $gender;
  public $civil_status;
  public $current_date;
  // MySQL date format is YYYY-MM-DD
  public $MySQLDate;


  public function getName()
  {
    return is_string($this->name) ? $this->name : ('Your name expects a string as "A-Z / a-z"');
  }

  public function getGender()
  {
    return $this->gender;
  }
  public function setBirthday($MySQLDate)
  {
    $this->birthday = new Class_Date;
    $this->MySQLDate = $MySQLDate;
    $this->birthday->setFromMySQL($MySQLDate);
  }
  public function getBirthday()
  {
    return $this->birthday;
  }
}


