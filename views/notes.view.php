<?php require("layouts/head.php") ?>
<?php require("layouts/nav.php") ?>
<?php require("layouts/banner.php") ?>

    <body class="h-full">

    <div class="min-h-full">


        <main>
            <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
                <?php foreach($notes as $note) : ?>
                    <li>
                        <a href="/note?id=<?= $note['id']?>" class="text-blue-500 hover:underline">
                            <?= $note['body'] ?>
                        </a>
                    </li>
                <?php endforeach ?>
            </div>
        </main>
    </div>

    </body>

<?php require("layouts/footer.php") ?>