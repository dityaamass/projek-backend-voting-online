<?php
session_start();
include 'koneksi.php';

$id_user = $_SESSION['id_user'];
$id_polling = $_GET['id'];

$cek = mysqli_query($conn, 
    "SELECT * FROM tb_vote WHERE id_user='$id_user'"
);

if (mysqli_num_rows($cek) > 0) {
    echo "<script>
        alert('Anda sudah melakukan vote!');
        window.location='vote.php';
    </script>";
    exit;
}

mysqli_query($conn, 
    "INSERT INTO tb_vote (id_user, id_polling) 
     VALUES ('$id_user', '$id_polling')"
);

mysqli_query($conn, 
    "UPDATE tb_polling 
     SET jumlah_suara = jumlah_suara + 1 
     WHERE id_polling='$id_polling'"
);

header("Location: vote.php");
exit;