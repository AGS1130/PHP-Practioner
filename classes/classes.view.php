<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Classes</title>
</head>
<body>
    <h1>Classes Tasks</h1>
    <ul>
        <?php foreach($tasks as $task): ?>
        <li>
            <?php if($task->isComplete()): ?>
                <s><?= $task->description; ?></s>
            <?php else:?>
                <?= $task->description; ?>
            <?php endif; ?>
        </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>