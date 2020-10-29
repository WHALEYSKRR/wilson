<?php
//sambung ke pangkalan data
require('config.php');
//sambung ke fail header
require('header.php');
?>
<html>
<center><h2>IMPORT MAKLUMAT PEKERJA<br>IMPORT FAIL CSV</h2>
<body><fielset>
<label>Pilih lokasi fail CSV/Excel:</label>
<form action="import_process.php" method="post"
name="upload_excel" enctype="multipart/form-data">
<input type="file" name="file" id="file" class="input-large"><br>
<button type="submit" id="submit" name="Import" >Upload</button>
</form><br>
<a href="index2.php">Menu Utama</a><br>
</fielset></center>
</body>
</html>