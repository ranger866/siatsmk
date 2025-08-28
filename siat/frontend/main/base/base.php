<?php
// base.php

function base_header($title = "Sistem Akademik Sekolah") {
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="/img/logo_siakad.png" type="image/x-icon">
  <link rel="stylesheet" href="/css/style.css">
  <script src="/js/script.js" defer></script>
  <title><?= htmlspecialchars($title) ?></title>
</head>
<body>
  <header>
    <img class="logo" src="/img/siakad-ung.png" alt="logo_siakad">
    <nav id="navbar" class="navbar">
      <a href="#home">Beranda</a>
      <a href="#masuk">Masuk</a>
      <a href="#fitur">Fitur</a>
    </nav>
    <button id="burger" class="burger">&#9776;</button>
    <nav id="sidebar" class="sidebar">
        <a href="#home">Beranda</a>
        <a href="#masuk">Masuk</a>
        <a href="#fitur">Fitur</a>
    </nav>
  </header>
<?php
}

function base_footer() {
?>
<footer>
  <p>Copyright&#169 2025. 14A11. All Rights Reserved</p>
</footer>


</body>
</html>
<?php
}
