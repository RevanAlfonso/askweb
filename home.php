<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body class="bg-light">
<nav class="navbar navbar-expand-lg navbar-light bg-primary d-flex justify-content-center">
        <h2 class="text-light">SIGMA SKIBIDI</h2>
</nav>

    <div class="container mt-3">
        <form method="post">
            <div class="mb-3">
            <label for="nama">nama</label>
            <input type="text" name="nama" class="form-control" autocomplete="off" required>  
            </div>
            <div class="mb-3">
            <label for="kelompok">Kelompok</label>
            <input type="text" name="kelompok" class="form-control" autocomplete="off" required>
            </div>
            <div class="mb-3">        
            <label for="pertanyaan">pertanyaan</label>
            <input type="text" name="pertanyaan" class="form-control" autocomplete="off" required>
            </div>
            <div class="mb-3">
                <button type="submit" name="kirim" class="btn btn-primary">Kirim</button>
            </div>
        </form>
        <a href="login.php">Laman Admin</a>
    </div>
</body>
</html>

<?php 


if(isset($_POST['kirim'])) {
    $nama = $_POST['nama'];
    $kelompok = $_POST['kelompok'];
    $pertanyaan = $_POST['pertanyaan'];

    $file = fopen('file.txt', 'a');
    fwrite($file, $nama. ','. $kelompok. ','. $pertanyaan. "\n");
    fclose($file);

    echo '<div class="alert alert-success mt-3">Data Berhasil Ditambahkan</div>';
}

?>