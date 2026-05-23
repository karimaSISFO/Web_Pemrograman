<?php

include "koneksi.php";

$id = $_GET['id'];

$sql = "DELETE FROM biodata WHERE id = $id";

if (mysqli_query($koneksi, $sql)) {
    ?>
    <script>
        document.location.href = "tabel.php"
    </script>
    <?php
} else {
    echo "Data Gagal Dihapus: " . $sql . " " . mysqli_error($koneksi);
}

?>