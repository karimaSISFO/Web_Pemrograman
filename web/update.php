<?php

include "koneksi.php";

$id = $_POST['id'];
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];
$usia = $_POST['usia'];

$sql = "UPDATE biodata SET nama = '$nama',
jenis_kelamin = '$jenis_kelamin',
alamat = '$alamat',
usia = $usia
WHERE id = $id";

if (mysqli_query($koneksi, $sql)) {
    echo "Data Berhasil di Update";
    ?>
    <a href="tabel.php">Lihat Data Tabel</a>
    <?php
} else {
    echo "Error: " . $sql . " " . mysqli_error($koneksi);
}

?>