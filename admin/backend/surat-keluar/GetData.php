<?php
include 'koneksi.php';

$sql = "SELECT * FROM surat_keluar as a LEFT JOIN akun as b ON a.id_akun = b.id_akun  ";
$query = mysqli_query($kon,$sql);

while ($row = mysqli_fetch_array($query))
{
    echo '<tr>
            <td>'.$row['id_keluar'].'</td>
            <td>'.$row['tgl_keluar'].'</td>
            <td>'.$row['tgl_catat'].'</td>
            <td>'.$row['keterangan'].'</td>
            <td>'.$row['ringkasan'].'</td>
            <td>'.$row['kepada'].'</td>
            <td>'.$row['username'].'</td>
            <td>
            <a href="edit-surat-keluar.php?id='.$row['id_keluar'].'">Edit</a> |
            <a onclick="return confirm(\'Apakah Anda Yakin Menghapus Data ini?\')" href="backend/surat-keluar/HapusData.php?id='.$row['id_keluar'].'" >Hapus</a>
            </td>
          </tr>';
}
?>