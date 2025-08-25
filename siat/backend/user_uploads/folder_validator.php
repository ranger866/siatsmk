<?php

// Koneksi database
require_once __DIR__ . '/../database/database.php';

/**
 * Buat folder jika belum ada
 */
function makeFolderIfNotExists($path, $permission = 0755) {
    if (!is_dir($path)) {
        return mkdir($path, $permission, true); // true = recursive
    }
    return false;
}

/**
 * Tulis log file
 */
function writeLog($message) {
    $logDir = __DIR__ . '/../log';
    if (!is_dir($logDir)) {
        mkdir($logDir, 0755, true); // buat folder log jika belum ada
    }

    $logFile = $logDir . '/sync_folders.log';
    $date = date("Y-m-d H:i:s");

    try {
        file_put_contents($logFile, "[$date] $message\n", FILE_APPEND | LOCK_EX);
    } catch (Exception $e) {
        error_log("Gagal menulis log: " . $e->getMessage());
    }

    // tampilkan ke layar juga
    echo "[$date] $message<br>";
}


// Base folder uploads
$baseDir = __DIR__ . "/user_folder";
makeFolderIfNotExists($baseDir);

// Konfigurasi role
$roles = [
    "siswa"    => ["table" => "siswa",    "id_col" => "id_siswa"],
    "guru"     => ["table" => "guru",     "id_col" => "id_guru"],
    "operator" => ["table" => "operator", "id_col" => "id_operator"]
];

foreach ($roles as $role => $conf) {
    $table = $conf['table'];
    $idCol = $conf['id_col'];

    try {
        $stmt = $pdo->query("SELECT $idCol FROM $table");

        while ($id = $stmt->fetchColumn()) {
            $folderPath = "$baseDir/$role/$id";

            if (makeFolderIfNotExists($folderPath)) {
                writeLog("BUAT folder $role: $folderPath");
            } else {
                writeLog("SKIP folder $role sudah ada: $folderPath");
            }
        }
    } catch (Exception $e) {
        writeLog("ERROR tabel $table: " . $e->getMessage());
    }
}

writeLog("=== Sinkronisasi folder selesai ===");
