<?php
session_start();
if (!isset($_SESSION['username'])) {
  header("Location: login.php");
}
?>
<?php
  // Ini Koneksi
include 'backend/koneksi.php';

  // mengecek apakah di url ada nilai GET id
  if (isset($_GET['id'])) {
    // ambil nilai id dari url dan disimpan dalam variabel $id
    $id = ($_GET["id"]);

    // menampilkan data dari database yang mempunyai id=$id
    $query = "SELECT * FROM surat_masuk WHERE id_masuk='$id'";
    $result = mysqli_query($kon, $query);
    // jika data gagal diambil maka akan tampil error berikut
    if(!$result){
      die ("Query Error: ".mysqli_errno($kon).
         " - ".mysqli_error($kon));
    }
    // mengambil data dari database
    $data = mysqli_fetch_assoc($result);
      // apabila data tidak ada pada database maka akan dijalankan perintah ini
       if (!count($data)) {
          echo "<script>alert('Data tidak ditemukan pada database');window.location='index.php';</script>";
       }
  } else {
    // apabila tidak ada data GET id pada akan di redirect ke index.php
    echo "<script>alert('Masukkan data id.');window.location='index.php';</script>";
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
            <div class="display-5 fw-normal">Edit Surat Masuk<div class="h5 fw-normal">Edit Surat <?php echo $data['asal_surat'] ?> </div></div>
            <div class="bg-light border border-1 align-self-center d-inline rounded d-flex" style="padding-right: 2px;">
                <img class="calendar img-fluid" src="./assets/images/calendar.png" alt="calendar" width="60px" height="20px">
                <div class="vr"></div>
                <div class="text-dark align-self-center text-center" id="tanggal" style="font-size: 19px;"></div>
            </div>
        </div>

        <div class="container">
        <div class="modal-body">
                            <form action="backend/surat-masuk/EditData.php" method="POST">
                            <input name="id" value="<?php echo $data['id_masuk'] ?>"  hidden />
                            <input name="id2" value="<?php echo $_SESSION['username'] ?>"  hidden />
                                <div class="form-group mb-2">
                                    <label for="" class="h6 fw-bold">Asal Surat</label>
                                    <input type="text" name="Data1" value="<?php echo $data['asal_surat'] ?>" class="form-control"  aria-describedby="helpId">
                                </div>
                                <div class="form-group mb-2">
                                    <label for="" class="h6 fw-bold">Tujuan Surat</label>
                                    <input type="text" name="Data2" value="<?php echo $data['kepada'] ?>" class="form-control" placeholder="" aria-describedby="helpId">
                                </div>
                                <div class="row">
                                    <div class="form-group mb-2 col">
                                        <label for="" class="h6 fw-bold">Tanggal Masuk</label>
                                        <input type="date" name="Data3"  value="<?php echo $data['tgl_masuk'] ?>" class="form-control" placeholder="" aria-describedby="helpId">
                                    </div>
                                    <div class="form-group mb-2 col">
                                        <label for="" class="h6 fw-bold">Tanggal Terima</label>
                                        <input type="date" name="Data4" value="<?php echo $data['tgl_terima'] ?>" class="form-control" placeholder="" aria-describedby="helpId">
                                    </div>
                                </div>
                                <div class="form-group mb-2">
                                    <label for="" class="h6 fw-bold">Keterangan</label>
                                    <input type="text" name="Data5" value="<?php echo $data['keterangan'] ?>" class="form-control" placeholder="" aria-describedby="helpId">
                                </div>
                                <div class="form-group mb-2">
                                    <label for="" class="h6 fw-bold">Ringkasan</label>
                                    <textarea class="form-control" name="Data6"  rows="3"><?php echo $data['ringkasan'] ?></textarea>
                                </div>
                                <div class="form-group mb-2">
                                <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </form>
                        </div>

  
    
            
        </div>
    </section>



    <?php 
        include('./Components/footer.php')
    ?>
</body>
</html>