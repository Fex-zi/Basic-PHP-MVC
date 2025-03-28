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
    <?php
    $lambdaFilter = array_filter($NewBook, function ($book) {
        return $book['releaseYear'] < 2000;
    });

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