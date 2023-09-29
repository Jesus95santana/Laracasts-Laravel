<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Hello world</h1>

    <?php
    $greeting = "Goodbye";
    // Arrary
    $numbers = ['one', 'two', 'three'];
    // Associative Array
    $books = [
            [
                'name' => 'Dr. Suess',
                'author' => 'Dr Suess',
                'link' => 'www.google.com'
            ],
            [
                'name' => 'Dr. Who',
                'author' => 'Dr Who',
                'link' => 'www.yahoo.com'
            ],
            [
                'name' => 'Dr. Strange',
                'author' => 'Dr Strange',
                'link' => 'www.bing.com'
            ],
    ];

    //php version of Array = array_filter($books, function());
    function filter($items, $key, $value) {
        $filteredItems = [];

        foreach($items as $item) {
            if($item[$key] === $value) {
                $filteredItems[] = $item;
            }
        }

        return $filteredItems;
    }

    $filteredbooks = filter($books, 'name', 'Dr. Suess');
    ?>

    <?= "<p>$greeting</p>"?>

    <?php foreach($numbers as $number) : ?>
    <li><?= $number ?></li>
    <?php endforeach ?>

    <?php foreach($filteredbooks as $book) :?>
    <li>Name: <?= $book['name']?></li>
    <li>Author: <?= $book['author']?></li>
    <li>URL: <?= $book['link']?></li>
    <?php endforeach?>
</body>
</html>