<?php 

$nama = $_GET['nama'];

$file = file('file.txt');
$data = fopen('file.txt', 'w');

foreach ($file as $simpan) {
    list($data_nama) = explode(',', trim($simpan));

    if($data_nama != $nama) {
        fwrite($data, $simpan);
    }
}
fclose($data);

header('Location: log.php');
exit;
?>
