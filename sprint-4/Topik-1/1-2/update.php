<?php
include 'functions.php';
$pdo = pdo_connect_mysql();
$msg = '';
// Check if the contact id exists, for example update.php?id=1 will get the contact with the id of 1
if (isset($_GET['id'])) {
    if (!empty($_POST)) {
        // This part is similar to the create.php, but instead we update a record and not insert
        // $id = isset($_POST['id']) ? $_POST['id'] : NULL;
        $in_brg = isset($_POST['in_barang']) ? $_POST['in_barang'] : '';
        $out_brg = isset($_POST['out_barang']) ? $_POST['out_barang'] : '';
        $noted = isset($_POST['note']) ? $_POST['note'] : '';
        // Update the record
        $stmt = $pdo->prepare('UPDATE tb_all_barang SET in_barang = ?, out_barang = ?, note = ? WHERE id = ?');
        $stmt->execute([$in_brg, $out_brg, $noted, $_GET['id']]);
        $msg = 'Updated Successfully!';
    }
    // Get the contact from the contacts table
    $stmt = $pdo->prepare('SELECT * FROM bagus_tb_bebansibudi.tb_all_barang WHERE id = ?');
    $stmt->execute([$_GET['id']]);
    $contact = $stmt->fetch(PDO::FETCH_ASSOC);
    if (!$contact) {
        exit('ERROR: Tidak ada barang dengan ID tsb!');
    }
} else {
    exit('No ID specified!');
}
?>