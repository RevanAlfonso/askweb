<?php 
$log = file('file.txt');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
</head>
<body class="bg-light">
<nav class="navbar navbar-expand-lg navbar-light bg-primary d-flex justify-content-center">
        <h2 class="text-light"><a href="home.php" class="nav-link">SIGMA SKIBIDI</a></h2>
</nav>
<div class="container">
    <h2 class="display-5 mt-3">Daftar Pertanyaan</h2>
    <?php foreach($log as $index => $data) :
        list($nama, $kelompok, $pertanyaan) = explode(',', trim($data));
        ?>
    <table class="table table-bordered mt-3">
        <tr>
            <th>Kelompok : </th>
            <td><?= htmlspecialchars($kelompok); ?></td>
        </tr>
        <tr>
            <th>Nama : </th>
            <td><?= htmlspecialchars($nama); ?></td>
        </tr>
        <tr>
            <th>Pertanyaan : </th>
            <td><?= htmlspecialchars($pertanyaan); ?></td>
        </tr>
        <tr>
            <td>
                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal<?= $index; ?>">Hapus Pertanyaan</button>
            </td>
        </tr>
    </table>

    <!-- Modal untuk setiap pertanyaan -->
    <div class="modal fade" id="deleteModal<?= $index; ?>" tabindex="-1" aria-labelledby="deleteModalLabel<?= $index; ?>" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="deleteModalLabel<?= $index; ?>">Hapus Pertanyaan?</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            Apakah anda yakin menghapus pertanyaan dari <strong><?= htmlspecialchars($nama); ?></strong>?
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            <a href="delete.php?nama=<?= urlencode($nama); ?>" class="btn btn-danger">Hapus Pertanyaan</a>
          </div>
        </div>
      </div>
    </div>
    <?php endforeach; ?>
</div>
</body>
</html>
