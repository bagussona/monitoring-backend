<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/my.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="MethodPost">
            <form action="post.php" method="post">
            <h2 class="HeaderPost" id="HeaderPost"> Method _POST</h2>
            <p class="pPost" id="pPost">Nama Barang</p>
            <input type="text" name="barang" id="barang-post" placeholder="masukkan barang..">
            <p class="pPost" id="pPost">Harga</p>
            <input type="text" name="harga" id="harga-post" placeholder="harga..">
            <input type="submit" value="submit">
        </div>
        </form>
<!-- <break> -->
        <div class="MethodGet">
            <form action="post.php" method="get">
            <h2 class="HeaderGet" id="HeaderGet"> Method _GET</h2>
            <p class="pGet" id="pGet">Nama Kurir</p>
            <input type="text" name="kurir" id="kurir-get" placeholder="masukkan nama kurir..">
            <p class="pGet" id="pGet">Nama Pengirim</p>
            <input type="text" name="pengirim" id="kirim-get" placeholder="masukkan nama pengirim..">
            <!-- <input type="submit" value="submit"> -->
            <p class="pGet" id="pGet">Asal Barang</p>
            <input type="text" name="barang" id="barang-get" placeholder="masukkan asal barang..">
            <p class="pGet" id="pGet">Tujuan Barang</p>
            <input type="text" name="tujuan" id="tujuan-get" placeholder="masukkan alamat tujuan..">
            <input type="submit" value="submit">
        </div>
        </form>
    </div>
</body>
</html>