<?php

require_once 'Bicycle.php';
require_once 'Car.php';

$bike = new Bicycle('blue');
$bike->setCurrentSpeed(0);

echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake() . '<br>';

$rockrider = new Bicycle('yellow');
$tornado = new Bicycle('black');
$tornado->forward();
$tornado->setCurrentSpeed(10);
echo '<br> Vitesse du vélo : ' . $tornado->getCurrentSpeed() . ' km/h' . '<br>';
echo $tornado->brake();
echo '<br> Vitesse du vélo : ' . $tornado->getCurrentSpeed() . ' km/h' . '<br><br>';

$twingo = new Car('red', 4, 'low');
echo $twingo->start();
echo $twingo->forward();
echo $twingo->brake() . '<br>';

$mazda = new Car('green', 4, 'high');
$mazda->setCurrentSpeed(90);
echo $mazda->forward();
echo $mazda->brake();


?>