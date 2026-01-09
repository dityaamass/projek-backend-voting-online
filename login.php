<?php

session_start();
include 'database/conn.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $username = $_POST['username'];
    $password = $_POST['pass'];

    $query = "SELECT * FROM anggota WHERE username='$username' AND pass='$password'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        $dataUser = mysqli_fetch_assoc($result);

        $_SESSION['id_user'] = $dataUser['id_user'];
        $_SESSION['username'] = $dataUser['username'];

        $role = ($dataUser ['role']);
        $_SESSION['role'] = $role;
        
        if ($role == 'admin') {
            header("Location: adminHome.php");
            exit;
        } else if ($role == 'user') {
            header("Location: userHome.php");
            exit;
        } else {
            echo '<script>alert("Role pengguna tidak valid"); window.location = "login.php";</script>';
             exit;
        }
        
    } else {
        echo '<script>alert("Password anda salah");</script>';
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/login.css">
</head>
<div class="d-flex justify-content-center align-items-center vh-100">
    <div class="box p-4 shadow bg-white rounded" style="width: 350px;">
        <img src="gambar/Stikom Bali.png " alt="" class="d-block mx-auto mb-3" style="width: 100px">

        <body class="body">

            <form method="POST">
                <div class="mb-4">
                    <label class="form-label">Username</label>
                    <input type="text" class="form-control" name="username">
                    <div class="form-text">Silakan masukkan username anda.</div>
                </div>
                <div class="mb-4">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control" name="pass">
                    <div class="form-text">Silakan masukkan password anda.</div>
                </div>
                <div class="text-center">
                    <p class="mt-3">Belum punya akun? <a href="registration.php">Daftar disini!</a></p>
                </div>

                <button type="submit" class="btn btn-primary w-100">Login</buttoon>

            </form>

    </div>
</div>

</body>

</html>