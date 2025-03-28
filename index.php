<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo</title>
</head>
<link rel="stylesheet" href="css/style.css" />

<body>
    <?php
    //array
    $books = [
        "Do andriods dream of electric sheep",
        "The langoliers ",
        "Hail Mary"
    ];

    //associate array
    $NewBook = [
        [
            'name' => 'Do andriods Dream of Electric Sheep',
            'author' => 'Ifeanyi E. Ojukwu',
            'purchaseUrl' => 'https://fexzitech.com'
        ],
        [
            'name' => 'Project Hail Mary',
            'author' => 'Paige Loudon',
            'purchaseUrl' => 'https://fexzitech.com'
        ],
    ];
    ?>
    <?php
    $name = "Dark Matter";
    $read = true;

    //shorthand condition
    $msg = !$read ? "You haven't read it {$name}" : "You have read {$name}";
    ?>
    <h1> <?= $msg; ?> </h1>
    <h1>Recommended Books</h1>
    <ul>
        <!-- foreach loop -->
        <?php foreach ($books as $book) : ?>
            <li><?= $book ?> </li>
        <?php endforeach; ?>


    </ul>

    <!-- Associate array -->
    <?php foreach ($NewBook as $NewBook) : ?>

        <li><a href="<?= $NewBook['purchaseUrl'] ?>"><?= "{$NewBook['name']}</a> by {$NewBook['author']}" ?></li>

    <?php endforeach; ?>

</body>

</html>