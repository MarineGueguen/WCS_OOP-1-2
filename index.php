<?php

// require_once 'Bicycle.php';
// require_once 'Car.php';
require_once 'Truck.php';

$truck = new Truck('red', 3, 'electric', 200);
var_dump($truck);

echo $truck->isFilled() . '<br>';

$truck->setCargo(200);
echo $truck->isFilled() . '<br>';

echo $truck->forward() . '<br>';
echo $truck->brake() . '<br>';

$truck2 = new Truck('green', 2, 'fuel', 100);
var_dump($truck2);

echo $truck2->isFilled() . '<br>';

$truck2->setCargo(50);
echo $truck2->isFilled() . '<br>';

$truck2->setCargo(100);
echo $truck2->isFilled() . '<br>';

echo $truck2->forward() . '<br>';
echo $truck2->brake();

// $bicycle = new Bicycle('blue', 1);
// echo $bicycle->forward();
// var_dump($bicycle);

// $car = new Car('green', 4, 'electric');
// echo $car->forward();
// var_dump($car);

// var_dump(Car::ALLOWED_ENERGIES);


// $bike = new Bicycle('blue');
// $bike->setCurrentSpeed(0);

// echo $bike->forward();
// echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
// echo $bike->brake();
// echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
// echo $bike->brake() . '<br>';

// $rockrider = new Bicycle('yellow');
// $tornado = new Bicycle('black');
// $tornado->forward();
// $tornado->setCurrentSpeed(10);
// echo '<br> Vitesse du vélo : ' . $tornado->getCurrentSpeed() . ' km/h' . '<br>';
// echo $tornado->brake();
// echo '<br> Vitesse du vélo : ' . $tornado->getCurrentSpeed() . ' km/h' . '<br><br>';

// $twingo = new Car('red', 4, 'low');
// echo $twingo->start();
// echo $twingo->forward();
// echo $twingo->brake() . '<br>';

// $mazda = new Car('green', 4, 'high');
// $mazda->setCurrentSpeed(90);
// echo $mazda->forward();
// echo $mazda->brake();


?>