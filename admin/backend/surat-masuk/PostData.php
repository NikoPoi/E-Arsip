<?php
include 'koneksi.php';
//menyimpan data kedalam variabel
$id =$_POST['id'];
$Data1 =$_POST['Data1']; //Id surat
$Data2 =$_POST['Data2'];// asal surat
$Data3 =$_POST['Data3'];//tujuan surat
$Data4 =$_POST['Data4'];// tanggal masuk
$Data5 =$_POST['Data5'];// tanggal di terima
$Data6 =$_POST['Data6'];// keterangan
$Data7 =$_POST['Data7'];// ringkasamn

$test = "SELECT * FROM akun Where username ='$id'";

$result = mysqli_query($kon, $test);


$row = mysqli_fetch_array($result);
$id_akun = $row['id_akun'];

	// echo $id_spp ;

$query = "INSERT INTO surat_masuk ( id_masuk, asal_surat, kepada, tgl_masuk, tgl_terima,  keterangan,  ringkasan, id_akun) 
            VALUES ('$Data1', '$Data2', '$Data3', '$Data4','$Data5','$Data6','$Data7', '$id_akun')";

mysqli_query($kon, $query);



echo "<script>alert('Data Ditambah.');window.location='../input-surat-masuk.php';</script>";



?>