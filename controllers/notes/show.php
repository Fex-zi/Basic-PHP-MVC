<?php

$config = require('config.php');
$db = new Database($config['database']);

$heading = 'Note';

$currentUserid = 1;

$id = $_GET['id'];

$note = $db->query('SELECT * FROM notes WHERE id = :id', ['id' => $id])->findOrFail();



authorize($note['user_id'] === $currentUserid);

require "views/notes/show.view.php";
