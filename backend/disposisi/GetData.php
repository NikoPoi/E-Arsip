<?php
include 'koneksi.php';

$sql = "SELECT * FROM disposisi";
$query = mysqli_query($kon,$sql);

while ($row = mysqli_fetch_array($query))
{
    echo '<tr>
            <td>'.$row['id_disposisi'].'</td>
            <td>'.$row['tujuan'].'</td>
            <td>'.$row['isi'].'</td>
            <td>'.$row['catatan'].'</td>
            <td>'.$row['level'].'</td>
            <td>'.$row['kepada'].'</td>
            <td>
              <a class="btn btn-primary" href="view-surat-disposisi.php?id='.$row['id_disposisi'].'">Detail</a>
            </td>
          </tr>';
}
?>

<!-- <td>
<a href="edit-surat-disposisi.php?id='.$row['id_disposisi'].'">Edit</a> |
<a onclick="return confirm(\'Apakah Anda Yakin Menghapus Data ini?\')" href="backend/disposisi/HapusData.php?id='.$row['id_disposisi'].'" >Hapus</a>
</td> -->