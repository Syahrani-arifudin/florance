<?php
// Hubungkan ke file koneksi database
require_once __DIR__ . '/../core/Database.php';

// Load semua model yang dibutuhkan
require_once __DIR__ . '/../models/Event.php';
require_once __DIR__ . '/../models/Rundown.php';

// Load semua controller yang akan digunakan
require_once __DIR__ . '/../controllers/AdminController.php';
require_once __DIR__ . '/../controllers/RundownController.php';
require_once __DIR__ . '/../controllers/UserEventController.php';
require_once __DIR__ . '/../controllers/AuthController.php'; // Untuk login/logout
// (Kalau ada controller lain, misal untuk user, bisa ditambahkan juga)

// Ambil URL dari parameter, misalnya: ?url=AdminController/index/1
$url = isset($_GET['url']) ? explode('/', $_GET['url']) : ['AdminController', 'index'];

// Ambil nama controller dari URL (misal: AdminController)
$controllerName = $url[0];

// Ambil nama method (fungsi di dalam controller), default = 'index'
$method = $url[1] ?? 'index';

// Ambil parameter tambahan, misalnya ID event
$param = $url[2] ?? null;

// Buat objek dari controller yang disebut di URL
$controller = new $controllerName();

// Jalankan method-nya. Kalau ada parameter, kirim juga.
$param ? $controller->$method($param) : $controller->$method();
