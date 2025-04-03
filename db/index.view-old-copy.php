<?php
$books = [
    "Do andriods dream of electric sheep",
    "The langoliers ",
    "Hail Mary"
];

//associate array
$NewBook = [
    [
        'name' => 'Do andriods Dream of Electric Sheep',
        'author' => 'Ifeanyi Ojukwu',
        'releaseYear' => 2014,
        'purchaseUrl' => 'https://fexzitech.com'
    ],
    [
        'name' => 'Project Hail Mary',
        'author' => 'Ifeanyi Ojukwu',
        'releaseYear' => 2010,
        'purchaseUrl' => 'https://fexzitech.com'
    ],
    [
        'name' => 'Things Fall Apart',
        'author' => ' Chinua Achebe',
        'releaseYear' => 1958,
        'purchaseUrl' => 'https://www.amazon.com/Things-Fall-Apart-Chinua-Achebe/dp/0385474547'
    ],
];

function filterByAuthor($NewBook, $author)
{
    $filteredBooks = [];
    foreach ($NewBook as $NewBook2) {
        if ($NewBook2['author'] ===  $author) {
            $filteredBooks[] = $NewBook2;
        }
    }
    return $filteredBooks;
}

$name = "Dark Matter";
$read = true;

//shorthand condition
$msg = !$read ? "You haven't read it {$name}" : "You have read {$name}";

//lamda filter
$lambdaFilter = array_filter($NewBook, function ($book) {
    return $book['releaseYear'] < 2000;
});

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo</title>
</head>
<link rel="stylesheet" href="css/style.css" />

<body>


    <h1> <?= $msg; ?> </h1>
    <h2>Recommended Books | Associate arrays, functions, filters, shorthand IF'S, Lambda Function </h2>
    <ul>
        <!-- foreach loop -->
        <?php foreach ($books as $book) : ?>
            <li><?= $book ?> </li>
        <?php endforeach; ?>

    </ul>

    <hr>
    <!-- Associate array -->
    <?php foreach ($NewBook as $NewBooks) : ?>

        <li>
            <a href="<?= $NewBooks['purchaseUrl'] ?>">
                <?= "{$NewBooks['name']}</a> by {$NewBooks['author']} ({$NewBooks['releaseYear']})" ?>
        </li>


    <?php endforeach; ?>

    <hr>
    <!-- filter -->
    Written By Ifeanyi Ojukwu
    <?php foreach ($NewBook as $NewBook1) : ?>
        <?php if ($NewBook1['author'] === 'Ifeanyi Ojukwu') : ?>

            <li>
                <a href="<?= $NewBook1['purchaseUrl'] ?>">
                    <?= "{$NewBook1['name']}</a> by {$NewBook1['author']} ({$NewBook1['releaseYear']})" ?>
            </li>
        <?php endif; ?>
    <?php endforeach; ?>

    <hr>
    <!--Filter by function -->
    <p>
        <?php foreach (filterByAuthor($NewBook, 'Ifeanyi Ojukwu') as $NewBook2) : ?>

            <li>
                <a href="<?= $NewBook2['purchaseUrl'] ?>">
                    <?= "{$NewBook2['name']}</a> by {$NewBook2['author']} ({$NewBook2['releaseYear']})" ?>
            </li>

        <?php endforeach; ?>
        </li>

    </p>
    <hr>
    <center>Lamda</center>
    <!-- Lambda Function -->
    <?php /*
    $lambdaFilter = array_filter($NewBook, function ($book) {
        return $book['releaseYear'] < 2000;
    });
    */
    ?>
    <?php foreach ($lambdaFilter as $lamb) : ?>
        <li>
            <a href="<?= $lamb['purchaseUrl'] ?>">
                <?= "{$lamb['name']}</a> by {$lamb['author']} ({$lamb['releaseYear']})" ?>
        </li>

    <?php endforeach; ?>
    <BR>
    <!-- My Basic pagination -->
    <?php $page = 2

    ?>

    <a href="index_<?= $page - 1 ?>.php">
        << Old code</a> | <a href="index_<?= $page + 1 ?>.php">New code >></a>

</body>

</html>