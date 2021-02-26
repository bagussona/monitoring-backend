<?php
session_start();
if (empty($_SESSION['username'])) {
	header("Location: ../blog/login_page/try_login.php");
} else {
?>

<?php include ("materi/referensi.php");
$tbh = new DataSantri();
$data_santri = $tbh->trending();

if(isset($_GET['kategori_post']))
{
    $fil_cat = $_GET['kategori_post'];
    $filtered_cat = $tbh->readKategori($fil_cat);
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
        <h1>Home</h1>
        <!-- <a href="index.php">home</a> -->
        <a href="index.php">home</a>
        <!-- <a href="index_user.php">d_user</a> -->
        <a href="../blog/login_page/logout.php">logout</a>
    </div>
</nav>           
<div class="header">
        <div class="konten_kiri">
            <h3>#Artikel | oleh <?php echo $_SESSION['username']; ?> </h3>
            <hr width="180%" align="left">
        </div>
        <div class="konten_mid">
        <a href="try_post.php"><button class="button" type="button">>New Post</button></a>
                <!-- <hr width="100%" align="right"> -->
        </div>
        <div class="konten_kanan">
            <h3>#Kategori | oleh <?php echo $_SESSION['username']; ?> </h3>
                <hr width="75%" align="right">
        </div>
        <div class="right_bar"> 
            <?php
            foreach($data_santri as $row){
                echo "<table width='150px' height='50px'>";
                echo "<tr>";
                echo "<td align='right'>"."<a href='index_cat.php?kategori_post=".$row['kategori_post']."'> ".$row['kategori_post']." | "."</a>"."</td>";
                echo "</tr>";
                echo "</table>";
                }
            ?>
        </div>
</div>
<div class="beranda">
    <div class="posisi">
    <?php
    $i = 1;
    foreach($filtered_cat as $post){
    echo "<div class='content'>";
        echo "<h3>"." | ". $post['judul_post'] . "</h3>";
        echo "<p style='font-size:14px;' align='right'>". $post['kategori_post'] . " | ". $post['tgl_post'] . "</p>";
        echo "<span>#Post ke-".$i. "  [".$post['img_post']."]</span>";
        // echo "<p>Anda bisa klik <a href='data_santri.php'>disini</a> untuk pindah ke menu Santri </p>";
        echo "<p style='text-align: justify;'>". $post['isi_post'] ."</p>";
        echo "<hr width='75%'' align='left'>";
    echo "</div>";
    $i++;
    } 
    ?>
</div>
</div>
    </body>
</html>
<?php
}
?>