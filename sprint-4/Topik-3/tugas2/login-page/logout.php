<?php
session_start();
// remove all session variables
session_unset(); 

// destroy the session 
session_destroy(); 
?>

<?php
include 'fungsi.php';
// Your PHP code here.

// Home Page template below.
?>

<?=template_header('Home')?>

<div class="content">
	<h2>Home #LogoutArea</h2>
	<p>Anda telah logout. Silahkan <a href="login.php">login</a>  kembali untuk dapat ke beranda lagi!</p>
</div>

<?=template_footer()?>