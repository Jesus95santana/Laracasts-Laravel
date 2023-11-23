<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);
$heading = "Note";
$currentUserId = 1;


$note = $db->query('select * from notes where id = :id', [
    ':id' => $_GET['id']
])->findOrFail();

authorize($note['user_id'] == $currentUserId);


view('notes/note.view.php', [
    'heading' => 'Note',
    'note' => $note
]);