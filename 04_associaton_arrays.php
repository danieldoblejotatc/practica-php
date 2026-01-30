<?php

/**
 * Colección de libros de ciencia ficción
 */
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
/**
 * Filtra un arreglo basado en una llave y un valor específico
 * @param array $items El arreglo a procesar
 * @param string $key La propiedad a evaluar
 * @param mixed $value El valor esperado
 * @return array Arreglo filtrado
 */
// function filter($items, $key, $value)
// {
//     $filterItems = [];
//     foreach ($items as $item) {
//         if ($item[$key] === $value) {
//             $filterItems[] = $item;
//         }
//     }
//     return $filterItems;
// };

function filter($items, $fn)
{
    $filterItems = [];
    foreach ($items as $item) {
        if ($fn($item)) {
            $filterItems[] = $item;
        }
    }
    return $filterItems;
};


// $filteredBooks = filter($books, 'author', 'Andy Weir'); 

/** * Filtrado dinámico usando la función nativa de PHP
 * Condición: Libros publicados hasta el año 2000 y del autor Douglas Adams
 */
// $filteredBooks = filter($books, function ($book) {
//     return $book['releaseYear'] <= 2000 && $book['author'] === 'Douglas Adams';
// })
$filteredBooks = array_filter($books, function ($book) {
    return $book['author'] === 'Andy Weir';
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
        <?php foreach ($filteredBooks as $book): ?>
            <a href="<?= $book['purchaseUrl'] ?>">
                <li><?= $book['name'] ?> (<?= $book['releaseYear'] ?>)</li>
            </a>
        <?php endforeach; ?>
    </ul>

</body>

</html>