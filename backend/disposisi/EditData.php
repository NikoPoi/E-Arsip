<?php
include 'koneksi.php';
//menyimpan data kedalam variabel
$id    =$_POST['id'];

$Data1 =$_POST['Data1']; // tujuan
$Data2 =$_POST['Data2'];// level
$Data3 =$_POST['Data3'];// kepada
$Data4 =$_POST['Data4'];// catatan
$Data5 =$_POST['Data5'];// isi




$query = "UPDATE disposisi SET tujuan='$Data1', level='$Data2', kepada ='$Data3', catatan='$Data4' , isi='$Data5'
            WHERE id_disposisi = '$id'";
mysqli_query($kon, $query);

echo "<script>alert('Data berhasil diubah.');window.location='../../input-surat-disposisi.php';</script>";

?>