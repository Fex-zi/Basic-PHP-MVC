<?php require "views/partials/head.php"; ?>
<?php require "views/partials/nav.php"; ?>
<?php require "views/partials/banner.php"; ?>




<main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <p>
        <ul><?php foreach ($notes as $note) : ?>
                <li>
                    <a href="<?= url('/note') ?>?id=<?= $note['id']; ?>" class="text-blue-500 hover:underline"> <?= htmlspecialchars($note['body']); ?></a>
                </li>

                </p>
            <?php endforeach; ?>
        </ul>
        <p class="mt-6">
            <a href="<?= url('/note/create') ?>" class="text-blue-500 hover:underline"> Create Note</a>

        </p>
    </div>
</main>

<?php require "views/partials/footer.php"; ?>