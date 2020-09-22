<?php

class Car {
    private $tires;
    private $hasEngine;
    private $tirePressure;
    private $isRunning;
    
    public function addTires($numberofNewTires) {
        if ($numberofNewTires > 0 && $numberofNewTires <= 4){
            if ($this->tires + $numberofNewTires > 4) {
                echo "You can only have a maximum of four tires. Try again.<br>";
            } else {
                $this->tires =  $this->tires + $numberofNewTires;
                echo "You installed " . $numberofNewTires . " tires. You now have " . $this->tires . " tires on your car.<br>";
            }
        }else { 
            echo "That is an invalid number of new tires. Nice try<br>";
        }
    }
    
    public function start() {
        $isRunning = true;
        echo "You have started the car.<br>";
    }
    
    public function stop() {
        $isRunning = false;
        echo "You have stopped the car.<br>";
    }
    
    public function restart() {
        $isRunning = false;
        echo "You have restarted the car.<br>";
    }
    
    public function installEngine() {
        $hasEngine = true;
        echo "You have installed the engine.<br>";
    }
    
    public function setSpeed($speed) {
        if ($speed >= 0){
            echo "You are currently driving at " . $speed . " mph.<br>";
        }else {
            echo "That is an invalid speed. Nice try<br>";
        }
    }
    
    public function inflateTiresTo($psi) {
        if ($psi >= 0){
            echo "You set the tires to " . $psi . " psi.<br>";
        }else {
            echo "That is an invalid psi. Nice try<br>";
        }
    }
    
}

    

?>