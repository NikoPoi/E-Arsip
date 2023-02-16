<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}
?>

<?php

include 'backend/koneksi.php';

// mengambil data barang
$surat_masuk  = mysqli_query($kon,"SELECT * FROM surat_masuk");
$surat_keluar = mysqli_query($kon,"SELECT * FROM surat_keluar");
$disposisi = mysqli_query($kon,"SELECT * FROM disposisi");

// menghitung data barang
$jumlah_surat        = mysqli_num_rows($surat_masuk);
$jumlah_surat_keluar = mysqli_num_rows($surat_keluar);
$jumlah_disposisi    = mysqli_num_rows($disposisi);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
        include('./Components/head.php')
    ?>
    <title>Dashboard | E-Arsip</title>
</head>
<body>
    <?php 
        include('./Components/navbar.php')
    ?>
    <section class="dashboard container-fluid">
        <div class="container d-flex justify-content-between">
            <div class="display-5 fw-normal">Dashboard<div class="h5 fw-normal">Overview & Statistic</div></div>
            <div class="align-self-center d-flex align-items-center d-inline">
                <div class="bg-light border border-1 rounded d-flex ml-4" style="padding-right: 2px;">
                    <img class="calendar img-fluid" src="./assets/images/calendar.png" alt="calendar" width="60px" height="20px">
                    <div class="vr"></div>
                    <div class="text-dark align-self-center text-center" id="tanggal" style="font-size: 19px;"></div>
                </div>
            </div>
        </div>

        <div class="container" style="margin-top: 20px;">
            <div class="row">
                <div class="col-md-4">
                    <a href="./input-surat-masuk.php" class="card text-dark" style="text-decoration: none !important;">
                        <div class="card-body mt-2 d-flex align-items-center justify-content-around">
                            <div class="text-center">
                                <div class="h5 fw-normal">Surat Masuk</div>
                                <p class="display-5 fw-normal"><?php echo $jumlah_surat;?></p>
                            </div>
                            <img class="img-fluid" src="./assets/images/surat-masuk.jpg" alt="Surat Masuk Logo" width="100px" style="height:auto;">
                        </div>
                        <div class="card-footer text-center">
                            Total Surat Masuk
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                <a href="./input-surat-keluar.php" class="card text-dark" style="text-decoration: none !important;">
                        <div class="card-body mt-2 d-flex align-items-center justify-content-around">
                            <div class="text-center">
                                <div class="h5 fw-normal">Surat Keluar</div>
                                <p class="display-5 fw-normal"><?php echo $jumlah_surat_keluar;?></p>
                            </div>
                            <img class="img-fluid" src="./assets/images/surat-masuk.jpg" alt="Surat Keluar Logo" width="100px" style="height:auto;">
                        </div>
                        <div class="card-footer text-center">
                            Total Surat Keluar
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                <a href="./input-surat-disposisi.php" class="card text-dark" style="text-decoration: none !important;">
                        <div class="card-body mt-2 d-flex align-items-center justify-content-around">
                            <div class="text-center">
                                <div class="h5 fw-normal">Surat Disposisi</div>
                                <p class="display-5 fw-normal"><?php echo $jumlah_disposisi;?></p>
                            </div>
                            <img class="img-fluid" src="./assets/images/surat-masuk.jpg" alt="Surat Disposisi Logo" width="100px" style="height:auto;">
                        </div>
                        <div class="card-footer text-center">
                            Total Surat Disposisi
                        </div>
                    </a>
                </div>
            </div>
        </div>
        
        <!-- AGENDA SURAT MASUK -->
        <div class="agenda container mt-4 card">
            <div class="m-4">
                <div class="row d-lg-flex align-items-center">
                    <div class="col">
                        <div class="display-6 fw-normal">
                            Surat Masuk
                        </div>
                        <div class="h5 fw-normal">Overview Surat Masuk</div>
                    </div>
                </div>
    
                <table class="table mt-2">
                    <thead>
                    <tr>
                    <th scope="col">ID Masuk</th>
                    <th scope="col">Ringkasan Surat</th>
                    <th scope="col">Asal Surat</th>
                    <th scope="col">Keterangan</th>
                    <th scope="col">Kepada</th>
                    </tr>
                    </thead>
                    <?php
                include 'backend/surat-masuk/GetData2.php';
                ?>
                </table>
            </div>
        </div>
        <!-- AGENDA SURAT KELUAR -->
        <div class="agenda container mt-4 card mb-4">
            <div class="m-4">
                <div class="row d-lg-flex align-items-center">
                    <div class="col">
                        <div class="display-6 fw-normal">
                            Surat Keluar
                        </div>
                        <div class="h5 fw-normal">Overview Surat Keluar</div>
                    </div>
                    <!-- <div class="col-md-3">
                        <label class="mb-2" for="">Tanggal Masuk</label>
                        <input type="text" class="form-control">
                    </div>-
                    <div class="col-md-3">
                        <label class="mb-2" for="">Tanggal Keluar</label>
                        <input type="text" class="form-control">
                    </div> -->
                </div>
    
                <table class="table mt-2">
                    <thead>
                        <tr>
                        <th scope="col">ID Masuk</th>
                        <th scope="col">Keterangan</th>
                        <th scope="col">Ringkasan</th>
                        <th scope="col">Kepada</th>
                        </tr>
                    </thead>
                    <?php
                include 'backend/surat-keluar/GetData2.php';
                ?>
                </table>
            </div>
        </div>
    </section>

    <?php 
        include('./Components/footer.php')
    ?>
</body>
</html>