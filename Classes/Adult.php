<?php
class Adult extends Human
{
  public function __construct($name, $age, $gender)
  {
    $this->name = $name;
    $this->age = $age;
    $this->gender = $gender;
  }
}
