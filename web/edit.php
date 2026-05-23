<?php
include 'koneksi.php';

$id = $_GET['id'];
$sql = "SELECT * FROM biodata WHERE id='$id'";
$hasil = mysqli_query($koneksi, $sql);
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
                <div class="card text-left mt-5 mb-5">
                    <div class="card-header text-center">
                        <h1>Form Biodata</h1>
                    </div>

                    <img class="card-img-top" src="holder.js/100px180/" alt="">

                    <div class="card-body">
                        <form action="update.php" method="post">

                        <?php
                        while($data = mysqli_fetch_array($hasil)) {
                        ?>

                        <input type="hidden" name="id" value="<?php echo $id ?>">

                        <div class="form-group">
                            <label for="nama" class="badge badge-primary">
                                Nama
                            </label>

                            <input type="text"
                                   class="form-control"
                                   name="nama"
                                   id="nama"
                                   placeholder="Masukkan Nama Anda"
                                   value="<?php echo $data['usia'] ?>">
                        </div>

                        <div class="form-check form-check-inline">
                            <label class="form-check-label mr-5">
                                Jenis Kelamin
                            </label>

                            <label class="form-check-label">
                                <input class="form-check-input"
                                       type="radio"
                                       name="jenis_kelamin"
                                       id=""
                                       value="Laki-Laki"
                                       <?php
                                       if($data['jenis_kelamin']=="Laki-Laki")
                                       echo "checked";
                                       ?>>
                                Laki-Laki
                            </label>

                            <label class="form-check-label">
                                <input class="form-check-input"
                                       type="radio"
                                       name="jenis_kelamin"
                                       id=""
                                       value="Perempuan"
                                       <?php
                                       if($data['jenis_kelamin']=="Perempuan")
                                       echo "checked";
                                       ?>>
                                Perempuan
                            </label>
                        </div>

                        <div class="form-group mt-3">
                            <label for="alamat" class="badge badge-primary">
                                Alamat
                            </label>

                            <textarea class="form-control"
                                      name="alamat"
                                      id="alamat"
                                      rows="10"><?php echo $data['alamat'] ?></textarea>
                        </div>

                        <div class="form-group">
                            <label for="usia" class="badge badge-primary">
                                Usia
                            </label>

                            <input type="text"
                                   class="form-control"
                                   name="usia"
                                   id="usia"
                                   placeholder="Masukkan Usia Anda"
                                   value="<?php echo $data['usia'] ?>">
                        </div>

                        <button type="submit" class="btn btn-primary">
                            Kirim
                        </button>

                        <button type="reset" class="btn btn-primary">
                            Batal
                        </button>

                        <?php
                        }
                        ?>

                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</body>
</html>