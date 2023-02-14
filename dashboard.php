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
    <section class="dashboard container-fluid mt-4">
        <div class="container d-flex justify-content-between">
            <div class="display-5 fw-normal">Dashboard<div class="h5 fw-normal">Overview & Statistic</div></div>
            <div class="bg-light border border-1 align-self-center d-inline rounded d-flex" style="padding-right: 2px;">
                <img class="calendar img-fluid" src="./assets/images/calendar.png" alt="calendar" width="60px" height="20px">
                <div class="vr"></div>
                <div class="text-dark align-self-center text-center" id="tanggal" style="font-size: 19px;"></div>
            </div>
        </div>

        <div class="container" style="margin-top: 20px;">
            <div class="row">
                <div class="col-md-4">
                    <a href="./input-surat-masuk.php" class="card text-dark" style="text-decoration: none !important;">
                        <div class="card-body mt-2 d-flex align-items-center justify-content-around">
                            <div class="text-center">
                                <div class="h5 fw-normal">Surat Masuk</div>
                                <p class="display-5 fw-normal">Data</p>
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
                                <p class="display-5 fw-normal">Data</p>
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
                                <p class="display-5 fw-normal">Data</p>
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
                            Agenda Surat Masuk
                        </div>
                        <div class="h5 fw-normal">Overview Surat Masuk</div>
                    </div>
                    <div class="col-md-3">
                        <label for="">Tanggal Masuk</label>
                        <input type="text" class="form-control">
                    </div>-
                    <div class="col-md-3">
                        <label for="">Tanggal Keluar</label>
                        <input type="text" class="form-control">
                    </div>
                </div>
    
                <table class="table mt-2">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Handle</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        </tr>
                        <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                        </tr>
                        <tr>
                        <th scope="row">3</th>
                        <td colspan="2">Larry the Bird</td>
                        <td>@twitter</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- AGENDA SURAT KELUAR -->
        <div class="agenda container mt-4 card">
            <div class="m-4">
                <div class="row d-lg-flex align-items-center">
                    <div class="col">
                        <div class="display-6 fw-normal">
                            Agenda Surat Keluar
                        </div>
                        <div class="h5 fw-normal">Overview Surat Keluar</div>
                    </div>
                    <div class="col-md-3">
                        <label for="">Tanggal Masuk</label>
                        <input type="text" class="form-control">
                    </div>-
                    <div class="col-md-3">
                        <label for="">Tanggal Keluar</label>
                        <input type="text" class="form-control">
                    </div>
                </div>
    
                <table class="table mt-2">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Handle</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        </tr>
                        <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                        </tr>
                        <tr>
                        <th scope="row">3</th>
                        <td colspan="2">Larry the Bird</td>
                        <td>@twitter</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <?php 
        include('./Components/footer.php')
    ?>
</body>
</html>