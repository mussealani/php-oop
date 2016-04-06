<?php
require_once 'config/config.php';

ini_set('display_startup_errors',1);
ini_set('display_errors',1);
error_reporting(-1);



/*
   KEJSARE OCH KEJSARINNOR
   ========================================================================== */

$an_adult = new Adult('Mohamad Rashid', 43, 'Male');
$an_adult->setBirthday('1972-10-12');
echo $an_adult->getName() . ' ' . $an_adult->getBirthday();





/*
   PERSON CLASS
   ========================================================================== */


// // instantiate class Person
// $this_person = new Person('Mohamad Rashid', 'Male', 43);

// // set arms, hand and fingers
// $this_person->setArms(new Arm('Left Arm', $leftArm =  new Hand('Left hand', new Finger('Thumb Finger'), new Finger('Index Finger'), new Finger('Middle Finger'), new Finger('Ring Finger'), new Finger('Pinky'))),
//                       new Arm('Right Arm', new Hand('Right hand', new Finger('Thumb Finger'), new Finger('Index Finger'), new Finger('Middle Finger'), new Finger('Ring Finger'), new Finger('Pinky'))));

// echo 'Full name: '  . $this_person->name . '<br />';
// echo "Gender: "     . $this_person->getGender() . '<br />';
// echo "Age: "        . $this_person->getAge() . '<br /><br />';


// $this_person_arms = $this_person->getArms();


// echo $this_person->getName() . ' has ' . count($this_person->getArms()) . ' arms: <br />';

// foreach ($this_person_arms as $arm) {
//   echo $arm . '<br />';
// }
// echo "<pre>";
// print_r($leftArm->getFingers());
// echo "<pre>";
// print_r($this_person);









/*
   FORDON CLASS
   ========================================================================== */


// $person = new Person('Mohamad', 'Male', 43);
// echo 'Name: ' . $person->name . ' ' . 'Gernder: ' . $person->gender;



//print_r($left_arm);


/**
*
*/
// class Fordon
// {
//   public $color;
//   public $door;
//   public $wheel;

//   function __construct($color, $door, $wheel, $canDrive)
//   {
//     $this->color  = $color;
//     $this->door   = $door;
//     $this->wheel  = $wheel;
//     $this->canDrive = $canDrive;
//   }

//   function drive($canDrive) {
//     return $this->canDrive;
//   }
// }

// $myFordon = new Fordon('Red', 5, 4, 'Yes can drive');
// echo 'My Fordon\'s color is: '  . $myFordon->color    . '<br />';
// echo 'My Fordon '               . $myFordon->drive()  . '<br /><br />';


// /**
// *
// */
// class Buss extends Fordon
// {
//   public $size;

//   public function setEngineSize($size) {
//     $this->size = $size;
//   }

//   public function getEngineSize() {
//     return $this->size;
//   }
// }

// $myBuss = new Buss('Yellow', 1, 8, 'Yes can drive');
// $myBuss->setEngineSize(2.2);
// echo "My buss's color: "  . $myBuss->color            . '<br />';
// echo "My buss has: "      . $myBuss->door             . ' door'         . '<br />';
// echo "My buss has: "      . $myBuss->wheel            . ' wheels'       . '<br />';
// echo "My buss has: "      . $myBuss->getEngineSize()  . ' engine size'  . '<br />';
