<?php
$heading = "Home";

$_SESSION['name'] = 'Joe';

view('index.view.php', [
    'heading' => 'Home'
]);