<?php
/**
*
*/
class Male extends Human
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
    $this->gender = "Gender: Male";
    return $this->gender;
  }
  // get royal
  public function isRoyal()
  {
    $this->royal == 1 ? 'Kaiser' : 'N/R';
    foreach ($this->children as $child) {
      $child->royal = $this->royal;
    }
    return $this->royal == true ? 'Kaiser' : 'N/R';
  }

  public function getChildren()
  {
    $resuls = '';
    $resuls .='<ul>';
    $resuls .= '<li>Children:</li>';
    $children = $this->children;
    foreach ($children as $key => $child) {
      $resuls .= '<li><ul><li>Name: ' . $child->getName() . '</li>';
      $resuls .= '<li>Birth of day: ' . $child->getBirthday() . '</li>';
      $resuls .= '<li>Royal: ' . $child->isRoyal() . '</li>';
      $resuls .= '<li>Partner Name: ' . $child->getPartnerName() . '</li>';
      $resuls .=  '<li>Civil Status: ' . $child->getCivilStatus() . '</li></ul></li>';
    }
    $resuls .= '</ul>';
    // echo "<pre>";
    // print_r($this);
      return $resuls;
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
  }
}
