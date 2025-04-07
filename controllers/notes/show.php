<?php

$config = require base_path('config.php');
$db = new Database($config['database']);


$currentUserid = 1;

$id = $_GET['id'];

$note = $db->query('SELECT * FROM notes WHERE id = :id', ['id' => $id])->findOrFail();



authorize($note['user_id'] === $currentUserid);

view("notes/show.view.php", [
    'heading' => 'Note',
    'note' => $note
]);
