<?php

return [

    url() => 'controllers/index.php',

    url('/about') => 'controllers/about.php',

    url('/notes') => 'controllers/notes/index.php',

    url('/note') => 'controllers/notes/show.php',

    url('/note/create') => 'controllers/notes/create.php',

    url('/contact') => 'controllers/contact.php',
];
