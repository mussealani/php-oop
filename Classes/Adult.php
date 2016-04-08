<?php
class Adult extends Human
{
  public function __construct($name, $gender)
  {
    $this->name = $name;
    $this->gender = $gender;

    $this->civil_status = false;
    $this->age = new Class_Date;
    $this->current_date = new Class_Date();

  }
  public function getAge()
  {
    return round($this->age->dateDiff($this->birthday, $this->current_date) / 365);
  }

  public function getCivilStatus()
  {
    return $this->civil_status === false ? 'Single' : 'Married';
  }

  public function getMarrid(GetMarrid $married)
  {
    return $this->civil_status !== 1 ? 'Single' : 'Married';
  }
}
