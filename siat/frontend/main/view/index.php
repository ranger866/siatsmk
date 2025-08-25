<?php
include "../base/base.php";
base_header("SIAKAD");
?>

<div class="main">
    <div id="home" class="home">
        <h1>Sistem Informasi Akademik Sekolah Menengah Kejuruan</h1>
        <p>Platform layanan informasi akademik bagi siswa/siswi Sekolah Menengah Kejuruan</p>
        <div class="home_button">
            <a href="#masuk">Masuk ke Layanan</a>
            <a href="#fitur">Pelajari Selengkapnya</a>
        </div>
    </div>
    <div id="masuk" class="masuk">
        <div class="card_cont">
            <h3>Masuk Sebagai Siswa, Guru, atau Operator</h3>
            <div class="card">
                <img src="../../assets/img/siswa.png" alt="icon_siswa" class="icon_siswa">
                <p class="role">Siswa</p>
                <p>Akses ke informasi akademikmu, seperti jadwal mata pelajaran, nilai, pengumuman lomba dan beasiswa dan lainnya</p>
                <a href="../siswa/siswa_login.php">Masuk</a>
            </div>
            <div class="card">
                <img src="../../assets/img/guru.png" alt="icon_guru">
                <p class="role">Guru</p>
                <p>Kelola aktivitas akademik, seperti absensi, jadwal mengajar, input nilai dan lainnya</p>
                <a href="../guru/guru_login.php">Masuk</a>
            </div>
            <div class="card">
                <img src="../../assets/img/operator.png" alt="icon_operator">
                <p class="role">Operator</p>
                <p>Kelola data akademik, termasuk data siswa, guru, mata pelajaran dan lainnya</p>
                <a href="../operator/operator_login.php">Masuk</a>
            </div>
        </div>
    </div>
</div>

<?php
base_footer();