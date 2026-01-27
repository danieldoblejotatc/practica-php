<?php
/*
  EJERCICIO 4: Información detallada
  - Crea un array llamado $libros.
  - Cada elemento del array debe ser, a su vez, un array asociativo.
  - Cada libro debe tener: 'titulo', 'autor' y 'url'.
  
  Ejemplo de estructura:
  $libros = [
      [
          'titulo' => 'La Biblia',
          'autor' => 'Varios',
          'url' => 'https://example.com'
      ],
      // ... agrega los otros 2
  ];

  - En el HTML, muestra el título del libro como un enlace (<a>) 
    usando la 'url', y al lado pon el autor entre paréntesis.
*/

$libros = [
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
            <?php foreach ($libros as $libro): ?>
                <li>
                    <a href="<?= $libro['url']; ?>">
                        <?= $libro['titulo'] . "By" .  $libro['autor'] ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>

</body>

</html>