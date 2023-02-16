<?php
include 'koneksi.php';

$sql = "SELECT * FROM surat_masuk LIMIT 0,5";
$query = mysqli_query($kon,$sql);

while ($row = mysqli_fetch_array($query))
{
    echo '<tr>
            <td>'.$row['id_masuk'].'</td>
            <td>'.$row['ringkasan'].'</td>
            <td>'.$row['asal_surat'].'</td>
            <td>'.$row['keterangan'].'</td>
            <td>'.$row['kepada'].'</td>
          </tr>';
}
?>