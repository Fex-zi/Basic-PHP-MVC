<?php

$config = require('config.php');
$db = new Database($config['database']);

$heading = 'Note';

$currentUserid = 1;

$id = $_GET['id'];

$note = $db->query('SELECT * FROM notes WHERE id = :id', ['id' => $id])->fetch();

if (!$note) {
    abort(Response::NOT_FOUND);
}

if ($note['user_id'] !== $currentUserid) {
    abort(Response::FORBIDDEN);
}

require "views/note.view.php";
