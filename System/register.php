<?php
    include '../database/conn.php';

    $username = $_POST['username'];
    $password = $_POST['pass'];
    $cpassword = $_POST['cpass'];
    $role = $_POST['role'];

    if($password != $cpassword){
        echo '<script> alert("Password did not match"); window.location = "../registration.php"</script>';
    } else {
        $query = "INSERT INTO anggota (username, pass, role) VALUES ('$username', '$password', '$role')";

        $result = mysqli_query($conn, $query);

        if($result){
            echo '<script> alert("Registration Success"); window.location = "../login.php"</script>';
        }
    }
?>