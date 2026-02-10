<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form Pendaftaran</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .form-card {
            background-color: #088395;
            border-radius: 20px;
            border: 3px solid #000000;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
            padding: 30px;
        }
        body { background-color: #628141; }
    </style>
</head>
<body>

<div class="container d-flex justify-content-center align-items-center" style="min-height:100vh;">
    <div class="form-card w-50">
        <h3 class="text-center mb-4">Form Pendaftaran Himpunan Mahasiswa</h3>
        <form action="simpan.php" method="post">
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
                <label class="form-label">Golongan</label>
                <select name="golongan" class="form-select" required>
                    <option value="">Pilih Golongan</option>
                    <option>A</option>
                    <option>B</option>
                    <option>C</option>
                    <option>D</option>
                    <option>E</option>
                </select>
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-primary px-4">Simpan</button>
                <a href="index.php" class="btn btn-secondary px-3 ms-2">Kembali</a>
            </div>
        </form>
    </div>
</div>

</body>
</html>
