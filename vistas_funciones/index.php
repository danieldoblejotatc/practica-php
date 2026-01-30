<?php
$books = [
    [
        'name' => 'Do Androids Dream of Electric Sheep',
        'author' => 'Philip K. Dick',
        'releaseYear' => 1968,
        'purchaseUrl' => 'http://example-1.com'
    ],
    [
        'name' => 'The Hitchhiker\'s Guide to the Galaxy',
        'author' => 'Douglas Adams',
        'releaseYear' => 1979,
        'purchaseUrl' => 'http://example-2.com'
    ],
    [
        'name' => 'Project Hail Mary',
        'author' => 'Andy Weir',
        'releaseYear' => 2021,
        'purchaseUrl' => 'http://example-3.com'
    ]
];

$filterItems = array_filter($books, function ($book) {
    return $book['releaseYear'] < 2000 && $book['releaseYear'] > 1950;
});

require 'index.view.php';
