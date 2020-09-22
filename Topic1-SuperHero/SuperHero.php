<?php

require_once 'Person.php';

class SuperHero extends Person {
    
    private $hasCape;
    private $health;
    private $isDead;
    


    public function __construct($name) {
        $this->name = $name;
        $this->health = 100;
        $this->isDead = False;
    }
    
    public function getHealth()
    {
        return $this->health;
    }
    
    public function setHealth($health)
    {
        $this->health = $health;
    }
    
    public function takeDamage($hitAgainstMe) {
        $this->health = $this->health - $hitAgainstMe;
        if($this->health <= 0){
            $this->isDead = true;
        }
        
    }
    
    public function attack($enemy){
        $damage = rand(1,10);
        $enemy->takeDamage($damage);
        echo $this->name . " has attacked " . $enemy->name . " and caused " . $damage . " hit points against him.<br>";
    }
    
    public function isHeDead() {
        if ($this->isDead){
            return "dead";
        } else {
            return "alive";
        }
    }
    
    public function obtainACape() {
        $this->hasCape = True;
    }
    
    public function loseCape() {
        $this->hasCape = False;
    }
    
    public function capeStatus() {
        if($this->hasCape == true){
            echo $this->name . " has a cape.<br>";
        } else {
            echo $this->name . " does not have a cape.<br>";
        }
    }
}



?>