<?php
require_once  "../auth/helpers.php";


if (!isset($role)) $role = "";
if (!isset($title)) $title = "Login $role";
$action = "../auth/login.php";
$label = getLabelLogin($role);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../assets/img/logo_siakad.png" type="image/x-icon">
    <link rel="stylesheet" href="../../static/css/login_form_style.css">
    <script src="../../static/js/login_form.js"></script>
    <title><?= htmlspecialchars($title)  ?></title>
</head>
<body>
    <div class="form_wrap">
        <div class="form_cont">
            <div class="form_head">
                <img src="../../assets/img/logo_siakad_vertical.png" alt="logo_siakad">
                <h2>Masuk Sebagai <?= htmlspecialchars($role) ?></h2>
                <p>Selamat Datang di Sistem Informasi Akademik</p>
            </div>
            <form 
            action="<?= $action ?>" 
            method="post" 
            id="body_cont" 
            class="body_cont">
                <div class="body_form">
                    <label for="<?= strtolower($label) ?>">
                        <?= htmlspecialchars($label)?>
                    </label><br>
                    <input 
                        type="text" 
                        id="username" 
                        name="username" 
                        placeholder="Masukkan <?= htmlspecialchars($label) ?>" 
                        autocomplete="username" required>
                </div>
                <div class="body_form">
                    <label for="password">
                        Password
                    </label><br>
                    <input 
                        type="password" 
                        id="password" 
                        name="password" 
                        placeholder="Masukkan Password" 
                        autocomplete="current-password" required>
                    <input type="hidden" name="csrf_token" value="<?= htmlspecialchars(generate_csrfToken()) ?>">
                    <input type="hidden" name="role" value="<?=strtolower($role)?>">
                </div>
                <button type="button" id="btn_login">Masuk</button>
            </form>
        </div>
    </div>

</body>
</html>