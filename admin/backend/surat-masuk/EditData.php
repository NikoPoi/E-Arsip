<?php
include 'koneksi.php';
//menyimpan data kedalam variabel
$id    =$_POST['id'];
$id2   =$_POST['id2'];

$Data1 =$_POST['Data1']; //asal surat
$Data2 =$_POST['Data2'];// kepada
$Data3 =$_POST['Data3'];//tgl masuk
$Data4 =$_POST['Data4'];// tgl terima
$Data5 =$_POST['Data5'];// keterangan
$Data6 =$_POST['Data6'];// ringkasan

$test = "SELECT * FROM akun Where username ='$id2'";

$result = mysqli_query($kon, $test);


$row = mysqli_fetch_array($result);
$id_akun = $row['id_akun'];

$query = "UPDATE surat_masuk SET asal_surat	='$Data1', kepada='$Data2', tgl_masuk ='$Data3', tgl_terima='$Data4' , keterangan='$Data5', ringkasan='$Data6', id_akun='$id_akun'
            WHERE id_masuk = '$id'";
mysqli_query($kon, $query);

echo "<script>alert('Data berhasil diubah.');window.location='../../input-surat-masuk.php';</script>";

?>