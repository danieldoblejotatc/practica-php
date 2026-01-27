<?php
/*
  EJERCICIO 2: ¿Has terminado el curso?
  - Crea una variable booleana llamada $terminado y asígnale true o false.
  - Escribe una estructura if / else.
  - Si $terminado es true, imprime "Felicidades, has completado la lección".
  - Si es false, imprime "Sigue esforzándote, ¡ya casi lo logras!".
*/

$terminado = true;
$mensage = "";
if ($terminado) {
    $mensage =  "Felicidades, has completado la lección";
} else {
    $mensage = "Sige esforzándote, ¡ya casi lo logras!";
};

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Google+Sans:ital,opsz,wght@0,17..18,400..700;1,17..18,400..700&display=swap" rel="stylesheet">
    <title>Document</title>
    <style>
        body {
            font-family: 'Google Sans', sans-serif;
            margin: 0;
            display: grid;
            /* Esto centra tanto horizontal como verticalmente en una sola línea */
            place-items: center;
            height: 100vh;
            background-color: #f4f4f4;
        }

        h1 {
            background: white;
            padding: 1rem;
            border-radius: 12px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>

<body>
    <h1>
        Haz terminado el curso?
    </h1>
    <p>
        <?= $mensage; ?>
    </p>

</body>

</html>