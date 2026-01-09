
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/login.css">
</head>
<div class="d-flex justify-content-center align-items-center vh-100">
    <div class="box p-4 shadow bg-white rounded" style="width: 350px;">
        <img src="gambar/Stikom Bali.png " alt="" class="d-block mx-auto mb-3" style="width: 100px">

        <body class="body">

            <form action="System/register.php" method="POST" enctype="multipart/form-data">
                <div class="mb-4">
                    <label class="form-label">Username</label>
                    <input id="inputUsername" type="text" class="form-control" name="username" required="required">
                    <div class="form-text">Silakan masukkan username anda.</div>
                </div>

                <div class="mb-4">
                    <label class="form-label">Password</label>
                    <input id="inputPass" type="password" class="form-control" name="pass" required="required">
                    <div class="form-text">Silakan masukkan password anda.</div>
                </div>

                <div class="mb-4">
                    <label for="confirmPassword" class="form-label">Confirmation Password</label>
                    <input id="confirmPass" type="password" id="confirmPassword" class="form-control" name="cpass" required="required">
                    <div class="form-text">Konfirmasi password anda.</div>
                </div>

                <label for="inputRole" class="form-label">Role</label>
                <select class="form-select mb-3" name="role">
                    <option selected>-- Pilih Role Anda</option>
                    <option value='Admin'>Admin</option>
                    <option value='User'>User</option>
                </select>

                <div class="text-center">
                    <p class="mt-3">Sudah punya akun? <a href="login.php">Login disini!</a></p>
                </div>
                <button type="submit" class="btn btn-primary w-100">Register</buttoon>

            </form>

    </div>
</div>

</body>

</html>