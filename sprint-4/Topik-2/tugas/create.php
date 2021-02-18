<?php
include 'functions.php';
$pdo = pdo_connect_mysql();
$msg = '';
// Check if POST data is not empty
if (!empty($_POST)) {
    // Post data not empty insert a new record
    // Set-up the variables that are going to be inserted, we must check if the POST variables exist if not we can default them to blank
    $id = isset($_POST['id']) && !empty($_POST['id']) && $_POST['id'] != 'auto' ? $_POST['id'] : NULL;
    // Check if POST variable "name" exists, if not default the value to blank, basically the same for all variables
    $in_barang = isset($_POST['in_barang']) ? $_POST['in_barang'] : '';
    $out_barang = isset($_POST['out_barang']) ? $_POST['out_barang'] : '';
    $note = isset($_POST['note']) ? $_POST['note'] : '';
    // Insert new record into the table
    $stmt = $pdo->prepare('INSERT INTO bagus_tb_bebansibudi.tb_all_barang VALUES (?, ?, ?, ?)');
    $stmt->execute([$id, $in_barang, $out_barang, $note]);
    // Output message
    $msg = 'Created Successfully!';
    // header("Location: read.php");
}
?>


<?=template_header('Create')?>

<div class="content update">
	<h2>Tambah Barang</h2>
    <form action="create.php" method="post">
        <label for="id">ID</label>
        <input type="text" name="id" placeholder="1" value="<?=$barang['id']?>" id="id">
        <label for="in_barang">Barang Masuk: </label>
        <input type="text" name="in_barang" placeholder="masukkan nama barang.." value="<?=$barang['in_barang']?>" id="in_barang">
        <label for="out_barang">Barang Keluar: </label>
        <input type="text" name="out_barang" placeholder="masukkan nama barang.." value="<?=$barang['out_barang']?>" id="out_barang">
        <label for="note">Catatan: </label>
        <input type="text" name="note" placeholder="masukkan catatan.." value="<?=$barang['note']?>" id="note">
        <input type="submit" value="Tambah">
    </form>
    <?php if ($msg): ?>
    <p><?=$msg?></p>
    <?php endif; ?>
</div>

<?=template_footer()?>