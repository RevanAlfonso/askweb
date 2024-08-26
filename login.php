<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body class="bg-light">
<nav class="navbar navbar-expand-lg navbar-light bg-primary d-flex justify-content-center">
        <h2 class="text-light"><a href="home.php" class="nav-link">SIGMA SKIBIDI</a></h2>
</nav>
<div class="container">
    <form method="post" class="mt-3">
    <input type="nama" name="nama" placeholder="username" class="form-control" autocomplete="off" required>
    <br>
    <input type="password" name="password" placeholder="password" class="form-control" autocomplete="off" required>
    <br>
    <button type="submit" name="login" class="btn btn-primary">Login</button>
</form>
</div>

</body>
</html>
<?php 
if(isset($_POST['login'])) {
    $nama = $_POST['nama'];
    $password = $_POST['password'];

    if($nama == 'admin' && $password == 'admin123') {
        header('Location:log.php');
        exit();
    } else {
        echo 'Akun Salah';
    }
}
?>