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
    $name = "Dark Matter";
    $read = true;
    $no = false;

    $msg2 = !$no ? "You haven't read it" : "you have read it";

    if ($read) {
        $msg = "Have you read" . " " . $name;
    }

    ?>
    <h1>

        <?= $msg; ?><br>
        <?= $msg2; ?>
    </h1>
    <ul>
        <li>

        </li>
    </ul>
    <!-- My Basic pagination -->
    <?php $page = 1

    ?>

    <a href="index.php">
        << Old code</a> | <a href="index_<?= $page + 1 ?>.php">New code >></a>
</body>
https://admissions.utahtech.edu/admitted-whats-next/

</html>