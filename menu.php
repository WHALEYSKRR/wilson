<?php
if ($_SESSION['level'] == 'ADMIN')
{
?>
<!-- Papar menu untuk admin-->
MENU UTAMA [ADMIN]
<BR>
<li><a href="kenderaan.php">Papar Aset Kereta</a></li>
<li><a href="pekerja.php">Tambah Pekerja</a></li>
<li><a href="import_pekerja.php">Import Pekerja</a></li>
<li><a href="jualan.php">Jualan Kenderaan</a></li>
<li><a href="rekod_jualan.php">Rekod Jualan</a></li>
<li><a href="stok.php">Stok Kenderaan</a></li>
<li><a href="keluar.php">Keluar</a></li>
<?php
}
else
{
?>
<!-- Papar menu untuk pekarja -->
MENU UTAMA [Pekerja]
<BR>
<li><a href="jualan.php">Jualan Kenderaan</a></li>
<li><a href="stok.php">Stok Kenderaan</a></li>
<li><a href="keluar.php">Keluar</a></li>
<?php
}
?>