<?php
require_once 'config/config.php';

ini_set('display_startup_errors',1);
ini_set('display_errors',1);
error_reporting(-1);



/*
   KEJSARE OCH KEJSARINNOR
   ========================================================================== */
  if (!file_exists('json_db.json')) {
    $fp = fopen('json_db.json', 'w+');
    fclose($fp);
  };

$an_adult = new Adult('Mohamad Rashid','Male');
$an_adult->setBirthday('1972-10-12');
//$an_adult->getCivilStatus();

$an_adult1 = new Adult('Daly Abood','Female');
$an_adult1->setBirthday('1973-04-18');
$an_adult->getMarrid($family = new Family($an_adult, $an_adult1));
$family->makeBaby('Maiar');
$family->adoptBaby('Musse');
$family->adoptBaby('Manar');


$an_adult3 = new Adult('Yasir Rashid','Male', true);
$an_adult3->setBirthday('1982-01-01');




//$an_adult1->getCivilStatus();

// $an_adult->getMarrid(new GetMarrid($an_adult, $an_adult1));
// echo 'Full Name: ' . $an_adult->getName() .
//             '<br>' . 'Date of birth: ' . $an_adult->getBirthday() .
//             '<br>' . 'Gneder: ' . $an_adult->getGender() .
//             // '<br />Age: ' . $an_adult->getAge() .
//             '<br />Civil Status: ' . $an_adult->getCivilStatus();

//  echo "<br /><br />";


// $an_adult1 = new Adult('Daly Abood','Female');
// $an_adult1->setBirthday('1973-04-18');
// echo 'Full Name: ' . $an_adult1->getName() .
//             '<br>' . 'Date of birth: ' . $an_adult1->getBirthday() .
//             '<br>' . 'Gneder: ' . $an_adult1->getGender() .
//             // '<br />Age: ' . $an_adult1->getAge() .
//             '<br />Civil Status: ' . $an_adult1->getCivilStatus() . $an_adult1->getMarrid(new GetMarrid($an_adult, $an_adult1));

$persons = [];
$obj = [
  'name' => $an_adult->getName(),
  'birthday' => $an_adult->getBirthday(),
  'gender' => $an_adult->getGender(),
  'civil_status' => $an_adult->getCivilStatus(),
  'partner_name' => $an_adult->partner_name,
  'age' => $an_adult->getAge(),
  'royal' => $an_adult->isRoyal(),
  'children' => $an_adult->getChildren()
];

$obj1 = [
  'name' => $an_adult1->getName(),
  'birthday' => $an_adult1->getBirthday(),
  'gender' => $an_adult1->getGender(),
  'civil_status' => $an_adult1->getCivilStatus(),
  'partner_name' => $an_adult1->partner_name,
  'age' => $an_adult1->getAge(),
  'royal' => $an_adult1->isRoyal(),
  'children' => $an_adult1->getChildren()
];

$obj3 = [
  'name' => $an_adult3->getName(),
  'birthday' => $an_adult3->getBirthday(),
  'gender' => $an_adult3->getGender(),
  'civil_status' => $an_adult3->getCivilStatus(),
  'royal' => $an_adult3->isRoyal(),
  'children' => $an_adult3->getChildren(),
  'age' => $an_adult3->getAge()

];
echo "<br />";

array_push($persons, $obj, $obj1, $obj3);

    $toJson =  json_encode($persons, JSON_PRETTY_PRINT);

    file_put_contents('json_db.json',$toJson);

$pers_obj = file_get_contents("json_db.json");
$pers_json = json_decode($pers_obj, true);


foreach ($persons as $key => $value) {
  echo "<ul>";
  echo '<li>'. $value['name'] . '</li><br />';
  echo '<li>'. $value['birthday'] . '</li><br />';
  echo '<li>'. $value['gender'] . '</li><br />';
  echo '<li>'. $value['civil_status'] . '</li><br />';
  echo '<li>'. $value['age'] . '</li><br />';
  echo '<li>'. $value['royal'] . '</li><br />';
  echo '<li>'. $value['children'] . '</li><br />';

  echo "</ul>";
  // echo $value->gender . '<br />';
  // echo $value->age . '<br />';
}


echo "<pre>";

print_r($pers_obj);



//$persons['fullName'] = $an_adult->getName();


// $getMarrid = new GetMarrid($an_adult, $an_adult1);
// echo $getMarrid;

// echo "<pre>";
// print_r($getMarrid);


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
