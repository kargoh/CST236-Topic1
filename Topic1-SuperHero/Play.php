<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once 'SuperHero.php';

$ultraMan = new SuperHero("Spiderman");
$unstoppable = new SuperHero("Hulk");

while($ultraMan->isHeDead() == "alive" && $unstoppable->isHeDead() == "alive"){
    $ultraMan->attack($unstoppable);
    echo $unstoppable->getName() . " has " . $unstoppable->getHealth() . " health.<br>";
    $unstoppable->attack($ultraMan);
    echo $ultraMan->getName() . " has " . $ultraMan->getHealth() . " health.<br>";
    echo "<hr>";
}

// game over
if($ultraMan->getHealth() > 0) {
    echo "it looks like poor " .$unstoppable->getName() . " lost.<br>";
} else {
    echo "it looks like poor " .$ultraMan->getName() . " lost.<br>";
}

?>