<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Associative-Array</title>
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
        <?php foreach($person as $trait => $val) : ?>
            <li><strong><?= $trait . ':'; ?></strong> <?= $val; ?></li>
        <?php endforeach; ?>
        </ul>
    </header>
</body>
</html>