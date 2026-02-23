<?php
include 'koneksi.php';
$query = "SELECT * FROM ulasan_film ORDER BY id DESC";
$result = mysqli_query(mysql: $conn, query: $query);
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Pert. 3 - PHP & SQL</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body class="bg-body-secondary">
    <div class="container py-5">

        <!-- headers -->
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="fw-bold">Films that I've watched :</h1>
            <a href="tambah.php" class="btn btn-primary btn-lg">Tambah</a>
        </div>

        <div class="row g-4">
            <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">

                            <div class="d-flex justify-content-between">
                                <h4 class="card-title mb-2 me-2">
                                    <?php echo htmlspecialchars($row['judul_film']); ?>
                                </h4>

                                <p class="mb-2 fs-5 text-nowrap ms-auto">
                                    Rate: <?php echo $row['nilai']; ?>/5
                                </p>
                            </div>

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