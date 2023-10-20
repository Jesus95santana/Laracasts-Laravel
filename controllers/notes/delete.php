<?php

use Core\Database;

$config = require base_path('config.php');
$db = new Database($config['database']);

# $heading = "Note";
$currentUserId = 1;


$note = $db->query('select * from notes where id = :id', [
    ':id' => $_POST['id']
])->findOrFail();

authorize($note['user_id'] == $currentUserId);

$db->query('delete from notes where id = :id', [
    'id' => $_GET['id']
]);

header('location: /notes');

view('notes/note.view.php', [
    'heading' => 'Note',
    'note' => $note
]);