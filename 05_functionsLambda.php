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
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <ul>
        <?php foreach ($filterItems as $book): ?>
            <a href="<?= $book['purchaseUrl'] ?>">
                <li><?= $book['name'] ?> (<?= $book['releaseYear'] ?>)</li>
            </a>
        <?php endforeach; ?>
    </ul>

</body>

</html>