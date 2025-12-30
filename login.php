<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="login.css">
    <link href='https://cdn.boxicons.com/3.0.6/fonts/basic/boxicons.min.css' rel='stylesheet'>
</head>
<div class="d-flex justify-content-center align-items-center vh-100">
    <div class="box p-4 shadow bg-white rounded" sytle="width: 500px;">
        <img src="gambar/Stikom Bali.png" alt="" class="d-block mx-auto mb-3" style="width: 100px">

        <body class="body">
            <form method="">
                <div class="mb-4">
                    <label class="form-label">Username</label>
                    <div class="input-group">
                        <span class="input-group-text">
                            <i class='bxr  bx-user'></i>
                        </span>
                        <input type="text" class="form-control ps-5" name="username">
                    </div>
                    <div class="form-text">Silakan Masukan Username Anda</div>
                </div>

                <div class="mb-4">
                    <label class="form-label">Password</label>
                    <div class="input-group">
                        <span class="input-group-text">
                            <i class='bxr  bx-lock'></i>
                        </span>
                        <input type="password" class="form-control ps-5" name="pass">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary w-100">Login</button>
            </form>
    </div>
</div>

</body>

</html>