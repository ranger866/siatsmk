<?php
require_once "database.php"; // koneksi PDO

$logFile = __DIR__ . "../log/migrate_passwords.log";

// buka file log (append mode, jadi tidak overwrite)
$log = fopen($logFile, "a");
if (!$log) {
    die("Gagal membuka file log!");
}

fwrite($log, "=== Migrasi Password: " . date("Y-m-d H:i:s") . " ===\n");

// Daftar tabel & kolom password
$tables = [
    "siswa"    => "password",
    "guru"     => "password",
    "operator" => "password"
];

foreach ($tables as $table => $colPassword) {
    $sql = "SELECT id, $colPassword FROM $table";
    $stmt = $pdo->query($sql);
    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach ($users as $user) {
        $plain = $user[$colPassword];

        // Skip kalau kemungkinan sudah hash
        if (strlen($plain) > 50) {
            fwrite($log, "[SKIP] $table.id={$user['id']} sudah hashed.\n");
            continue;
        }

        $hash = password_hash($plain, PASSWORD_DEFAULT);

        // Update DB
        $update = $pdo->prepare("UPDATE $table SET $colPassword = :hash WHERE id = :id");
        $update->execute([
            "hash" => $hash,
            "id"   => $user['id']
        ]);

        $msg = "[OK] $table.id={$user['id']} password di-hash.\n";
        echo $msg;              // tampil di layar
        fwrite($log, $msg);     // simpan ke log
    }
}

fwrite($log, "=== Migrasi selesai ===\n\n");
fclose($log);

echo "Migrasi selesai! Detail tersimpan di $logFile\n";
