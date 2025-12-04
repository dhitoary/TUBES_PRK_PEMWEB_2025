<?php
if (session_status() === PHP_SESSION_NONE) session_start();

require_once '../../layouts/header.php';
?>

<div class="container" style="margin-top: 50px;">
    
    <section class="hero-section text-center">
        <h1>Temukan Tutor Terbaik di ScholarBridge</h1>
        <p>Platform edukasi penghubung siswa dan mahasiswa berprestasi.</p>
        
        <div class="search-box" style="margin: 20px 0;">
            <input type="text" placeholder="Cari mata pelajaran..." style="padding: 10px; width: 300px;">
            <button class="btn-primary">Cari</button>
        </div>
    </section>

    <section class="tutor-list" style="margin-top: 40px;">
        <h3>Tutor Rekomendasi</h3>
        
        <div class="card" style="margin-top: 15px;">
            <h4>Nama Tutor (Contoh)</h4>
            <p>Mahasiswa Teknik Informatika - UNILA</p>
            <p><strong>Rp 50.000 / jam</strong></p>
            <a href="#" class="btn-detail">Lihat Detail</a>
        </div>

    </section>

</div>
<?php
require_once '../../layouts/footer.php';
?>