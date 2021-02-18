<?php
session_start();
if (empty($_SESSION['username'])) {
	header("Location: login-page/login.php");
} else {
?>

<?php
include 'functions.php';
// Your PHP code here.

// Home Page template below.
?>

<?=template_header('Home')?>

<div class="content">
	<h2>Home</h2>
	<p>Ini adalah halaman landing page. Menu Inventory ada di navbar atas</p>
	<p>Atau bisa klik <a href="read.php">disini</a> untuk pindah ke menu inventory </p>
</div>

<?=template_footer()?>
<?php
}
?>