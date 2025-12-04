<?php
session_start();
require_once '../../config/database.php';

if (!isset($_SESSION['role']) || $_SESSION['role'] != 'learner') {
    header("Location: ../../frontend/pages/auth/login.php?error=unauthorized");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $tutor_id   = htmlspecialchars($_POST['tutor_id'] ?? '');
    $subject_id = htmlspecialchars($_POST['subject_id'] ?? '');
    $date       = htmlspecialchars($_POST['booking_date'] ?? '');
    $learner_id = $_SESSION['user_id'];

    if (empty($tutor_id) || empty($subject_id) || empty($date)) {
        header("Location: ../../frontend/pages/learner/dashboard_siswa.php?error=empty_fields");
        exit();
    }

    // [TODO: Anggota 4]
    // 1. Buat Query INSERT ke tabel 'bookings'
    //    Contoh: INSERT INTO bookings (learner_id, tutor_id, subject_id, date, status) VALUES ...
    // 2. Eksekusi Query dengan mysqli_query
    // 3. Cek keberhasilan

    // --- BATAS AREA ---
    header("Location: ../../frontend/pages/learner/dashboard_siswa.php?status=booking_success");
    exit();

} else {
    header("Location: ../../frontend/pages/learner/dashboard_siswa.php");
    exit();
}
?>