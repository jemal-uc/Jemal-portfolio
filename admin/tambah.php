<?php
session_start();
include "../includes/koneksi.php";

// Proteksi halaman
if (!isset($_SESSION['login'])) {
    header("Location: ../login/index.php");
    exit;
}

// Cek apakah tombol simpan sudah diklik
if (isset($_POST['simpan'])) {
    $judul     = mysqli_real_escape_string($conn, $_POST['judul']);
    $deskripsi = mysqli_real_escape_string($conn, $_POST['deskripsi']);
    $kategori  = $_POST['kategori'];

    // Pengaturan Gambar
    $nama_file = $_FILES['gambar']['name'];
    $ukuran    = $_FILES['gambar']['size'];
    $tmp_name  = $_FILES['gambar']['tmp_name'];
    $error     = $_FILES['gambar']['error'];

    // Cek apakah ada gambar yang diupload
    if ($error === 0) {
        // Berikan nama unik agar file tidak tertimpa jika namanya sama
        $ekstensi = pathinfo($nama_file, PATHINFO_EXTENSION);
        $nama_baru = uniqid() . "." . $ekstensi;

        // Pindahkan ke folder uploads
        if (move_uploaded_file($tmp_name, "../uploads/" . $nama_baru)) {
            // Simpan ke database
            $query = "INSERT INTO proyek (judul, deskripsi, gambar, kategori) 
                      VALUES ('$judul', '$deskripsi', '$nama_baru', '$kategori')";
            
            if (mysqli_query($conn, $query)) {
                echo "<script>alert('Data berhasil ditambahkan!'); window.location='index.php';</script>";
            } else {
                echo "Gagal menyimpan ke database: " . mysqli_error($conn);
            }
        } else {
            echo "Gagal mengunggah gambar.";
        }
    } else {
        echo "Error pada file gambar.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Projek - Writer Mode</title>
</head>
<body>
    <h2>Tambah Projek / Sertifikat Baru</h2>
    <a href="index.php"> Kembali ke Dashboard</a>
    <hr>

    <!-- PENTING: Harus pakai enctype="multipart/form-data" agar bisa upload file -->
    <form action="" method="POST" enctype="multipart/form-data">
        <div style="margin-bottom: 10px;">
            <label>Judul:</label><br>
            <input type="text" name="judul" required style="width: 300px;">
        </div>

        <div style="margin-bottom: 10px;">
            <label>Kategori:</label><br>
            <select name="kategori">
                <option value="projek">Projek</option>
                <option value="sertifikat">Sertifikat</option>
            </select>
        </div>

        <div style="margin-bottom: 10px;">
            <label>Deskripsi:</label><br>
            <textarea name="deskripsi" rows="5" style="width: 300px;" required></textarea>
        </div>

        <div style="margin-bottom: 10px;">
            <label>Pilih Gambar:</label><br>
            <input type="file" name="gambar" required>
        </div>

        <button type="submit" name="simpan">Simpan Projek</button>
    </form>
</body>
</html>