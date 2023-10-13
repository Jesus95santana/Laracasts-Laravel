<?php require("layouts/head.php") ?>
<?php require("layouts/nav.php") ?>
<?php require("layouts/banner.php") ?>

    <main>
        <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
            <p class="mb-6">
                <a href="/notes" class="text-blue-500 hover:underline">Go Back...</a>
            </p>
            <p><?= htmlspecialchars($note['body']) ?></p>
        </div>
    </main>


<?php require("layouts/footer.php") ?>