<?php

  if (!file_exists('json_d.json')) {
    $fp = fopen('json_db.json', 'w+');
    fclose($fp);
  };

  $memory = [];


require_once 'config/config.php';

ini_set('display_startup_errors',1);
ini_set('display_errors',1);
error_reporting(-1);


$moh = new Male('Mohamad', 'Rashid', true);
$moh->setBirthday('1972-10-12');

$dalya = new Female('Dalya', 'Abood');
$dalya->setBirthday('1973-04-18');

$moh->getMarrid($family = new Family($moh, $dalya));

$family->makeBaby($maiar = new Child_male('Maiar'));
$family->makeBaby($ali = new Child_male('Ali'));



array_push($memory, $moh, $dalya, $maiar, $ali);
foreach ($memory as $key => $value) {
  echo "<ul>";
  echo '<li>' . $value->getName() . '</li><br />';
  echo '<li>' . $value->getBirthday() . '</li><br />';
  echo '<li>' . $value->getGender() . '</li><br />';
  echo '<li>Age: ' . $value->getAge() . '</li><br />';
  echo '<li>Civil Status: ' . $value->getCivilStatus() . '</li><br />';
  echo '<li>Partner Name: ' . $value->getPartnerName() . '</li><br />';
  echo '<li>Royal: ' . $value->isRoyal() . '</li><br />';
  echo $value->getChildren();
  echo "<pre>";
  // print_r($value->getChildren());
  echo "</ul><br />";
}
// echo "<pre>";
// print_r($memory);


// function arrayIterator($arr) {
//   $item = '';
//   foreach ($arr as $key => $value) {
//     $item .= (is_array($value) ? $key . arrayIterator($value) : $value);
//   }
//   return $item;
// }

// arrayIterator($memory);


