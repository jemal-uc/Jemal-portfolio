<?php
session_start();
include "../includes/koneksi.php";

// Cek apakah user sudah login
if (!isset($_SESSION['login'])) {
    header("Location: ../login/index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin - Portofolio</title>
    <!-- Memanggil Bootstrap 5 dari CDN untuk UI yang lebih bagus -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
        <div class="container">
            <a class="navbar-brand" href="#">Dashboard Portfolio</a>
            <div class="d-flex">
                <a href="logout.php" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin keluar?')">Logout</a>
            </div>
        </div>
    </nav>

    <!-- Konten Utama -->
    <div class="container bg-white p-4 rounded shadow-sm">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h4 class="mb-0">Daftar Projek & Sertifikat</h4>
            <a href="tambah.php" class="btn btn-primary">+ Tambah Baru</a>
        </div>

        <div class="table-responsive">
            <table class="table table-hover table-bordered align-middle">
                <thead class="table-dark">
                    <tr>
                        <th width="5%">No</th>
                        <th width="15%">Gambar</th>
                        <th width="20%">Judul</th>
                        <th width="10%">Kategori</th>
                        <th width="40%">Deskripsi</th>
                        <th width="10%" class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    // Mengambil data dari database, urut dari yang paling baru diupload
                    $query = mysqli_query($conn, "SELECT * FROM proyek ORDER BY id DESC");
                    
                    // Cek jika data kosong
                    if(mysqli_num_rows($query) == 0) {
                        echo "<tr><td colspan='6' class='text-center text-muted'>Belum ada data projek.</td></tr>";
                    }

                    while ($row = mysqli_fetch_assoc($query)) {
                    ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td>
                            <!-- Menampilkan thumbnail gambar -->
                            <img src="../uploads/<?php echo $row['gambar']; ?>" alt="thumbnail" class="img-thumbnail" style="max-width: 100px;">
                        </td>
                        <td class="fw-bold"><?php echo $row['judul']; ?></td>
                        <td>
                            <?php if($row['kategori'] == 'projek') { ?>
                                <span class="badge bg-success">Projek</span>
                            <?php } else { ?>
                                <span class="badge bg-warning text-dark">Sertifikat</span>
                            <?php } ?>
                        </td>
                        <td>
                            <!-- Membatasi panjang deskripsi agar tabel tidak terlalu lebar -->
                            <?php echo substr($row['deskripsi'], 0, 100) . '...'; ?>
                        </td>
                        <td class="text-center">
                            <!-- Tombol Hapus -->
                            <a href="hapus.php?id=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>