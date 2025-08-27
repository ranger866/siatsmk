<?php
include "../base/base.php";
base_header("SIAKAD");
?>

<div class="main">

    <div id="home" class="home">
        <h1>Sistem Informasi Akademik Sekolah Menengah Kejuruan</h1>
        <p>Platform layanan informasi akademik terpusat bagi civitas akademika Sekolah Menengah Kejuruan</p>
        <div class="home_button">
            <a href="#masuk">Masuk ke Layanan</a>
            <a href="#fitur">Pelajari Selengkapnya</a>
        </div>
    </div>

    <div id="masuk" class="masuk">
        <div class="card_container">
            <div class="card_title">
                <h3>Masuk Sebagai Siswa, Guru, atau Operator</h3>
            </div>
            <div class="content_card">
                <div class="card">
                    <img src="/img/siswa.png" alt="icon_siswa" class="icon_siswa">
                    <p class="role">Siswa</p>
                    <p>Akses ke informasi akademikmu, seperti jadwal mata pelajaran, nilai, pengumuman lomba dan beasiswa dan lainnya</p>
                    <a href="/siswa/siswa_login.php">Masuk</a>
                </div>
                <div class="card">
                    <img src="/img/guru.png" alt="icon_guru">
                    <p class="role">Guru</p>
                    <p>Kelola aktivitas akademik, seperti absensi, jadwal mengajar, input nilai dan lainnya</p>
                    <a href="/guru/guru_login.php">Masuk</a>
                </div>
                <div class="card">
                    <img src="/img/operator.png" alt="icon_operator">
                    <p class="role">Operator</p>
                    <p>Kelola data akademik, termasuk data siswa, guru, mata pelajaran dan lainnya</p>
                    <a href="/operator/operator_login.php">Masuk</a>
                </div>
            </div>
        </div>
    </div>

    <div id="fitur" class="fitur">
        <h3>Kelebihan SIAKAD</h3>
        <div class="fitur_container">
            <div class="content_fitur">
                <div class="fitur_head">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="svg_icon lucide lucide-briefcase-business-icon lucide-briefcase-business"><path d="M12 12h.01"/><path d="M16 6V4a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v2"/><path d="M22 13a18.15 18.15 0 0 1-20 0"/><rect width="20" height="14" x="2" y="6" rx="2"/></svg>
                </div>
                <p class="fitur_title">Terintegrasi</p>
                <p>Data terintegrasi dalam satu sistem, memudahkan pengelolaan dan pelaporan data</p>
            </div>
            <div class="content_fitur">
                <div class="fitur_head">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="svg_icon lucide lucide-book-check-icon lucide-book-check"><path d="M4 19.5v-15A2.5 2.5 0 0 1 6.5 2H19a1 1 0 0 1 1 1v18a1 1 0 0 1-1 1H6.5a1 1 0 0 1 0-5H20"/><path d="m9 9.5 2 2 4-4"/></svg>
                </div>
                <p class="fitur_title">Efektif & Efisien</p>
                <p>Data yang akurat, relevan, untuk memaksimalkan produktivatas dan menghemat sumber daya</p>
            </div>
            <div class="content_fitur">
                <div class="fitur_head">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="svg_icon lucide lucide-brain-circuit-icon lucide-brain-circuit"><path d="M12 5a3 3 0 1 0-5.997.125 4 4 0 0 0-2.526 5.77 4 4 0 0 0 .556 6.588A4 4 0 1 0 12 18Z"/><path d="M9 13a4.5 4.5 0 0 0 3-4"/><path d="M6.003 5.125A3 3 0 0 0 6.401 6.5"/><path d="M3.477 10.896a4 4 0 0 1 .585-.396"/><path d="M6 18a4 4 0 0 1-1.967-.516"/><path d="M12 13h4"/><path d="M12 18h6a2 2 0 0 1 2 2v1"/><path d="M12 8h8"/><path d="M16 8V5a2 2 0 0 1 2-2"/><circle cx="16" cy="13" r=".5"/><circle cx="18" cy="3" r=".5"/><circle cx="20" cy="21" r=".5"/><circle cx="20" cy="8" r=".5"/></svg>
                </div>
                <p class="fitur_title">Pengembangan Berkelanjutan</p>
                <p>Sistem terus dikembangkan dan diperbarui sesuai dengan kebutuhan</p>
            </div>
            <div class="content_fitur">
                <div class="fitur_head">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class=" svg_icon lucide lucide-thumbs-up-icon lucide-thumbs-up"><path d="M7 10v12"/><path d="M15 5.88 14 10h5.83a2 2 0 0 1 1.92 2.56l-2.33 8A2 2 0 0 1 17.5 22H4a2 2 0 0 1-2-2v-8a2 2 0 0 1 2-2h2.76a2 2 0 0 0 1.79-1.11L12 2a3.13 3.13 0 0 1 3 3.88Z"/></svg>
                </div>
                <p class="fitur_title">Mudah</p>
                <p>Pengelolaan data akademik yang mudah dan simpel</p>
            </div>
        </div>
    </div>

</div>

<?php
base_footer();