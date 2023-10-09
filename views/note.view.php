<?php require("layouts/head.php") ?>
<?php require("layouts/nav.php") ?>
<?php require("layouts/banner.php") ?>

    <body class="h-full">

    <div class="min-h-full">


        <main>
            <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
                <p class="mb-6">
                    <a href="/notes" class="text-blue-500 hover:underline">Go Back...</a>
                </p>
                <p><?= $note['body'] ?></p>
            </div>
        </main>
    </div>

    </body>

<?php require("layouts/footer.php") ?>