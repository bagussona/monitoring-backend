<?php
session_start();
// remove all session variables
session_unset(); 

// destroy the session 
session_destroy(); 
?>

<?php
include 'navbar.php';
// Your PHP code here.

// Home Page template below.
?>

<?=template_header('Home')?>

<div class="content">
	<h2>Home</h2>
	<p>Anda telah logout. Silahkan <a href="FormLogin.php">login</a> dulu untuk dapat akses menu!</p>
</div>

<?=template_footer()?>