<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HTML With PHP</title>
    <style>
        header {
            background: #e3e3e3;
            text-align: center;
            padding: 2em;

        }
    </style>
</head>
<body>
    <header>
        <h1>
        <?php 

        echo 'Hello HTML! <3 PHP'; 
        
        ?>
        </h1>
        <h2>
        <?php
        
        $grabNameFromURL = $_GET['name'];

        echo 'Hello ' . $grabNameFromURL;
        
        ?>
        </h2>
        <h3>
        <?php

        echo 'Make sure ' . htmlspecialchars($_GET['name']) . ' is sanitized';
        
        ?>
        </h3>
    </header>
</body>
</html>