<html>
<?php
include 'header.php';
$conn ="";
?>
<body>
<?php 
if(!isset($_COOKIE["isLoggedIn"]))
	include 'login.php';
else
	include 'dashboard.php';
?>
</body>
<?php
include 'footer.php';
?>
</html>