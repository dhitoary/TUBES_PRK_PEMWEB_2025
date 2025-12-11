<?php
// ====== KONEKSI DATABASE ======
$host = "localhost";
$user = "root";
$pass = "";
$db   = "scholarbridge"; // ganti sesuai database kamu

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// ====== CEK FORM SUBMIT ======
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    // Ambil data dari form
    $tutor_id    = $_POST['tutor_id']; 
    $nama_mapel  = $_POST['nama_mapel'];
    $jenjang     = $_POST['jenjang'];

    // Validasi sederhana
    if (empty($tutor_id) || empty($nama_mapel) || empty($jenjang)) {
        echo "<script>alert('Semua field wajib diisi!'); window.history.back();</script>";
        exit;
    }

    // Query INSERT
    $query = "INSERT INTO tutor_mapel (tutor_id, nama_mapel, jenjang) 
              VALUES ('$tutor_id', '$nama_mapel', '$jenjang')";

    if (mysqli_query($conn, $query)) {
        echo "<script>
                alert('Kelas berhasil ditambahkan!');
                window.location.href = 'dashboard_tutor.php';
              </script>";
    } else {
        echo "<script>
                alert('Gagal menambahkan kelas: " . mysqli_error($conn) . "');
                window.history.back();
              </script>";
    }
}

mysqli_close($conn);
?>
