<?php
include 'koneksi.php';
$query = "SELECT * FROM buku ORDER BY id DESC";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Website Ulasan Buku</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body class="bg-light">
    <div class="container py-5">

        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="fw-bold">Buku Favorit</h1>
            <a href="tambah.php" class="btn btn-primary">Tambah</a>
        </div>

        <div class="row g-4">
            <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">
                                <?php echo htmlspecialchars($row['judul']); ?>
                            </h5>

                            <p class="text-warning mb-2">
                                Rating: <?php echo $row['nilai']; ?>/5
                            </p>

                            <p class="card-text">
                                <?php echo htmlspecialchars($row['ulasan']); ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>