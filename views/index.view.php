<?php require("layouts/head.php") ?>
<?php require("layouts/nav.php") ?>
<?php require("layouts/banner.php") ?>


    <main>
        <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
            <p>Hello, <?= $_SESSION['user']['email'] ?? "Guest" ?>. Welcome to the home page.</p>
        </div>
    </main>

<?php require("layouts/footer.php") ?>