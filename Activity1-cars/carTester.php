<?php

require_once 'Car.php';

$raceCar = new Car();

$raceCar->addTires(3);

$raceCar->installEngine();

$raceCar->inflateTiresTo(35);

$raceCar->start();

$raceCar->stop();

$raceCar->restart();

$raceCar->setSpeed(75);

?>