<?php
/*
  EJERCICIO 3: Lista de libros
  - Crea un array simple llamado $misLibros.
  - Añade al menos 3 títulos de libros (pueden ser strings).
  - En tu HTML, crea una lista desordenada (<ul>).
  - Dentro de la lista, usa un bucle 'foreach' para generar un <li> 
    por cada libro del array.
*/

$misLibros = [
    "Biblia",
    "Habitos atomicos",
    "Como ganar amigos e influenciar en la gente"
];

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Mis Libros</title>
    <style>
        /* Puedes reutilizar tu estilo Grid aquí para que se vea genial */
        body {
            font-family: 'Google Sans', sans-serif;
            display: grid;
            place-items: center;
            height: 100vh;
            background-color: #f4f4f4;
            margin: 0;
        }

        ul {
            background: white;
            padding: 2rem;
            border-radius: 12px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            list-style: none;
            /* Quita los puntos de la lista */
        }

        li {
            padding: 0.5rem 0;
            border-bottom: 1px solid #eee;
        }

        li:last-child {
            border-bottom: none;
        }
    </style>
</head>

<body>

    <ul>
        <?php foreach ($misLibros as $libro): ?>
            <li><?= $libro; ?></li>
        <?php endforeach; ?>
    </ul>

</body>

</html>