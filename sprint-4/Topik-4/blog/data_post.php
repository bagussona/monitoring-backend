<?php
session_start();
if (empty($_SESSION['username'])) {
	header("Location: ../blog/login_page/try_login.php");
} else {
?>


<?php include "materi/referensi.php";
$tbh = new DataSantri();
$postingan = $tbh->readPost();

if(isset($_GET['del_post']))
{
    $id = $_GET['del_post'];
    $status_hapus = $tbh->deletePost($id);
    if($status_hapus)
    {
        header('Location: data_post.php');
    }
}
?>
<html>
    <head>
    <link rel="stylesheet" href="my.css">
        <title>Index</title>
    </head>
    <body class="body_index">
    <nav class="navtop1">
    	<div>
            <h1>Postingan</h1>
            <a href="index.php">home</a>
            <a href="data_user.php">d_user</a>
            <a href="../blog/login_page/logout.php">Logout</a>
    	</div>
    </nav>
    <div class="header">
        <div class="konten_kiri">
            <h3>#Postingan | oleh <?php echo $_SESSION['username']; ?> </h3>
            <hr width="180%" align="left">
        </div>
        <div class="konten_mid">
        <!-- <a href="try_post.php"><button class="button" type="button">>Post</button></a> -->
                <!-- <hr width="100%" align="right"> -->
        </div>
        <div class="konten_kanan">
        </div>
        <div class="right_bar"> 
            <?php
            foreach($data_santri as $row){
                echo "<table width='150px' height='50px'>";
                echo "<tr>";
                echo "<td align='right'>".$row['kategori_post']." | "."</td>";
                echo "</tr>";
                echo "</table>";
                }
            ?>
        </div>
</div>  

            <div class="posisi">
            <div class="table">
                <table class="data_santri">
                    <tr><td colspan="5"><td colspan="5"><div class="btn-box"><a href="try_post.php" class="btn btn-success">Tambah Data</a></div></td></td></tr>
                    <tr>
                        <th>ID</th>
                        <th>Judul_post</th>
                        <th>Kategori_post</th>
                        <th>Isi_post</th>
                        <th>Img_post</th>
                        <th>Tgl_post</th>
                        <th>Fungsi</th>
                    </tr>
                    <?php 
                    $no = 1;
                    foreach($postingan as $row){
                        echo "<tr>";
                        echo "<td>".$no."</td>";
                        echo "<td>".$row['judul_post']."</td>";
                        echo "<td>".$row['kategori_post']."</td>";
                        echo "<td>".$row['isi_post']."</td>";
                        echo "<td>".$row['img_post']."</td>";
                        echo "<td>".$row['tgl_post']."</td>";
                        echo "<td style='text-align: center'><a href='try_post_update.php?id=".$row['id']."'>Update</a> - 
                        <a href='data_post.php?del_post=".$row['id']."'>Hapus</a> </td>";
                        
                        echo "</tr>";
                        $no++;
                    }
                    ?>
                </table>
            </div>
                </div>
    </body>
</html>
<?php
}
?>