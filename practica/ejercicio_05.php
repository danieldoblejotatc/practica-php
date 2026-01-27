<?php
/*
  EJERCICIO 5: El filtro maestro
  1. Mantén tu array de $libros del ejercicio anterior.
  2. Crea una función llamada 'filtrarPorAutor'.
  3. Esta función debe recibir dos cosas: 
     - El array de libros.
     - El nombre del autor que queremos buscar.
  4. La función debe devolver un NUEVO array que solo contenga los 
     libros de ese autor.
  5. Usa esta función para crear una variable $librosFiltrados y 
     muéstralos en tu HTML.
*/
$todosLosLibros = [
    [
        'titulo' => 'Biblia',
        'autor' => 'Dios',
        'url' => 'https://cielo.com'
    ],
    [
        'titulo' => 'Habitos Atomicos',
        'autor' => 'James Clear',
        'url' => 'https://james_clear.com'
    ],
    [
        'titulo' => 'Como ganar amigos e influir en las personas',
        'autor' => 'Dale Carnegie',
        'url' => 'https://dale_carnegie.com'
    ]
];
// --- TU FUNCIÓN AQUÍ ---
function filtrarPorAutor($libros, $autorBuscado)
{
    $filtrados = [];

    // PISTA: Usa un foreach dentro de la función y un 'if' 
    // para comparar el autor.
    foreach ($libros as $libro) {
        if ($libro['autor'] === $autorBuscado) {
            $filtrados[] = $libro;
        }
    }

    return $filtrados;
}

$librosFiltrados = filtrarPorAutor($todosLosLibros, 'James Clear');
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Mis Libros Detallados</title>
    <style>
        body {
            font-family: 'Google Sans', sans-serif;
            display: grid;
            place-items: center;
            height: 100vh;
            background-color: #f4f4f4;
            margin: 0;
        }

        .card {
            background: white;
            padding: 2rem;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        a {
            color: #2563eb;
            text-decoration: none;
            font-weight: bold;
        }

        a:hover {
            text-decoration: underline;
        }

        span {
            color: #666;
            font-size: 0.9rem;
        }
    </style>
</head>

<body>

    <div class="card">
        <h1>Mi Biblioteca</h1>
        <ul>
            <?php foreach ($librosFiltrados as $libro): ?>
                <li>
                    <a href="<?= $libro['url']; ?>">
                        <?= $libro['titulo']; ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>

</body>

</html>