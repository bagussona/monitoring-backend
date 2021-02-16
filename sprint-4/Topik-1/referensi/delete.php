<?php
include 'functions.php';
$pdo = pdo_connect_mysql();
$msg = '';
// Check that the contact ID exists
if (isset($_GET['id'])) {
    // Select the record that is going to be deleted
    $stmt = $pdo->prepare('SELECT * FROM bagus_tb_bebansibudi.tb_all_barang WHERE id = ?');
    $stmt->execute([$_GET['id']]);
    $barang = $stmt->fetch(PDO::FETCH_ASSOC);
    if (!$barang) {
        exit('ERROR: Tidak ada barang dengan ID tsb!');
    }
    // Make sure the user confirms beore deletion
    if (isset($_GET['confirm'])) {
        if ($_GET['confirm'] == 'yes') {
            // User clicked the "Yes" button, delete record
            $stmt = $pdo->prepare('DELETE FROM bagus_tb_bebansibudi.tb_all_barang WHERE id = ?');
            $stmt->execute([$_GET['id']]);
            $msg = 'Berhasil hapus!';
        } else {
            // User clicked the "No" button, redirect them back to the read page
            header('Location: read.php');
            exit;
        }
    }
} else {
    exit('No ID specified!');
}
?>


<?=template_header('Delete')?>

<div class="content delete">
	<h2>Hapus barang #<?=$bagus_tb_bebansibudi.tb_all_barang['id']?></h2>
    <?php if ($msg): ?>
    <p><?=$msg?></p>
    <?php else: ?>
	<p>Are you sure you want to delete contact #<?=$bagus_tb_bebansibudi.tb_all_barang['id']?>?</p>
    <div class="yesno">
        <a href="delete.php?id=<?=$bagus_tb_bebansibudi.tb_all_barang['id']?>&confirm=yes">Yes</a>
        <a href="delete.php?id=<?=$bagus_tb_bebansibudi.tb_all_barang['id']?>&confirm=no">No</a>
    </div>
    <?php endif; ?>
</div>

<?=template_footer()?>