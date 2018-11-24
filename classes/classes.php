<?php

// Nouns are best names for classes
class Task {

    // Public makes these keys accessible
    // Protected makes them inaccessible
    public $description;
    protected $completed = false;

    public function __construct($description) {
        $this->description = $description;
    }

    public function complete() {
        return $this->completed = true;
    }

    public function isComplete() {
        return $this->completed;
    }
}

$tasks = [
    new Task('Check for emails'),
    new Task('Delete Junk Mail'),
    new Task('Learn new PHP concepts'),
    new Task('Finish all tasks')
];

$tasks[0]->complete();
$tasks[2]->complete();

require 'classes.view.php';

?>