<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Array</title>
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
        <ul>
        <!-- Short-Hand foreach -->
        <?php foreach($names as $name) : ?>
            <li><?= $name; ?></li>
        <?php endforeach; ?>
        <!-- Long-Hand foreach -->
        <?php 
        foreach($names as $name) {
            echo "<li>{$name}</li>";
        }
        ?>
        </ul>
    </header>
</body>
</html>