<?php

include "koneksi.php";

$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];
$usia = $_POST['usia'];

$sql = "INSERT INTO biodata (nama, jenis_kelamin, alamat, usia)
VALUES ('$nama','$jenis_kelamin','$alamat','$usia')";

if (mysqli_query($koneksi, $sql)) {
    echo "Data Berhasil di Simpan";
    ?>
    <a href="tabel.php">Lihat Data Tabel</a>
    <?php
} else {
    echo "Error: " . $sql . " " . mysqli_error($koneksi);
}

?>