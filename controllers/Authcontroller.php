<?php

class AuthController {

   public function showLogin() {
    session_start();
    include __DIR__ . '/../views/login.php';
    exit;
}


    // Proses login
    public function login() {
        session_start();
        $username = trim($_POST['username']); // Menghapus spasi di awal/akhir
        $password = trim($_POST['password']); // Menghapus spasi di awal/akhir

        // Validasi input
        if (empty($username) || empty($password)) {
            $_SESSION['login_error'] = "Username dan password wajib diisi.";
            header("Location: index.php?url=AuthController/showLogin");
            exit;
        }

        // Logika login
        if ($username == "admin" && $password == "admin") {
            $_SESSION["user"] = "admin";
            header("Location: index.php?url=AdminController/index");
        } else {
            $_SESSION['login_error'] = "Username atau password salah.";
            header("Location: index.php?url=AuthController/showLogin");
        }
        exit;
    }

    // Proses logout
    public function logout() {
        session_start();

        // Menghapus semua data sesi
        $_SESSION = [];
        session_destroy();

        // Arahkan kembali ke halaman login
        header("Location: index.php?url=AuthController/showLogin");
        exit;
    }
}
