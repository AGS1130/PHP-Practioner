<?php

class Person{

    // Lets keep the property values locally scoped
    private $name;
    private $dateOfBirth;

    public function setName($name) {
        if(!is_string($name)) {
            throw new Exception('$name must be a string!');
        }
        $this->name = $name;
    }

    public function setDOB($dateOfBirth) {
        $this->dateOfBirth = $dateOfBirth;
    }

    public function getName() {
        return $this->name;
    }

    public function getDOB() {
        return $this->dateOfBirth;
    }

}

// Instantiate the Person Object
$person = new Person();

// SET the name
$person->setName('Beefaroni');

// GET the name
$name = $person->getName();

echo $name;

?>