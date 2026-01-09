<?php

session_start();
include 'database/conn.php';

if (!isset($_SESSION['id_user'])) {
    header("Location: login.php");
    exit;
}

$id_user = $_SESSION['id_user'];

$cekVote = mysqli_query(
    $conn,
    "SELECT * FROM tb_vote WHERE id_user = '$id_user'"
);

$sudahVote = mysqli_num_rows($cekVote) > 0;

$data = mysqli_query(
    $conn,
    "SELECT * FROM tb_polling ORDER BY id_polling DESC"
);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/vote.css">
</head>

<body>
    <ul class="nav justify-content-end bg-light p-2 shadow-sm">
        <li class="nav-item me-auto">
            <img src="gambar/Stikom Bali.png" alt="logo" widht="50" height="50" class="rounded">
        </li>
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="userHome.php">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="vote.php">Vote</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-danger" href="login.php">Logout</a>
        </li>
    </ul>

    <div class="container text-center mt-5">
        <h1 class="judul">Voting</h1>

        <div class="row justify-content-center g-4">

            <?php while ($row = mysqli_fetch_assoc($data)): ?>

                <div class="col-md-4 col-lg-3">
                    <div class="card" style="width: 18rem;">
                        <img src="gambar/<?= $row['foto_calon'] ?>" class="card-img-top" alt="Foto Kandidat">

                        <div class="card-body text-center">
                            <h5 class="card-title"><?= $row['judul_polling'] ?></h5>
                            <p class="card-text"><?= $row['nama'] ?></p>

                            <?php if ($sudahVote): ?>
                                <button class="btn btn-secondary" disabled>Sudah Vote</button>
                            <?php else: ?>
                                <a href="System/prosesVote.php?id=<?= $row['id_polling'] ?>" class="btn btn-primary">
                                    Vote
                                </a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>

            <?php endwhile; ?>

        </div>
    </div>
</body>

</html>