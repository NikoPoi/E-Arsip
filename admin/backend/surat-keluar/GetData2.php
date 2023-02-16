<?php
include 'koneksi.php';

$sql = "SELECT * FROM surat_keluar LIMIT 5 ";
$query = mysqli_query($kon,$sql);

while ($row = mysqli_fetch_array($query))
{
    echo '<tr>
            <td>'.$row['id_keluar'].'</td>
            <td>'.$row['keterangan'].'</td>
            <td>'.$row['ringkasan'].'</td>
            <td>'.$row['kepada'].'</td>
          </tr>';
}
?>