<?php
$movies = [
    [
        'name' => 'Jungle Book',
        'producer' => 'Johnny',
        'date' => '2025'
    ],
    [
        'name' => 'Transporter',
        'producer' => 'Lincany',
        'date' => '2022'
    ],
    [
        'name' => 'Jungle Book',
        'producer' => 'Elizabeth',
        'date' => '2024'
    ],
];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
</head>

<body>
    <h3><?php foreach ($movies as $movie) : ?>
            <?php if ($movie['date'] >= 2023) : ?>
                <li><?= "{$movie['name']} {$movie['producer']} {$movie['date']}" ?></li>
            <?php endif ?>
        <?php endforeach; ?>

    </h3>
</body>

</html>