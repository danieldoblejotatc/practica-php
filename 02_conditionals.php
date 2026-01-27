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
            background-color: #f0f0f0;
            display: grid;
            place-items: center;
            height: 100vh;
        }

        h1 {
            color: #333;
        }
    </style>
</head>

<body>
    <?php
    $name = "Dark Matter";
    $read = true;
    if ($read) {
        $message = "You have read \"$name\" by Blake Crouch.";
    } else {
        $message = "You have not read \"$name\" yet.";
    }
    ?>
    <h1>
        <?= $message; ?>
    </h1>
</body>

</html>