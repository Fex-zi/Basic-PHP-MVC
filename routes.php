<?php


$router->get(url(), 'controllers/index.php');
$router->get(url('/about'), 'controllers/about.php');
$router->get(url('/contact'), 'controllers/contact.php');

$router->get(url('/notes'), 'controllers/notes/index.php');
$router->get(url('/note'), 'controllers/notes/show.php');
$router->get(url('/note/create'), 'controllers/notes/create.php');
$router->post(url('/note/create'), 'controllers/notes/store.php');
$router->delete(url('/note'), 'controllers/notes/destroy.php');
