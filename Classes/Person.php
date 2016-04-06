<?php

ini_set('display_startup_errors',1);
ini_set('display_errors',1);
error_reporting(-1);



/**
* Person class
*/
class Person
{

 public $name;
 public $gender;
 public $age;
 public $arms = [];
 public $hands;
 public $fingers;

  function __construct($name, $gender, $age)
  {
    $this->name   = $name;
    $this->gender = $gender;
    $this->age    = $age;
  }

  public function getName()
  {
    return $this->name;
  }

  public function getGender()
  {
    return $this->gender;
  }

  public function getAge()
  {
    return $this->age;
  }

  public function setArms(Arm $left_arm, Arm $right_arm) {
    array_push($this->arms, $left_arm->getWhichArm(), $right_arm->getWhichArm());
  }
  public function getArms() {
    return $this->arms;
  }
}




























// /**
// *
// */
// class Arms
// {
//   public $left_arm;
//   public $right_arm;

//   function __construct(Arm $left_arm, Arm $right_arm)
//   {

//     $this->left_arm = $left_arm;
//     $this->right_arm = $right_arm;
//     return $arms = array($this->left_arm , $this->right_arm );
//   }
// }




// $fingers_arr = [];

// $fingers_arr['thumb_finger'] = new Finger('Thumb Finger');
// $fingers_arr['index_finger'] = new Finger('Index Finger');
// $fingers_arr['middle_finger'] = new Finger('Middle Finger');
// $fingers_arr['ring_finger'] = new Finger('Ring Finger');
// $fingers_arr['pinky_finger'] = new Finger('Pinky Finger');


// $thumb_finger = new Finger('Thumb Finger');
// $index_finger = new Finger('Index Finger');
// $middle_finger = new Finger('Middle Finger');
// $ring_finger = new Finger('Ring Finger');
// $pinky_finger = new Finger('Pinky Finger');

// echo $thumb_finger->getFinger();

//foreach ($fingers_arr as $key => $finger) {
  // foreach ($finger as $key => $value) {
  //   echo $value . '<br />';
  // }
  //echo $finger->getFinger();
//}


// echo "<pre>";
// print_r($fingers_arr);





//$hand = new Hand('Left hand', new Finger('Thumb Finger'), new Finger('Index Finger'), new Finger('Middle Finger'), new Finger('Ring Finger'), new Finger('Pinky'));
//echo 'This is: ' . $hand->getWhichHand() . ' it has: ' . count($hand->getFingers()) . ' fingers, and they are: <br />';

// $fingers = $hand->getFingers();

// for ($i=0; $i < count($fingers); $i++) {
//   echo $i + 1 .'- '  .  $fingers[$i]->finger . '<br />';
// }



// $left_arm = new Arm('Left Arm', new Hand('Left hand', new Finger('Thumb Finger'), new Finger('Index Finger'), new Finger('Middle Finger'), new Finger('Ring Finger'), new Finger('Pinky')));
// echo $left_arm->getWhichArm() . '<br />';
// echo $left_arm->getHand()->which_hand . '<br />';
// $fingers = $left_arm->getHand()->fingers_arr;
// for ($i=0; $i < count($fingers); $i++) {

//   echo $fingers[$i] . '<br />';
// }










// $arms = new Arms(new Arm('Left Arm'), new Arm('Right Arm'));
// // echo "<pre>";
// // print_r($arms);
// foreach ($arms as $arm) {
//   echo $arm->which_arm . '<br />';
// }


