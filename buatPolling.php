<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
include 'database/conn.php';

$judulPolling   = "";
$nama           = "";
$jenisKelamin   = "";
$foto           = "";
$sukses         = "";
$error          = "";

// Proses Delete Data
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


//    Proses Insert Data

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
    <title>Membuat Polling</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/polling.css">
</head>

<body class="bg-light">
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

    <div class="container mt-4">

        <h3 class="text-center mb-4">SISTEM PEMILIHAN ORGANISASI ITB STIKOM BALI</h3>

        <?php if ($error): ?>
            <div class="alert alert-danger"><?= $error ?></div>
        <?php endif; ?>

        <!-- FORM INPUT -->
        <div class="card mb-4">
            <div class="card-header bg-secondary text-white">
                Membuat Polling
            </div>
            <div class="card-body">
                <form method="POST" enctype="multipart/form-data">

                    <div class="mb-3">
                        <label>Judul Polling</label>
                        <input type="text" name="judulPolling" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label>Nama</label>
                        <input type="text" name="nama" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label>Jenis Kelamin</label>
                        <select name="Jkel" class="form-control">
                            <option value="">-- Pilih --</option>
                            <option value="Laki-Laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label>Foto Calon</label>
                        <input type="file" name="foto" class="form-control">
                    </div>

                    <button type="submit" name="simpan" class="btn btn-primary">
                        Simpan Data
                    </button>

                </form>
            </div>
        </div>

        <!-- TABEL DATA -->
        <div class="card">
            <div class="card-header bg-secondary text-white text-center">
                Tabel Polling
            </div>
            <div class="card-body table-responsive">
                <table class="table table-bordered">
                    <thead class="table-dark">
                        <tr>
                            <th>No</th>
                            <th>Judul</th>
                            <th>Nama</th>
                            <th>Jenis Kelamin</th>
                            <th>Foto</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        $no = 1;
                        $data = mysqli_query($conn, "SELECT * FROM tb_polling ORDER BY id_polling DESC");
                        while ($row = mysqli_fetch_assoc($data)):
                            ?>

                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $row['judul_polling'] ?></td>
                                <td><?= $row['nama'] ?></td>
                                <td><?= $row['Jkel'] ?></td>
                                <td>
                                    <img src="gambar/<?= $row['foto_calon'] ?>" width="80">
                                </td>
                                <td>
                                    <a href="buatPolling.php?op=delete&id=<?= $row['id_polling'] ?>"
                                        onclick="return confirm('Yakin hapus data?')" class="btn btn-danger btn-sm">
                                        Delete
                                    </a>
                                </td>
                            </tr>

                        <?php endwhile; ?>

                    </tbody>
                    <div class="d-flex justify-content-end mb-3">
                        <a href="buatPolling.php?op=delete_all"
                            onclick="return confirm('Yakin ingin menghapus SEMUA polling dan suara?')"
                            class="btn btn-danger">
                            Hapus Semua Polling
                        </a>
                    </div>
                </table>
            </div>
        </div>

    </div>

</body>

</html>