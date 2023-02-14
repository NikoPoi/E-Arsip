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
            <div class="display-5 fw-normal">Surat Keluar<div class="h5 fw-normal">View & Input</div></div>
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
            <?php 
                include('./Components/pagination.php')
            ?>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
            Input Surat Keluar
            </button>
    
            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <div class="modal-title h3 text-center" id="staticBackdropLabel">INPUT SURAT KELUAR</div>
                            <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                        </div>
                        <div class="modal-body">
                            <form action="">
                                <div class="form-group mb-2">
                                    <label for="" class="h6 fw-bold">Nomor Surat</label>
                                    <input type="text" name="no_surat" id="no_surat" class="form-control" placeholder="" aria-describedby="helpId">
                                </div>
                                <div class="form-group mb-2">
                                    <label for="" class="h6 fw-bold">Tujuan Surat</label>
                                    <input type="text" name="no_surat" id="no_surat" class="form-control" placeholder="" aria-describedby="helpId">
                                </div>
                                <div class="row">
                                    <div class="form-group mb-2 col">
                                        <label for="" class="h6 fw-bold">Tanggal Masuk</label>
                                        <input type="text" name="no_surat" id="no_surat" class="form-control" placeholder="" aria-describedby="helpId">
                                    </div>
                                    <div class="form-group mb-2 col">
                                        <label for="" class="h6 fw-bold">Tanggal Keluar</label>
                                        <input type="text" name="no_surat" id="no_surat" class="form-control" placeholder="" aria-describedby="helpId">
                                    </div>
                                </div>
                                <div class="form-group mb-2">
                                    <label for="" class="h6 fw-bold">Keterangan</label>
                                    <input type="text" name="no_surat" id="no_surat" class="form-control" placeholder="" aria-describedby="helpId">
                                </div>
                                <div class="form-group mb-2">
                                    <label for="" class="h6 fw-bold">Ringkasan</label>
                                    <textarea class="form-control" rows="3"></textarea>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save</button>
                        </div>
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