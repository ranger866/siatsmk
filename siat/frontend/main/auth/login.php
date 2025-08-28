<?php
session_start();
require_once "../auth/helpers.php";
$database = database_path();
$upload = upload_path();

require_once "$database/database.php"; // koneksi PDO
include "$upload/folder_validator.php";

// CSRF check 
if (!isset($_POST['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token']) {
    die("CSRF token invalid!");
}

$role     = $_POST['role'];
$username = trim($_POST['username']);
$password = trim($_POST['password']);

// Validasi awal
if ($role === "" || $username === "" || $password === "") {
    header("Location: /{$role}/{$role}_login.php?error=empty");
    exit;
}

// Mapping role -> tabel + kolom username
$roleMap = [
    "siswa"    => ["table" => "siswa",    "user_col" => "nisn"],
    "guru"     => ["table" => "guru",     "user_col" => "nip"],
    "operator" => ["table" => "operator", "user_col" => "username"]
];

if (!isset($roleMap[$role])) {
    die("Role tidak dikenal!");
}

$table   = $roleMap[$role]['table'];
$userCol = $roleMap[$role]['user_col'];

// Query ambil user
$sql = "SELECT * FROM $table WHERE $userCol = :username LIMIT 1";
$stmt = $pdo->prepare($sql);
$stmt->execute(["username" => $username]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);

// Cek user & password (plaintext)
if ($user && $password === $user['password']) {
    // Simpan session
    $_SESSION['logged_in'] = true;
    $_SESSION['id']        = $user['id'];
    $_SESSION['role']      = $role;
    $_SESSION['username']  = $user['username'];
    
    header("Location: /{$role}/dashboard.php");

} else {
    header("Location: {$role}/{$role}_login.php?error=invalid");
    exit;
}
