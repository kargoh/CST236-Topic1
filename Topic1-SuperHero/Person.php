<?php

class Person
{
    protected $name;
    private $age;
    private $username;
    private $password;
    
    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    public function __construct($name) {
        $this->name = $name;
        echo "Hello my name is " .$name . "<br>";
        $this->username = "isaiah";
        $this->password = "password";
    }
    
}
?>