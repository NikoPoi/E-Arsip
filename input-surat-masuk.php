<?php
    session_start();
    if (!isset($_SESSION['username'])) {
        header("Location: login.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
        include('./Components/head.php')
    ?>
    <title>Surat Masuk | E-Arsip</title>
</head>
<body>
    <?php
        include('./Components/navbar.php')
    ?>
    <section class="container-fluid">
        <div class="container d-flex justify-content-between">
            <div class="display-5 fw-normal">Surat Masuk<div class="h5 fw-normal">View & Input</div></div>
            <div class="bg-light border border-1 align-self-center d-inline rounded d-flex" style="padding-right: 2px;">
                <img class="calendar img-fluid" src="./assets/images/calendar.png" alt="calendar" width="60px" height="20px">
                <div class="vr"></div>
                <div class="text-dark align-self-center text-center" id="tanggal" style="font-size: 19px;"></div>
            </div>
        </div>

        <div class="container">
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">ID Surat</th>
                    <th scope="col">Tanggal Masuk</th>
                    <th scope="col">Tanggal Terima</th>
                    <th scope="col">Ringkasan Surat</th>
                    <th scope="col">Asal Surat</th>
                    <th scope="col">Keterangan</th>
                    <th scope="col">ID Petugas</th>
                    <th scope="col">Kepada</th>
                    <th scope="col">Action</th>
                    </tr>
                </thead>
                <?php
                include 'backend/surat-masuk/GetData.php';
                ?>
                <!-- <tbody>
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
                </tbody> -->
            </table>
            <?php 
                include('./Components/pagination.php')
            ?>

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
            Input Surat Masuk
            </button>
    
            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <div class="modal-title h3 text-center" id="staticBackdropLabel">INPUT SURAT MASUK</div>
                            <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                        </div>
                        <form action="backend/surat-masuk/PostData.php" method="POST">
                        <div class="modal-body">
                            <input name="id" value="<?php echo $_SESSION['username'] ?>"  hidden />
                                <div class="form-group mb-2">
                                    <label for="" class="h6 fw-bold">ID Surat</label>
                                    <input type="text" name="Data1"  class="form-control" placeholder="" aria-describedby="helpId">
                                </div>
                                <div class="form-group mb-2">
                                    <label for="" class="h6 fw-bold">Asal Surat</label>
                                    <input type="text" name="Data2" id="no_surat" class="form-control" placeholder="" aria-describedby="helpId">
                                </div>
                                <div class="form-group mb-2">
                                    <label for="" class="h6 fw-bold">Tujuan Surat</label>
                                    <input type="text" name="Data3" id="no_surat" class="form-control" placeholder="" aria-describedby="helpId">
                                </div>
                                <div class="row">
                                    <div class="form-group mb-2 col">
                                        <label for="" class="h6 fw-bold">Tanggal Masuk</label>
                                        <input type="date" name="Data4" id="no_surat" class="form-control" placeholder="" aria-describedby="helpId">
                                    </div>
                                    <div class="form-group mb-2 col">
                                        <label for="" class="h6 fw-bold">Tanggal Terima</label>
                                        <input type="date" name="Data5" id="no_surat" class="form-control" placeholder="" aria-describedby="helpId">
                                    </div>
                                </div>
                                <div class="form-group mb-2">
                                    <label for="" class="h6 fw-bold">Keterangan</label>
                                    <input type="text" name="Data6" id="no_surat" class="form-control" placeholder="" aria-describedby="helpId">
                                </div>
                                <div class="form-group mb-2">
                                    <label for="" class="h6 fw-bold">Ringkasan</label>
                                    <textarea class="form-control" name="Data7" rows="3"></textarea>
                                </div>
                                <div class="form-group mb-2">
                                <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </div>
                            <div class="form-group modal-footer">
                                <button type="submit" class="btn btn-primary">Save</button>
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <?php 
        include('./Components/footer.php')
    ?>
</body>
</html>