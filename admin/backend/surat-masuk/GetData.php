<?php
include 'koneksi.php';

$sql = "SELECT * FROM surat_masuk as a LEFT JOIN akun as b ON a.id_akun = b.id_akun ";
$query = mysqli_query($kon,$sql);

while ($row = mysqli_fetch_array($query))
{
    echo '<tr>
            <td>'.$row['id_masuk'].'</td>
            <td>'.$row['tgl_masuk'].'</td>
            <td>'.$row['tgl_terima'].'</td>
            <td>'.$row['ringkasan'].'</td>
            <td>'.$row['asal_surat'].'</td>
            <td>'.$row['keterangan'].'</td>
            <td>'.$row['username'].'</td>
            <td>'.$row['kepada'].'</td>
            <td>
            <a href="edit-surat-masuk.php?id='.$row['id_masuk'].'">Edit</a> |
            <a onclick="return confirm(\'Apakah Anda Yakin Menghapus Data ini?\')" href="backend/surat-masuk/HapusData.php?id='.$row['id_masuk'].'" >Hapus</a>
            </td>
          </tr>';
}
?>