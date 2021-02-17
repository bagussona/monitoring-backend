<?php
include 'functions.php';
// Connect to MySQL database
$pdo = pdo_connect_mysql();
// Get the page via GET request (URL param: page), if non exists default the page to 1
$page = isset($_GET['page']) && is_numeric($_GET['page']) ? (int)$_GET['page'] : 1;
// Number of records to show on each page
$records_per_page = 5;

// Prepare the SQL statement and get records from our contacts table, LIMIT will determine the page
$stmt = $pdo->prepare('SELECT * FROM bagus_tb_bebansibudi.tb_all_barang ORDER BY id LIMIT :current_page, :record_per_page');
$stmt->bindValue(':current_page', ($page-1)*$records_per_page, PDO::PARAM_INT);
$stmt->bindValue(':record_per_page', $records_per_page, PDO::PARAM_INT);
$stmt->execute();
// Fetch the records so we can display them in our template.
$barang = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Get the total number of contacts, this is so we can determine whether there should be a next and previous button
$num_barang = $pdo->query('SELECT COUNT(*) FROM tb_all_barang')->fetchColumn();
?>


<?=template_header('Read')?>

<div class="content read">
	<h2>Read INVENTORY</h2>
	<a href="create.php" class="create_inventory">Tambah Barang!</a>
	<table>
        <thead>
            <tr>
                <td>id</td>
                <td>Barang Masuk</td>
                <td>Barang Keluar</td>
                <td>Catatan</td>
                <td>Fungsi</td>
                <td></td>
            </tr>
        </thead>
        <tbody>
            <? $i = 2; ?>
            <?php foreach ($barang as $value): ?>
            <tr>
                <td><?= $i++ ?></td>
                <td><?=$value['in_barang']?></td>
                <td><?=$value['out_barang']?></td>
                <td><?=$value['note']?></td>
                <td class="actions">
                    <a href="update.php?id=<?=$contact['id']?>" class="edit">UPDATE</a>
                    <a href="delete.php?id=<?=$contact['id']?>" class="trash">DELETE</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

<?=template_footer()?>