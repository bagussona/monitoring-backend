<?php
session_start();
if (empty($_SESSION['username'])) {
	header("Location: login_page/try_login.php");
} else {
?>


<?php include "materi/referensi.php";
$tbh = new DataSantri();
$data_user = $tbh->read1();

if(isset($_GET['del_post']))
{
    $id = $_GET['del_post'];
    $status_hapus = $tbh->deleteUser($id);
    if($status_hapus)
    {
        header('Location: data_user.php');
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
        <h1>User Login</h1>
        <!-- <a href="index.php">home</a> -->
        <a href="index.php">home</a>
        <a href="index_postingan.php">d_post</a>
        <a href="../blog/login_page/logout.php">logout</a>
    </div>
</nav>           
<div class="header">
        <div class="konten_kiri">
            <h3>#user_login | oleh <?php echo $_SESSION['username']; ?> </h3>
            <hr width="180%" align="left">
        </div>
        <div class="konten_mid">
        <a href="try_post.php"><button class="button" type="button">>New User</button></a>
                <!-- <hr width="100%" align="right"> -->
        </div>
        <div class="konten_kanan">

        </div>
        <div class="right_bar"> 
        </div>
</div>
<div class="beranda">
    <div class="posisi">
    <table class="data_santri">
                    <tr>
                        <th>ID</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Re-password</th>
                        <th>Fungsi</th>
                    </tr>
                    <?php 
                    $no = 1;
                    foreach($data_user as $row){
                        echo "<tr>";
                        echo "<td>".$no."</td>";
                        echo "<td>".$row['username']."</td>";
                        echo "<td>".$row['password']."</td>";
                        echo "<td>".$row['password']."</td>";
                        echo "<td style='text-align: center'><a href='try_perbarui.php?id=".$row['id']."'>Update</a> | 
                        <a href='data_user.php?del_post=".$row['id']."'>Hapus</a> </td>";
                        
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