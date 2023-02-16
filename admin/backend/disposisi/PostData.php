<?php
include 'koneksi.php';
//menyimpan data kedalam variabel
$Data1 =$_POST['Data1']; //Id disposisi
$Data2 =$_POST['Data2'];// tujuan
$Data3 =$_POST['Data3'];// level
$Data4 =$_POST['Data4'];// kepada
$Data5 =$_POST['Data5'];// catatan
$Data6 =$_POST['Data6'];// isi


$query = "INSERT INTO disposisi ( id_disposisi, tujuan, level, kepada, catatan,  isi  ) 
            VALUES ('$Data1', '$Data2', '$Data3', '$Data4','$Data5','$Data6' )";

mysqli_query($kon, $query);



echo "<script>alert('Data Ditambah.');window.location='../../input-surat-disposisi.php';</script>";



?>