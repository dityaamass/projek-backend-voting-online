<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
include 'database/conn.php';

$judulPolling   = "";
$nama           = "";
$jenisKelamin   = "";
$foto           = "";
$sukses         = "";
$error          = "";

/* =======================
   PROSES DELETE
======================= */
if (isset($_GET['op']) && $_GET['op'] == 'delete') {
    $id = $_GET['id'];

  
    $cek = mysqli_query($conn, "SELECT * FROM tb_vote WHERE id_polling='$id'");

    if (mysqli_num_rows($cek) > 0) {
        echo "<script>
                alert('Data tidak bisa dihapus karena sudah memiliki suara!');
                window.location='buatPolling.php';
              </script>";
        exit;
    }

    mysqli_query($conn, "DELETE FROM tb_polling WHERE id_polling='$id'");
    header("Location: buatPolling.php");
    exit;
}

// proses delete polling
if (isset($_GET['op']) && $_GET['op'] == 'delete_all') {

    mysqli_query($conn, "DELETE FROM tb_vote");

    mysqli_query($conn, "DELETE FROM tb_polling");

    header("Location: buatPolling.php");
    exit;
}

/* =======================
   PROSES INSERT
======================= */
if (isset($_POST['simpan'])) {
    $judulPolling = $_POST['judulPolling'];
    $nama = $_POST['nama'];
    $jenisKelamin = $_POST['Jkel'];

    $foto = $_FILES['foto']['name'];
    $file_tmp = $_FILES['foto']['tmp_name'];

    if ($judulPolling && $nama && $jenisKelamin && $foto) {

        move_uploaded_file($file_tmp, "gambar/" . $foto);

        $sql = "INSERT INTO tb_polling 
                (judul_polling, nama, Jkel, foto_calon, jumlah_suara)
                VALUES 
                ('$judulPolling', '$nama', '$jenisKelamin', '$foto', 0)";

        mysqli_query($conn, $sql);

        header("Location: buatPolling.php");
        exit;

    } else {
        $error = "Semua data wajib diisi";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membuat Polling</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/polling.css">
</head>

<body>
    <ul class="nav justify-content-end bg-light p-2 shadow-sm">
        <li class="nav-item me-auto">
            <img src="gambar/Stikom Bali.png" alt="logo" widht="50" height="50" class="rounded">
        </li>
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="home.php">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="buatPolling.php">Create Vote</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="vote.php">Vote</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="hasilVote.php">Hasil Vote</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-danger" href="login.php">Logout</a>
        </li>
    </ul>
    <h1>SISTEM PEMILIHAN ORGANISASI ITB STIKOM BALI</h1>
    <h5>Silakan Lengkapi Data di Bawah Ini</h5>

    <?php if($error): ?>
        <div class="alert alert-danger"><?= $error ?></div>
    <?php endif; ?>

    <div class="container-fluid mt-4">
        <div class="row justify-content-center">

            <div class="col-md-8 mb-4">
                <div class="card shadow-sm">
                    <div class="card-header bg-secondary text-white">
                        Membuat Polling
                    </div>
                    <div class="card-body">
                        <form method="POST" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label for="polling" class="form-label">Judul Polling</label>
                                <input type="text" class="form-control" id="judulPolling" name = "judulPolling" aria-describedby="polling" value="<?php echo $judulPolling ?>">
                            </div>

                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama</label>
                                <input type="text" class="form-control" id="nama" name="nama" aria-describedby="nama" value="<?php echo $nama ?>">
                            </div>

                            <div class="mb-3">
                                <label for="Jkel" class="form-label">Jenis Kelamin</label>
                                <select class="form-control" name="Jkel" id="Jkel" required>
                                    <option value="">- Jenis Kelamin -</option>
                                    <option value="Laki-Laki" >Laki-laki</option>
                                    <option value="Perempuan" >Perempuan</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="foto" class="form-label">Foto Calon Ketua</label>
                                <input type="file" class="form-control" id="foto" name="foto">
                            </div>

                           <button type="submit" name="simpan" class="btn btn-primary">Simpan Data</button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-md-10">
                <div class="card shadow-sm">
                    <div class="card-header text-white bg-secondary text-center">
                        Tabel Polling
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Judul</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Jenis Kelamin</th>
                                        <th scope="col">Foto</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                <tbody>
                                    <?php
                                        $no = 1;
                                        $data = mysqli_query($conn, "SELECT * FROM tb_polling ORDER BY id_polling DESC");
                                        while ($row = mysqli_fetch_assoc($data)):
                                    ?>

                                            <tr>
                                                <td><?= $no++ ?></td>
                                                <td><?= $row['judul_polling']?></td>
                                                <td><?= $row['nama']?></td>
                                                <td><?= $row['Jkel']?></td>
                                                <td>
                                                    <img src="gambar/<?=$row['foto_calon'] ?>" width="80" alt="">
                                                </td>
                                                <td>
                                                    <a href="buatPolling.php?op=delete&id=<?= $row['id_polling']?>" onclick="return confirm('Apakah Anda Yakin Untuk Menghapus Data?')" class="btn btn-danger btn-sm">Delete</a>
                                                </td>

                                            </tr>
                                            <?php endwhile; ?>
                                </tbody>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>

</html>