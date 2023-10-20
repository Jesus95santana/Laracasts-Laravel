<?php


$router->get('/', 'controllers/index.php');
$router->get('/about', 'controllers/about.php');
$router->get('/contact', 'controllers/contact.php');

$router->get('/notes', 'controllers/notes/index.php');
$router->get('/note', 'controllers/notes/note.php');
$router->delete('/note', 'controllers/notes/delete.php');

$router->post('/notes', 'controllers/notes/store.php');
$router->get('/notes/create', 'controllers/notes/create.php');