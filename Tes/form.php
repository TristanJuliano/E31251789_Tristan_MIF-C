<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Form Pendaftaran Mahasiswa</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
body {
    background-color: #f0f8ff; /* background halaman */
}

.form-card {
    background-color: #ffffffaa; /* semi transparan */
    border-radius: 20px;
    border: 2px solid #000080;
    box-shadow: 0 8px 20px rgba(0,0,0,0.3);
    padding: 30px;
    max-width: 600px;
    margin: 50px auto;
}

/* Tombol transparan */
.btn-transparent {
    background-color: transparent;
    border: 2px solid #0d6efd;
    color: #0d6efd;
    transition: all 0.3s ease;
}

.btn-transparent:hover {
    background-color: #0d6efd;
    color: white;
}

.btn-success-hover {
    background-color: transparent;
    border: 2px solid #000000;
    color: #000000;
    transition: all 0.3s ease;
}

.btn-success-hover:hover {
    background-color: #198754;
    color: white;
}
</style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
<div class="container-fluid">
    <a class="navbar-brand" href="index.php">Sistem Informasi Mahasiswa</a>
</div>
</nav>

<div class="form-card">
    <h3 class="text-center mb-4">Form Pendaftaran HMJTI</h3>

    <form action="simpan.php" method="POST">
        <div class="mb-3">
            <label class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">NIM</label>
            <input type="text" name="nim" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Program Studi</label>
            <input type="text" name="prodi" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Domisili</label>
            <input type="text" name="domisili" class="form-control" required>
        </div>

        <div class="d-flex justify-content-between mt-4">
            <a href="index.php" class="btn btn-transparent">
        ⬅ Kembali ke Beranda
    </a>
            <button type="submit" class="btn btn-success-hover">💾 Simpan Data</button>
        </div>
    </form>
</div>

</body>
</html>
