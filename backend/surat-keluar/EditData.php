<?php
include 'koneksi.php';
//menyimpan data kedalam variabel
$id    =$_POST['id'];
$id2   =$_POST['id2'];

$Data1 =$_POST['Data1']; //keterangan
$Data2 =$_POST['Data2'];// kepada
$Data3 =$_POST['Data3'];// tgl keluar
$Data4 =$_POST['Data4'];// tg di buat
$Data5 =$_POST['Data5'];// ringkasan


$test = "SELECT * FROM akun Where username ='$id2'";

$result = mysqli_query($kon, $test);


$row = mysqli_fetch_array($result);
$id_akun = $row['id_akun'];

$query = "UPDATE surat_keluar SET keterangan='$Data1', kepada='$Data2', tgl_keluar ='$Data3', tgl_catat='$Data4' , ringkasan='$Data5', id_akun='$id_akun'
            WHERE id_keluar = '$id'";
mysqli_query($kon, $query);

echo "<script>alert('Data berhasil diubah.');window.location='../../input-surat-keluar.php';</script>";

?>