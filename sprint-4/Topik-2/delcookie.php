<?php
// set the expiration date to one hour ago
setcookie("user", "John Doe", time() - 3600);
?>
<html>
<body>

<?php
echo "Cookie 'user' is deleted.";
?>

</body>
</html>