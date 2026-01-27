<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Repaso Estilo por Estilo</title>
    <script src="http://cdn.tailwindcss.com"></script>
</head>

<body class="h-full grid place-items-center p-6">
    <div class="max-w-4xl w-full">
        <h1 class="text-3xl font-bold mb-8 text-center">
            Categorías de <?= $business['name'] ?>
        </h1>
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
            <?php foreach ($business['categories'] as $category): ?>

                <div class="bg-white p-6 rounded-xl shadow-md hover:scale-105 transition duration-300 text-center">

                    <div class="text-blue-500 mb-4 flex justify-center">
                        <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4">
                            </path>
                        </svg>
                    </div>

                    <h2 class="text-xl font-semibold text-gray-700 uppercase tracking-tight">
                        <?= $category; ?>
                    </h2>

                    <p class="text-xs font-bold text-blue-600 mt-3 uppercase">
                        Ver productos →
                    </p>

                </div>

            <?php endforeach; ?>

        </div>
    </div>

</body>

</html>