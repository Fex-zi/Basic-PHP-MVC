<?php

use Core\Database;

$config = require base_path('config.php');
$db = new Database($config['database']);

$currentUserid = 1;

$id = $_POST['id'];



$db->query('delete from notes where id = :id AND user_id = :user_id', [
    'id' => $id,
    'user_id' => $currentUserid
]);
header('location:' . url('notes'));
exit();
