<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Boolean</title>
</head>
<body>
    <h1>Task For The Day</h1>

    <ul>
        <?php foreach($tasks as $task => $status) : ?>
        <li>
            <strong><?= $task . ':'; ?></strong>
            <?php 
            $typeOf = gettype($status);
            
            if($typeOf === 'boolean') {
                echo $status ? 'Complete' : 'Incomplete';
            } else {
                echo $status;
            }
            ?>
        </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>