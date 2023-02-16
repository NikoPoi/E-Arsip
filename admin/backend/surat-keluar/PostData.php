<?php
include 'koneksi.php';
//menyimpan data kedalam variabel
$id =$_POST['id'];
$Data1 =$_POST['Data1']; //Id masuk
$Data2 =$_POST['Data2'];// keterangan
$Data3 =$_POST['Data3'];// kepada
$Data4 =$_POST['Data4'];// tanggal keluar
$Data5 =$_POST['Data5'];// tanggal di buat
$Data6 =$_POST['Data6'];// ringkasan


$test = "SELECT * FROM akun Where username ='$id'";

$result = mysqli_query($kon, $test);


$row = mysqli_fetch_array($result);
$id_akun = $row['id_akun'];

	// echo $id_spp ;

$query = "INSERT INTO surat_keluar ( id_keluar, keterangan, kepada, tgl_keluar, tgl_catat,  ringkasan,  id_akun) 
            VALUES ('$Data1', '$Data2', '$Data3', '$Data4','$Data5','$Data6', '$id_akun')";

mysqli_query($kon, $query);



echo "<script>alert('Data Ditambah.');window.location='../../input-surat-keluar.php';</script>";



?>