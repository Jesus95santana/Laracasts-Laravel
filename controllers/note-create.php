<?php

    require('Validator.php');

$config = require('config.php');
$db = new Database($config['database']);

$heading = 'Create Note';


if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $errors = [];

    if(! Validator::string($_POST['body'], 1, 50)) {
        $errors['body'] = 'A body is required';
    }

    if(empty($errors)) {
        $db->query('INSERT INTO notes (body, user_id) VALUES (:body, :user_id)', [
            'body' => $_POST['body'],
            'user_id' => 1
        ]);
    }


}

require 'views/note-create.view.php';