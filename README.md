# poo1
<?php

require_once 'bicycle.php';
require_once 'car.php';

$bike = new Bicycle('blue');
$bike->setCurrentSpeed(15);


// Moving bike
echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed()  . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake() . "<br><br>";


// Instanciation d'un nouvel objet $rockrider
$rockrider = new Bicycle('yellow');

// Instanciation d'un nouvel objet $tornado
$tornado = new Bicycle('black');


$car = new Car('red', 5, 'gasoil');
$car->setCurrentSpeed(50);
$car->setEnergyLevel(75);

echo $car->start();

echo $car->forward();
echo '<br> Vitesse de la voiture : ' . $car->getCurrentSpeed()  . ' km/h' . '<br>';
echo $car->brake();
echo '<br> Vitesse de la voiture : ' . $car->getCurrentSpeed() . ' km/h' . '<br>';
echo $car->brake();
