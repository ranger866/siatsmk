<?php
session_start();

// Hapus semua data session
$_SESSION = [];

// Hapus cookie session (opsional, biar lebih bersih)
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 3600,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

// Hancurkan session
session_destroy();

// Redirect ke halaman login utama
header("Location: /index.php");
exit;
