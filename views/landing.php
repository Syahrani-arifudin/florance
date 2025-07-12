<?php
session_start();
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Florence Event Organizer</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-white text-gray-800 font-sans">
    <header class="bg-purple-700 text-white shadow">
        <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">
            <h1 class="text-2xl font-bold">Florence</h1>
            <div>
                <a href="index.php?url=AuthController/showLogin" class="bg-white text-purple-700 px-4 py-2 rounded hover:bg-purple-100">Login</a>
            </div>
        </div>
    </header>

    <main class="max-w-4xl mx-auto mt-16 text-center">
        <h2 class="text-4xl font-bold mb-6">Selamat Datang di Florence</h2>
        <p class="text-lg text-gray-600 mb-8">Kelola acara dan rundown-mu dengan mudah dan cepat.</p>
        <a href="index.php?url=AuthController/showLogin" class="bg-purple-700 text-white px-6 py-3 rounded text-lg hover:bg-purple-800 transition">Masuk Sekarang</a>
    </main>

    <footer class="mt-20 bg-gray-100 text-center py-4 text-sm text-gray-500">
        &copy; <?= date('Y') ?> Florence. All rights reserved.
    </footer>
</body>
</html>
