<?php
function getLabelLogin(String $role): string{
    switch (strtolower($role)) {
        case "siswa" :
            return "NISN";
        case "guru" :
            return "NIP";
        case "operator" :
            return "Kode OP";
        default :
            return "";
    }
}

function generate_csrfToken() {
    if (session_status() === PHP_SESSION_NONE) session_start();
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
    return $_SESSION['csrf_token'];
}
?>