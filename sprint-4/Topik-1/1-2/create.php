<?php
include 'functions.php';
$pdo = pdo_connect_mysql();
$msg = '';
// Check if POST data is not empty
if (!empty($_POST)) {
    // Post data not empty insert a new record
    // Set-up the variables that are going to be inserted, we must check if the POST variables exist if not we can default them to blank
    // $id = isset($_POST['id']) && !empty($_POST['id']) && $_POST['id'] != 'auto' ? $_POST['id'] : NULL;
    // Check if POST variable "name" exists, if not default the value to blank, basically the same for all variables
    $in_brg = isset($_POST['in_barang']) ? $_POST['in_barang'] : '';
    $out_brg = isset($_POST['out_barang']) ? $_POST['out_barang'] : '';
    $noted = isset($_POST['note']) ? $_POST['note'] : '';
    // Insert new record into the contacts table
    $stmt = $pdo->prepare('INSERT INTO bagus_tb_bebansibudi.tb_all_barang VALUES (?, ?, ?)');
    $stmt->execute([$in_brg, $out_brg, $noted]);
    // Output message
    $msg = 'Created Successfully!';
}
?>


<?=template_header('Create')?>

<div class="content update">
	<h2>Tambah Data Barang</h2>
    <form action="create.php" method="post">
        <label for="in_barang">Barang Masuk: </label>
        <input type="text" name="in_barang" placeholder="masukkan nama barang.." id="in_barang">
        <label for="out_barang">Barang Keluar: </label>
        <input type="text" name="out_barang" placeholder="masukkan nama barang.." id="out_barang">
        <label for="notes">Catatan: </label>
        <input type="text" name="notes" placeholder="tambahkan catatan.." id="noted">
        <input type="submit" value="Submit">
    </form>
    <?php if ($msg): ?>
    <p><?=$msg?></p>
    <?php endif; ?>
</div>

<?=template_footer()?>