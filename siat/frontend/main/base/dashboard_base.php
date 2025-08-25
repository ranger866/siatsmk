<?php
session_start();

require_once "../auth/helpers.php";

// cek apakah sudah login
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header("Location: ../operator/operator_login.php"); // fallback ke login
    exit;
}

$role     = $_SESSION['role'] ?? "guest";
$username = $_SESSION['username'] ?? "unknown";
$id       = $_SESSION['id'] ?? "";

$title = "Dashboard {$role}"

?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="../../assets/img/logo_siakad.png" type="image/x-icon">
  <link rel="stylesheet" href="../../static/css/dashboard_style.css">
  <script src="../../static/js/script.js" defer></script>
  <title><?= htmlspecialchars($title) ?></title>
</head>
<body>


  <header>
    <img class="logo" src="../../assets/img/siakad-ung.png" alt="logo_siakad">
    <nav class="navbar">
      <h3><?= htmlspecialchars($username)?></h3>
      <img class="profile_img" src="../../backend/user_upload/user_folder/<?=$role?>/<?=$id?>/profile_img.jpg" alt="profile_img">
    </nav>



    <nav id="sidebar" class="sidebar">
      <a href="dashboard.php">
        <p>Home</p> 
        <div class="svg_cont">
          <svg class="svg_icon" width="37" height="37" viewBox="0 0 37 37" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M13.2365 17.8614C13.8147 17.2832 14.599 16.9583 15.4167 16.9583H21.5834C22.4011 16.9583 23.1854 17.2832 23.7636 17.8614C24.3419 18.4397 24.6667 19.2239 24.6667 20.0417V32.375C24.6667 33.2264 23.9765 33.9167 23.125 33.9167C22.2736 33.9167 21.5834 33.2264 21.5834 32.375V20.0417L15.4167 20.0417L15.4167 32.375C15.4167 33.2264 14.7265 33.9167 13.875 33.9167C13.0236 33.9167 12.3334 33.2264 12.3334 32.375V20.0417C12.3334 19.2239 12.6582 18.4397 13.2365 17.8614Z" fill="currentColor"/>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M17.5083 4.98717L6.72129 14.2316C6.71861 14.2339 6.71592 14.2362 6.71323 14.2385C6.54195 14.3832 6.40431 14.5636 6.30992 14.767C6.21553 14.9705 6.16665 15.192 6.16671 15.4163V29.2917C6.16671 29.7005 6.32913 30.0927 6.61825 30.3818C6.90737 30.6709 7.2995 30.8333 7.70837 30.8333H29.2917C29.7006 30.8333 30.0927 30.6709 30.3818 30.3818C30.6709 30.0927 30.8334 29.7005 30.8334 29.2917V15.4163C30.8334 15.192 30.7846 14.9705 30.6902 14.767C30.5958 14.5636 30.4581 14.3832 30.2869 14.2385C30.2842 14.2362 30.2815 14.2339 30.2788 14.2316L19.4918 4.98717C19.2141 4.75379 18.8629 4.6258 18.5 4.6258C18.1372 4.6258 17.786 4.75379 17.5083 4.98717ZM15.5146 2.63507C16.3494 1.92955 17.4071 1.54247 18.5 1.54247C19.593 1.54247 20.6507 1.92955 21.4855 2.63507C21.4882 2.63735 21.4909 2.63964 21.4935 2.64193L32.2817 11.8874C32.7934 12.321 33.2047 12.8608 33.4871 13.4693C33.7702 14.0794 33.9168 14.744 33.9167 15.4167C33.9167 15.4168 33.9167 15.4169 33.9167 15.417V29.2917C33.9167 30.5183 33.4294 31.6947 32.5621 32.562C31.6947 33.4294 30.5183 33.9167 29.2917 33.9167H7.70837C6.48175 33.9167 5.30536 33.4294 4.43801 32.562C3.57065 31.6947 3.08337 30.5183 3.08337 29.2917V15.417C3.08337 15.4169 3.08337 15.4168 3.08337 15.4167C3.08327 14.744 3.22989 14.0794 3.51301 13.4693C3.79536 12.8607 4.20671 12.3209 4.71848 11.8873L15.5065 2.64193C15.5092 2.63964 15.5119 2.63735 15.5146 2.63507Z" fill="currentColor"/>
          </svg>
        </div>
      </a>
      <a href="profile.php">
        <p>Profile</p>
        <div class="svg_cont">
          <svg class="svg_icon" width="37" height="37" viewBox="0 0 37 37" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M8.42434 23.8411C9.86994 22.3955 11.8306 21.5833 13.875 21.5833H23.125C25.1693 21.5833 27.13 22.3955 28.5756 23.8411C30.0212 25.2867 30.8333 27.2473 30.8333 29.2917V32.375C30.8333 33.2264 30.1431 33.9167 29.2916 33.9167C28.4402 33.9167 27.75 33.2264 27.75 32.375V29.2917C27.75 28.0651 27.2627 26.8887 26.3953 26.0213C25.528 25.154 24.3516 24.6667 23.125 24.6667H13.875C12.6483 24.6667 11.4719 25.154 10.6046 26.0213C9.73723 26.8887 9.24996 28.0651 9.24996 29.2917V32.375C9.24996 33.2264 8.55973 33.9167 7.70829 33.9167C6.85685 33.9167 6.16663 33.2264 6.16663 32.375V29.2917C6.16663 27.2473 6.97875 25.2867 8.42434 23.8411Z" fill="currentColor"/>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M18.5 6.16668C15.9456 6.16668 13.875 8.23736 13.875 10.7917C13.875 13.346 15.9456 15.4167 18.5 15.4167C21.0543 15.4167 23.125 13.346 23.125 10.7917C23.125 8.23736 21.0543 6.16668 18.5 6.16668ZM10.7916 10.7917C10.7916 6.53448 14.2428 3.08334 18.5 3.08334C22.7572 3.08334 26.2083 6.53448 26.2083 10.7917C26.2083 15.0489 22.7572 18.5 18.5 18.5C14.2428 18.5 10.7916 15.0489 10.7916 10.7917Z" fill="currentColor"/>
          </svg>
        </div>
      </a>
      <a href="jadwal.php">
        <p>Jadwal </p>
        <div class="svg_cont">
          <svg class="svg_icon" width="37" height="37" viewBox="0 0 37 37" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M12.3333 1.54169C13.1847 1.54169 13.875 2.23191 13.875 3.08335V9.25002C13.875 10.1015 13.1847 10.7917 12.3333 10.7917C11.4819 10.7917 10.7916 10.1015 10.7916 9.25002V3.08335C10.7916 2.23191 11.4819 1.54169 12.3333 1.54169Z" fill="currentColor"/>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M24.6667 1.54169C25.5181 1.54169 26.2083 2.23191 26.2083 3.08335V9.25002C26.2083 10.1015 25.5181 10.7917 24.6667 10.7917C23.8152 10.7917 23.125 10.1015 23.125 9.25002V3.08335C23.125 2.23191 23.8152 1.54169 24.6667 1.54169Z" fill="currentColor"/>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M7.70837 7.70833C6.85694 7.70833 6.16671 8.39856 6.16671 9.25V30.8333C6.16671 31.6848 6.85694 32.375 7.70837 32.375H29.2917C30.1431 32.375 30.8334 31.6848 30.8334 30.8333V9.25C30.8334 8.39856 30.1431 7.70833 29.2917 7.70833H7.70837ZM3.08337 9.25C3.08337 6.69568 5.15406 4.625 7.70837 4.625H29.2917C31.846 4.625 33.9167 6.69568 33.9167 9.25V30.8333C33.9167 33.3876 31.846 35.4583 29.2917 35.4583H7.70837C5.15406 35.4583 3.08337 33.3876 3.08337 30.8333V9.25Z" fill="currentColor"/>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M3.08337 15.4167C3.08337 14.5652 3.7736 13.875 4.62504 13.875H32.375C33.2265 13.875 33.9167 14.5652 33.9167 15.4167C33.9167 16.2681 33.2265 16.9583 32.375 16.9583H4.62504C3.7736 16.9583 3.08337 16.2681 3.08337 15.4167Z" fill="currentColor"/>
          </svg>
        </div>
      </a>
      <?php if ($role === "siswa" | $role === "guru"):?>
        <a href="nilai.php">
          <p>Nilai</p>
          <div class="svg_cont">
            <svg class="svg_icon" width="37" height="37" viewBox="0 0 37 37" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" clip-rule="evenodd" d="M18.5 9.25C19.3515 9.25 20.0417 9.94023 20.0417 10.7917V32.375C20.0417 33.2264 19.3515 33.9167 18.5 33.9167C17.6486 33.9167 16.9584 33.2264 16.9584 32.375V10.7917C16.9584 9.94023 17.6486 9.25 18.5 9.25Z" fill="currentColor"/>
              <path fill-rule="evenodd" clip-rule="evenodd" d="M2.44471 3.98643C3.02295 3.40819 3.80721 3.08334 4.62496 3.08334H12.3333C14.3777 3.08334 16.3383 3.89547 17.7839 5.34106C18.0433 5.60049 18.2824 5.87651 18.5 6.16662C18.7176 5.87651 18.9566 5.60049 19.216 5.34106C20.6616 3.89547 22.6222 3.08334 24.6666 3.08334H32.375C33.1927 3.08334 33.977 3.40819 34.5552 3.98643C35.1334 4.56467 35.4583 5.34893 35.4583 6.16668V26.2083C35.4583 27.0261 35.1334 27.8104 34.5552 28.3886C33.977 28.9668 33.1927 29.2917 32.375 29.2917H23.125C22.3072 29.2917 21.5229 29.6165 20.9447 30.1948C20.3665 30.773 20.0416 31.5573 20.0416 32.375C20.0416 33.2264 19.3514 33.9167 18.5 33.9167C17.6485 33.9167 16.9583 33.2264 16.9583 32.375C16.9583 31.5573 16.6334 30.773 16.0552 30.1948C15.477 29.6165 14.6927 29.2917 13.875 29.2917H4.62496C3.80721 29.2917 3.02295 28.9668 2.44471 28.3886C1.86648 27.8104 1.54163 27.0261 1.54163 26.2083V6.16668C1.54163 5.34893 1.86648 4.56467 2.44471 3.98643ZM18.5 28.2961C18.5849 28.1998 18.6731 28.1059 18.7645 28.0145C19.9209 26.858 21.4895 26.2083 23.125 26.2083H32.375V6.16668H24.6666C23.44 6.16668 22.2636 6.65395 21.3963 7.52131C20.5289 8.38866 20.0416 9.56505 20.0416 10.7917C20.0416 11.6431 19.3514 12.3333 18.5 12.3333C17.6485 12.3333 16.9583 11.6431 16.9583 10.7917C16.9583 9.56505 16.471 8.38866 15.6037 7.52131C14.7363 6.65395 13.5599 6.16668 12.3333 6.16668H4.62496V26.2083H13.875C15.5105 26.2083 17.079 26.858 18.2355 28.0145C18.3268 28.1059 18.415 28.1998 18.5 28.2961Z" fill="currentColor"/>
            </svg>
          </div>
        </a>
        <a href="kelas.php">
          <p>Kelas</p>
          <div class="svg_cont">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-school-icon lucide-school svg_icon"><path d="M14 21v-3a2 2 0 0 0-4 0v3"/><path d="M18 5v16"/><path d="m4 6 7.106-3.79a2 2 0 0 1 1.788 0L20 6"/><path d="m6 11-3.52 2.147a1 1 0 0 0-.48.854V19a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-5a1 1 0 0 0-.48-.853L18 11"/><path d="M6 5v16"/><circle cx="12" cy="9" r="2"/></svg>
          </div>
        </a>
      <?php elseif ($role === "operator"): ?>
        <a href="kelola_user.php">
          <p>Users</p>
          <div class="svg_cont">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-users-icon lucide-users svg_icon"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><path d="M16 3.128a4 4 0 0 1 0 7.744"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><circle cx="9" cy="7" r="4"/></svg>
          </div>
        </a>
        <?php endif;?>
      <a href="pengumuman.php">
        <p>Info</p>
        <div class="svg_cont">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-megaphone-icon lucide-megaphone svg_icon"><path d="M11 6a13 13 0 0 0 8.4-2.8A1 1 0 0 1 21 4v12a1 1 0 0 1-1.6.8A13 13 0 0 0 11 14H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2z"/><path d="M6 14a12 12 0 0 0 2.4 7.2 2 2 0 0 0 3.2-2.4A8 8 0 0 1 10 14"/><path d="M8 6v8"/></svg>
        </div>
      </a>
      <a href="../auth/logout.php">
        <p>Logout</p>
        <div class="svg_cont">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-log-out-icon lucide-log-out svg-icon"><path d="m16 17 5-5-5-5"/><path d="M21 12H9"/><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"/></svg>
        </div>
      </a>
    </nav>
  </header>

  <?php include "dashboard_home_content.php" ?>

</body>
</html>
