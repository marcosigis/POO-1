<?php

require_once 'Car.php';
require_once 'Bicycle.php';

// $rocker = new Bicycle("Black");
// $mountain = new Bicycle("Red");
// $bike = new Bicycle("Orange");

// var_dump($rocker);
// $rocker->dump();

// echo $bike->forward();
// echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
// echo $bike->brake();
// echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
// echo $bike->brake();

$homer = new Car("Pink", 4, 100);

$homer->dump();

echo $homer->getCurrentSpeed();
echo $homer->start();
echo $homer->forward();
echo $homer->brake();