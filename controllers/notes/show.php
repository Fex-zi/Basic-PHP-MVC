<?php

use Core\Database;

$config = require base_path('config.php');
$db = new Database($config['database']);

$currentUserid = 1;

$id = $_GET['id'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $db->query('delete from notes where id = :id AND user_id = :user_id', [
        'id' => $id,
        'user_id' => $currentUserid
    ]);
    header('location:' . url('notes'));
    exit();
} else {


    $note = $db->query('SELECT * FROM notes WHERE id = :id', ['id' => $id])->findOrFail();



    authorize($note['user_id'] === $currentUserid);

    view("notes/show.view.php", [
        'heading' => 'Note',
        'note' => $note
    ]);
}
