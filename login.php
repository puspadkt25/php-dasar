<?php
session_start();

if (isset($_SESSION['login'])) {
    if ($_SESSION['login'] == true) {
        header("Location: mahasiswa.php");
        exit;
    }
}

$email = 'puspadewik25@gmail.com';
$password = '123456';

if (isset($_POST['email']) && isset($_POST['password'])) {
    if ($_POST['email'] != $email) {
        echo "Email tidak terdaftar !";
        exit;
    }

    if ($_POST['password'] != $password) {
        echo "Password salah !";
        exit;
    }

    if ($_POST['email'] == $email && $_POST['password'] == $password) {
        $_SESSION['login'] = true;
        header("Location: mahasiswa.php");
        exit;
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="position-absolute top-50 start-50 translate-middle w-75">
        <div class="card p-5 bg-light">
            <h1 class="text-center">Login Admin</h1>
            <form method="POST">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" name="email">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
            </form>
        </div>
    </div>
</body>

</html>
