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
    return $this->name;
  }

  public function getAge()
  {
    return $this->age;
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


