<?php
include 'koneksi.php';

if (isset($_POST['submit'])) {
    $judul  = $_POST['judul'];
    $nilai  = $_POST['nilai'];
    $ulasan = $_POST['ulasan'];

    $query = "INSERT INTO buku (judul, nilai, ulasan)
              VALUES ('$judul', '$nilai', '$ulasan')";

    if (mysqli_query($conn, $query)) {
        header("Location: index.php");
        exit;
    } else {
        $error = "Gagal menambahkan data.";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Buku</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container py-5">
    <div class="col-md-6 mx-auto">

        <div class="card shadow">
            <div class="card-body">
                <h3 class="mb-4">Tambah Buku</h3>

                <?php if (isset($error)) { ?>
                    <div class="alert alert-danger">
                        <?php echo $error; ?>
                    </div>
                <?php } ?>

                <form method="POST">

                    <div class="mb-3">
                        <label class="form-label">Judul</label>
                        <input type="text" name="judul" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Rating</label>
                        <select name="nilai" class="form-select" required>
                            <option value="">Pilih Rating</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Ulasan</label>
                        <textarea name="ulasan" class="form-control" rows="4" required></textarea>
                    </div>

                    <div class="d-flex justify-content-between">
                        <a href="index.php" class="btn btn-secondary">Kembali</a>
                        <button type="submit" name="submit" class="btn btn-primary">
                            Simpan
                        </button>
                    </div>

                </form>

            </div>
        </div>

    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
