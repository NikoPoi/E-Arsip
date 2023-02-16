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
            <div class="display-5 fw-normal">Surat Disposisi<div class="h5 fw-normal">View & Input</div></div>
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
                    <th scope="col">Id Disposisi</th>
                    <th scope="col">Tujuan Surat</th>
                    <th scope="col">Isi</th>
                    <th scope="col">Catatan</th>
                    <th scope="col">level</th>
                    <th scope="col">Kepada</th>
                    <th scope="col">Action</th>
                    </tr>
                </thead>
                <?php
                include'backend/disposisi/GetData.php';
                ?>
            </table>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
            Input Surat Disposisi
            </button>
    
            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <div class="modal-title h3 text-center" id="staticBackdropLabel">INPUT SURAT DISPOSISI</div>
                            <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                        </div>
                        <form action="backend/disposisi/PostData.php" method="POST">
                        <div class="modal-body">
                                <div class="form-group mb-2">
                                    <label for="" class="h6 fw-bold">Nomor Surat</label>
                                    <input type="text" name="Data1" class="form-control" placeholder="" aria-describedby="helpId">
                                </div>
                                <div class="row">
                                    <div class="form-group m-2 col">
                                        <label for="" class="h6 fw-bold">Tujuan Surat</label>
                                        <input type="text" name="Data2"  class="form-control" placeholder="" aria-describedby="helpId">
                                    </div>
                                    <div class="form-group m-2 col align-self-end">
                                        <label class="h6" >Sifat Surat</label>
                                            <select name="Data3" class="form-control">
                                                <option value="NO Value" selected > Pilih level</option>
                                                    <option value="Biasa">Biasa</option>
                                                    <option value="Penting">Penting</option>
                                                    <option value="Rahasia">Rahasia</option>
                                            </select>
                                    </div>
                                </div>
                                <div class="form-group mb-2">
                                        <label for="" class="h6 fw-bold">Diteruskan Kepada</label>
                                        <input type="text" name="Data4" id="no_surat" class="form-control" placeholder="" aria-describedby="helpId">
                                    </div>
                                <div class="form-group mb-2">
                                    <label for="" class="h6 fw-bold">Catatan</label>
                                    <input type="text" name="Data5" id="no_surat" class="form-control" placeholder="" aria-describedby="helpId">
                                </div>
                                <div class="form-group mb-2">
                                    <label for="" class="h6 fw-bold">Isi</label>
                                    <textarea class="form-control" name="Data6" rows="3"></textarea>
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