<?php include "materi/referensi.php";
$tbh = new DataSantri();
$data_santri = $tbh->read();

if(isset($_GET['hapus_siswa']))
{
    $id = $_GET['hapus_siswa'];
    $status_hapus = $tbh->delete($id);
    if($status_hapus)
    {
        header('Location: index.php');
    }
}
?>
<html>
    <head>
        <title>Index</title>
    </head>
    <body>
    <div class="container">
         <h3>Data Siswa</h3>
            </div>
            <div class="table">
                <a href="tambah.php" class="btn btn-success">Tambah Data</a>
                <hr/>
                <table class="data_santri">
                    <tr>
                        <th>ID</th>
                        <th>Nama Santri</th>
                        <th>Divisi</th>
                        <th>Asal</th>
                        <th>Fungsi</th>
                    </tr>
                    <?php 
                    $no = 1;
                    foreach($data_siswa as $row){
                        echo "<tr>";
                        echo "<td>".$no."</td>";
                        echo "<td>".$row['nama']."</td>";
                        echo "<td>".$row['divisi']."</td>";
                        echo "<td>".$row['asal']."</td>";
                        echo "<td><a href='form_edit.php?id=".$row['id']."'>Update</a>
                        <a href='index.php?hapus_siswa=".$row['id']."'>Hapus</a></td>";
                        echo "</tr>";
                        $no++;
                    }
                    ?>
                </table>
            </div>
    </body>
</html>