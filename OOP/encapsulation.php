<?php
/*
Public assigned properties are visible everywhere
They are accessible in the object of the class where they are declared
*/
class Mobile {

    public $name;

    public function setName($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }
}

$mobileDevice = new Mobile();
$mobileDevice->setName('Nokia 8310');
$echoMobileDevice = $mobileDevice->getName();

echo $echoMobileDevice;

/*
Private assigned properties are visible only inside that class
They can be modified through operations or functions in that class
*/
class Television {

    public $name;

    private function setName($name) {
        $this->name = $name;
    }

    private function getName() {
        return $this->name;
    }
}

$tv = new Television();
// Not possible, if executed throws error
// $tv->setName('Samsung QLED 4K TV');
// $echoTvDevice = $tv->getName();
// echo $echoTvDevice

/*
Protected properties are like private, but have public accessibility
They can be accessed from an inherited class or class that is instantiated
*/

class GameConsole {
    public $name;

    protected function setName($name) {
        $this->name = $name;
    }

    protected function getName() {
        return $this->name;
    }
}

$console = new GameConsole();
// $console->setName('Nintendo Wii');
// $echoConsoleDevice = $console->getName();
// echo $echoConsoleDevice;

?>