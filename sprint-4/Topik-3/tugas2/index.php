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
	<h2>#Beranda | <?php echo $_SESSION['username']; ?> </h2>
	<p>Ini adalah halaman landing page. Menu Logout ada di navbar atas</p>
	<!-- <p>Atau bisa klik <a href="read.php">disini</a> untuk pindah ke menu inventory </p> -->
	<p>Anda tidak akan bisa ke menu <a href="login-page/login.php">login</a> lagi. Jika belum <a href="login-page/logout.php">logout</a>  </p>
</div>

<?=template_footer()?>
<?php
}
?>