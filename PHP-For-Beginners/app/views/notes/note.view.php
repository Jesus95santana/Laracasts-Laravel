<?php require base_path("views/layouts/head.php") ?>
<?php require base_path("views/layouts/nav.php") ?>
<?php require base_path("views/layouts/banner.php") ?>

    <main>
        <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
            <p class="mb-6">
                <a href="/notes" class="text-blue-500 hover:underline">Go Back...</a>
            </p>
            <p><?= htmlspecialchars($note['body']) ?></p>

            <footer class="mt-6">
                <a href="/note/edit?id=<?= $note['id'] ?>"
                   class="text-gray-500 border border-current px-3 py-1 rounded">Edit</a>
            </footer>

            <form class="mt-6" method="POST">
                <input type="hidden" name="_method" value="DELETE">
                <input type="hidden" name="id" value="<?= $note['id'] ?>">
                <button class="text-sm text-red-500">Delete</button>
            </form>

        </div>
    </main>


<?php require base_path("views/layouts/footer.php") ?>