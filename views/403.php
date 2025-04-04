<?php $heading = '403'; ?>
<?php require "partials/head.php"; ?>
<?php require "partials/nav.php"; ?>



<main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <p class="font-bold">You are not authorized to view this note</p>
        <p><a href="<?= url() ?>" class="underline text-blue"> Go back Home </a>
        </p>
    </div>
</main>

<?php require "partials/footer.php"; ?>