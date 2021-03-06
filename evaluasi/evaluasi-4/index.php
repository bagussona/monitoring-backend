<?php
session_start();
if (empty($_SESSION['username'])) {
	header("Location: login_page/try_login.php");
} else {
?>


<?php include "materi/referensi.php";
$tbh = new DataSantri();
$data_santri = $tbh->read();

if(isset($_GET['hapus_santri']))
{
    $id = $_GET['hapus_santri'];
    $status_hapus = $tbh->delete($id);
    if($status_hapus)
    {
        header('Location: index.php');
    }
}
?>
<html>
    <head>
    <link rel="stylesheet" href="my.css">
        <title>Index</title>
    </head>
    <body class="body_index">
    <nav class="navtop">
    	<div>
            <h1>Data Santri</h1>
            <a href="data_user.php">data_user</a>
            <a href="login_page/logout.php">Logout</a>
    	</div>
    </nav>
            <div class="beranda">
                <h3>#Beranda | <?php echo $_SESSION['username']; ?> </h3>
            </div>            
            <div class="table">
            <hr/><br>
                <table class="data_santri">
                    <tr>><td colspan="4"><td colspan="4"><div class="btn-box"><a href="try_tambah.php" class="btn btn-success">Tambah Data</a></div></td></td></tr>
                    <tr>
                        <th>ID</th>
                        <th>Nama Santri</th>
                        <th>Divisi</th>
                        <th>Asal</th>
                        <th>Fungsi</th>
                    </tr>
                    <?php 
                    $no = 1;
                    foreach($data_santri as $row){
                        echo "<tr>";
                        echo "<td>".$no."</td>";
                        echo "<td>".$row['nama']."</td>";
                        echo "<td>".$row['divisi']."</td>";
                        echo "<td id='asal'>".$row['asal']."</td>";
                        echo "<td><a href='try_perbarui.php?id=".$row['id']."'>Update</a> | 
                        <a href='index.php?hapus_santri=".$row['id']."'>Hapus</a> </td>";
                        
                        echo "</tr>";
                        $no++;
                    }
                    ?>
                </table>
            </div>
    </body>
</html>
<?php
}
?>