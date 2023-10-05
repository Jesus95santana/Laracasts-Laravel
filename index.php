<?php

require 'functions.php';
//require 'router.php';
require 'Database.php';

// Connect to the database, and execute a query.


$db = new Database();

$posts = $db->query("select * from posts where id = 1")->fetch();

foreach ($posts as $post) {
    echo "<li>" . $post['title'] . "</li>";
}