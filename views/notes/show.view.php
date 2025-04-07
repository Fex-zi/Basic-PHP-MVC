<?php require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/nav.php') ?>
<?php require base_path('views/partials/banner.php') ?>


<main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <p class="mb-6">
            <a href="<?= url('/notes') ?>" class="text-blue-500 hover:underline">
                Go back... </a>
        </p>
        <p>
            <?= htmlspecialchars($note['body']); ?></a>
            </li>
        </p>
        <form method="POST" class="mt-6">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="id" value="<?= $note['id'] ?>">
            <p><button class="text-sm text-red-500">Delete</button></p>
        </form>
    </div>
</main>


<?php require base_path('views/partials/footer.php') ?>