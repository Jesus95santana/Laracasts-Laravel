<?php

$config = require('config.php');
$db = new Database($config['database']);


$heading = "My Notes";
$notes = $db->query('select * from notes')->get();

require("views/notes.view.php");