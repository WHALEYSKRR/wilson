<?php
require('config.php');
$nomplat = $_GET['nomplat'];
$query = "DELETE FROM kenderaan WHERE nomplat='$nomplat' ";
$result = mysqli_query($samb, $query);
echo"<script>alert('HAPUS KENDERAAN BERJAYA');
window.location='kenderaan.php'</script>";
?>
