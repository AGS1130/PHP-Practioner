<?php
$person = [
    'age' => 27,
    'hair' => 'false',
    'career' => 'slacker'
];

// Adding new key value pair
$person['name'] = 'Loreb';

// Delete key value pair
unset($person['hair']);

require 'associative-array.view.php';
?>