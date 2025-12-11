<?php
require 'koneksi.php';

$id = $_POST['id'];
$nama_lengkap = $_POST['nama_lengkap'];
$email = $_POST['email'];
$keahlian = $_POST['keahlian'];
$pendidikan = $_POST['pendidikan'];
$status = $_POST['status'];
$harga_per_sesi = $_POST['harga_per_sesi'];
$rating = $_POST['rating'];
$telepon = $_POST['telepon'];
$pengalaman_mengajar = $_POST['pengalaman_mengajar'];
$deskripsi = $_POST['deskripsi'];

// Proses upload foto jika ada
$foto_baru = null;

if (!empty($_FILES['foto_profil']['name'])) {
    $namaFile = time() . "_" . $_FILES['foto_profil']['name'];
    $lokasi = "uploads/" . $namaFile;

    if (move_uploaded_file($_FILES['foto_profil']['tmp_name'], $lokasi)) {
        $foto_baru = $namaFile;
    }
}

// Jika foto baru diupload update foto, jika tidak jangan sentuh field foto_profil
if ($foto_baru) {
    $query = $conn->prepare("
        UPDATE guru SET 
            nama_lengkap=?, email=?, keahlian=?, pendidikan=?, status=?, 
            harga_per_sesi=?, rating=?, telepon=?, pengalaman_mengajar=?, 
            deskripsi=?, foto_profil=? 
        WHERE id=?
    ");
    $query->bind_param(
        "sssssiisissi",
        $nama_lengkap, $email, $keahlian, $pendidikan, $status,
        $harga_per_sesi, $rating, $telepon, $pengalaman_mengajar,
        $deskripsi, $foto_baru, $id
    );
} else {
    $query = $conn->prepare("
        UPDATE guru SET 
            nama_lengkap=?, email=?, keahlian=?, pendidikan=?, status=?, 
            harga_per_sesi=?, rating=?, telepon=?, pengalaman_mengajar=?, 
            deskripsi=?
        WHERE id=?
    ");
    $query->bind_param(
        "sssssiisisi",
        $nama_lengkap, $email, $keahlian, $pendidikan, $status,
        $harga_per_sesi, $rating, $telepon, $pengalaman_mengajar,
        $deskripsi, $id
    );
}

if ($query->execute()) {
    echo "Profil berhasil diperbarui!";
} else {
    echo "Error: " . $query->error;
}
?>
