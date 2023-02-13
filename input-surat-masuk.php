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

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
        Open Modal
        </button>

        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="modal-title h3 text-center" id="staticBackdropLabel">INPUT SURAT MASUK</div>
                        <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                    </div>
                    <div class="modal-body">
                        <form action="">
                            <div class="form-group mb-2">
                                <label for="" class="h6 fw-bold">Nomor Surat</label>
                                <input type="text" name="no_surat" id="no_surat" class="form-control" placeholder="" aria-describedby="helpId">
                            </div>
                            <div class="form-group mb-2">
                                <label for="" class="h6 fw-bold">Asal Surat</label>
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
                                <label for="" class="h6 fw-bold">Asal Surat</label>
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


    <?php 
        include('./Components/footer.php')
    ?>
</body>
</html>