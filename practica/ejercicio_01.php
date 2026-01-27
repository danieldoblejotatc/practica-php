<?php
/*
  EJERCICIO 1: Tus primeras variables
  - Crea una variable llamada $nombre y asígnale tu nombre.
  - Crea una variable llamada $saludo y asígnale el texto "Hola".
  - Utiliza la concatenación o la interpolación de variables para 
    imprimir en pantalla: "Hola, mi nombre es [tu nombre]".
*/
$nombre = "Daniel Acuña";
$saludo = "Hola";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
        font-family: 'Google Sans', sans-serif;
        margin: 0;
        /* Convertimos el body en un contenedor flexible */
        display: flex; 
        /* Centrado horizontal */
        justify-content: center; 
        /* Centrado vertical */
        align-items: center; 
        /* Hacemos que el body ocupe el 100% de la altura de la ventana */
        height: 100vh; 
        background-color: #f4f4f4;
    }
    h1 {
        background: white;
        padding: 1rem;
        border-radius: 12px;
        box-shadow: 0 4px 6px rgba(0,0,0,0.1);
    }
    </style>
</head>
<body>
    <h1>
        <?= $saludo; ?>, mi nombre es: <?= $nombre; ?>
    </h1>
    
</body>
</html>