<?php

/*
  EJERCICIO 4: Filtro de Productos por Categoría
  - Crea un array de $productos, donde cada producto tenga:
    'nombre', 'precio' y 'categoria' (ej: 'electronica', 'hogar', 'ropa').
  - Escribe una función llamada 'filtrarPorCategoria'.
  - La función debe devolver solo los productos de la categoría seleccionada.
  - Extra: Si la lista de productos$productosFiltrados está vacía, muestra un mensaje
*/

$productos = [
    [
        'nombre' => "Bolsa en Algodón Botanik (135gr)",
        'precio' => 9950,
        'categoria' => 'Hogar'
    ],
    [
        'nombre' => "Termo Metálico Sport 600ml",
        'precio' => 25000,
        'categoria' => 'Deportes'
    ],
    [
        'nombre' => "Libreta Ecológica con Bolígrafo",
        'precio' => 12500,
        'categoria' => 'Oficina'
    ],
    [
        'nombre' => "Mug de Cerámica Mate 11oz",
        'precio' => 8500,
        'categoria' => 'Hogar'
    ],
    [
        'nombre' => "Gorra Trucker Ajustable",
        'precio' => 15000,
        'categoria' => 'Accesorios'
    ],
    [
        'nombre' => "Bolígrafo de Bambú Premium",
        'precio' => 4200,
        'categoria' => 'Oficina'
    ]
];

function filtrarPorCategoria($items, $categoriaBuscada)
{
    $productosFiltrados = [];

    foreach ($items as $item) {
        if ($item['categoria'] === $categoriaBuscada) {
            $productosFiltrados[] = $item;
        }
    }
    return $productosFiltrados;
}

$categoriaAFiltrar = "Hogar";
$productosFiltrados = filtrarPorCategoria($productos, $categoriaAFiltrar);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Productos Filtrados</h1>
    <?php if (empty($productosFiltrados)): ?>
        <p>No hay productos en esta categoria</p>
    <?php else: ?>
        <ul>
            <?php foreach ($productosFiltrados as $producto): ?>
                <li><?= $producto["nombre"] ?> - <strong>$<?= number_format($producto["precio"], 0, ',', '.')  ?></strong> </li>
            <?php endforeach; ?>
        <?php endif; ?>
        </ul>
</body>

</html>