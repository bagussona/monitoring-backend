<?php
include 'functions.php';
$pdo = pdo_connect_mysql();
$msg = '';
// Check if the contact id exists, for example update.php?id=1 will get the contact with the id of 1
if (isset($_GET['id'])) {
    if (!empty($_POST)) {
        // This part is similar to the create.php, but instead we update a record and not insert
        $id = isset($_POST['id']) ? $_POST['id'] : NULL;
        $in_barang = isset($_POST['in_barang']) ? $_POST['in_barang'] : '';
        $out_barang = isset($_POST['out_barang']) ? $_POST['out_barang'] : '';
        $note = isset($_POST['note']) ? $_POST['note'] : '';
        // Update the record
        $stmt = $pdo->prepare('UPDATE bagus_tb_bebansibudi.tb_all_barang SET id = ?, in_barang = ?, out_barang = ?, note = ? WHERE id = ?');
        $stmt->execute([$id, $in_barang, $out_barang, $note, $_GET['id']]);
        $msg = 'Updated Successfully!';
    }
    // Get the contact from the contacts table
    $stmt = $pdo->prepare('SELECT * FROM bagus_tb_bebansibudi.tb_all_barang WHERE id = ?');
    $stmt->execute([$_GET['id']]);
    $barang = $stmt->fetch(PDO::FETCH_ASSOC);
    if (!$barang) {
        exit('Contact doesn\'t exist with that ID!');
    }
} else {
    exit('No ID specified!');
}
?>


<?=template_header('Read')?>

<div class="content update">
	<h2>Update Barang #<?=$barang['id']?></h2>
    <form action="update.php?id=<?=$barang['id']?>" method="post">
        <label for="id">ID</label>
        <input type="text" name="id" placeholder="1" value="<?=$barang['id']?>" id="id">
        <label for="in_barang">Barang Masuk: </label>
        <input type="text" name="in_barang" placeholder="masukkan nama barang.." value="<?=$barang['in_barang']?>" id="in_barang">
        <label for="out_barang">Barang Keluar: </label>
        <input type="text" name="out_barang" placeholder="masukkan nama barang.." value="<?=$barang['out_barang']?>" id="out_barang">
        <label for="note">Catatan: </label>
        <input type="text" name="note" placeholder="masukkan catatan.." value="<?=$barang['note']?>" id="note">
        <input type="submit" value="Update">
    </form>
    <?php if ($msg): ?>
    <p><?=$msg?></p>
    <?php endif; ?>
</div>

<?=template_footer()?>