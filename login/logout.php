<?php 

session_start();
session_destroy(0);
$_SESSION = [];
session_unset();
echo '<script>alert("anda telah logout")</script>';
echo '<script>window.location="index.php"</script>';

 ?>