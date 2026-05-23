<?php
include "koneksi.php";

$sql = "SELECT * FROM biodata";
$hasil = mysqli_query($koneksi, $sql);
$jumlah = mysqli_num_rows($hasil);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-8 m-auto">

                <table class="table table-sm table-inverse mt-5 mb-5">
                    <thead class="thead-default bg-dark text-white">
                        <tr>
                            <th>Nomor</th>
                            <th>Nama</th>
                            <th>Jenis Kelamin</th>
                            <th>Alamat</th>
                            <th>Usia</th>
                            <th colspan="2">Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        while ($data = mysqli_fetch_array($hasil)) {
                        ?>

                        <tr>
                            <td><?php echo $data['id']; ?></td>
                            <td><?php echo $data['nama']; ?></td>
                            <td><?php echo $data['jenis_kelamin']; ?></td>
                            <td><?php echo $data['alamat']; ?></td>
                            <td><?php echo $data['usia']; ?></td>

                            <td>
                                <a href="delete.php?id=<?php echo $data['id']; ?>"
                                   class="btn btn-danger"
                                   onclick="return confirm('Apakah Anda Ingin Benar-Benar Menghapus ?')">
                                   Hapus
                                </a>
                            </td>

                            <td>
                                <a href="edit.php?id=<?php echo $data['id']; ?>"
                                   class="btn btn-primary">
                                   Edit
                                </a>
                            </td>
                        </tr>

                        <?php
                        }
                        ?>
                    </tbody>

                </table>

            </div>
        </div>
    </div>
</body>
</html>