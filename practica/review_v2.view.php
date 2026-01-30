<!DOCTYPE html>
<html lang="es" class="h-full bg-gray-50">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Repaso Estilo por Estilo</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="h-full grid place-items-center p-6">
    <div class="max-w-6xl w-full">
        <h1 class="text-3xl font-bold mb-8 text-center text-gray-800">
            Categorías de <?= htmlspecialchars($business['name']) ?>
        </h1>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            <?php foreach ($business['categories'] as $category): ?>

                <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg hover:-translate-y-1 transition duration-300 text-center border border-gray-100">

                    <div class="text-blue-500 mb-4 flex justify-center">
                        <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4">
                            </path>
                        </svg>
                    </div>

                    <h2 class="text-lg font-semibold text-gray-700 uppercase tracking-tight">
                        <?= htmlspecialchars($category); ?>
                    </h2>

                    <p class="text-xs font-bold text-blue-600 mt-3 uppercase cursor-pointer hover:text-blue-800">
                        Ver productos →
                    </p>

                </div>

            <?php endforeach; ?>
        </div>
    </div>
</body>

</html>