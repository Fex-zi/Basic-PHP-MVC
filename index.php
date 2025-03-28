<?php

//array
$books = [
    "Do andriods dream of electric sheep",
    "The langoliers ",
    "Hail Mary"
];

//associate array
$NewBook = [
    [
        'name' => 'Do andriods Dream of Electric Sheep',
        'author' => 'Ifeanyi Ojukwu',
        'releaseYear' => 2014,
        'purchaseUrl' => 'https://fexzitech.com'
    ],
    [
        'name' => 'Project Hail Mary',
        'author' => 'Ifeanyi Ojukwu',
        'releaseYear' => 2010,
        'purchaseUrl' => 'https://fexzitech.com'
    ],
    [
        'name' => 'Things Fall Apart',
        'author' => ' Chinua Achebe',
        'releaseYear' => 1958,
        'purchaseUrl' => 'https://www.amazon.com/Things-Fall-Apart-Chinua-Achebe/dp/0385474547'
    ],
];

function filterByAuthor($NewBook, $author)
{
    $filteredBooks = [];
    foreach ($NewBook as $NewBook2) {
        if ($NewBook2['author'] ===  $author) {
            $filteredBooks[] = $NewBook2;
        }
    }
    return $filteredBooks;
}

//Lamda Array
// $lambdaFilter = array_filter($NewBook, function ($book) {
//     return $book['releaseYear'] < 2000;
// });

// function filter($items, $fn)
// {
//     $filtered = [];
//     foreach ($items as $item) {
//         if ($fn($item)) {
//             $filteredItems[] = $item;
//         }
//     }
//     return $filtered;
// }
// $filteredItems = filter($books, function ($book) {
//     return $book['releaseYear'] >= 2000;
// });


$name = "Dark Matter";
$read = true;

//shorthand condition
$msg = !$read ? "You haven't read it {$name}" : "You have read {$name}";


//lamda filter
$lambdaFilter = array_filter($NewBook, function ($book) {
    return $book['releaseYear'] < 2000;
});


require "index.view.php";
