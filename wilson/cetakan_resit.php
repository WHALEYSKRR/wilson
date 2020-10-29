<?php
include("config.php");
session_start();
$noPlat=$_SESSION['noPlat'];
$rawak=rand(10000,99999);
?>

<html>
<title>Resit Rasmi <?php echo $namakedai; ?></title>
<table width="800" border="0">
<tr>
<td width="700"><table width="700" border="0">
<tr>
<td width="360" valign="top">
<span class="style1">
<center>
<u><h2>Resit Rasmi</h2></u></center><br/>
<?php echo $namakedai; ?><br/>
<?php echo $alamat; ?><br/>
</spar><br/></td>
<td width="23">&nbsp; </td>
<td width="308" valign="top"><div align="right">

<br/>
Tarikh Cetak: <?php echo date("d/m/Y"); ?><br>
Nombor Resit: <?php echo $rawak; ?>

</spar></div></td>
</tr>
<tr>
<td colspan="3" valign="top"><hr/></td>
</tr>
</table></td>

<?php
$dataA=mysqli_query($samb,"SELECT * FROM jualan WHERE nomplat='$nomplat'");

$infoA=mysqli_fetch_array($dataA);


$dataB=mysqli_query($samb,"SELECT * FROM pelanggan WHERE icpelanggan='$infoA[icpelanggan]'");
$infoB=mysqli_fetch_array($dataB);

$dataC=mysqli_query($samb,"SELECT * FROM alamat WHERE namaPelanggan='$infoB[namaPelanggan]'");
$infoC=mysqli_fetch_array($dataC);

$dataE=mysqli_query($samb,"SELECT * FROM kereta WHERE nomplat='$infoA[nomplat]'");
$infoE=mysqli_fetch_array($dataE);

$tarikhJualan=date("d-m-Y",strtotime($infoA['tarikhJualan']));
?>
</tr>
<tr>
<td><p><strong>Berikut adalah butiran jualan kenderaan antara syarikat dengan pelanggan</strong></p>
<table width="700" border="1" align="center">
</td>
</tr>

<tr>
<Td width="300">Maklumat Kereta<br>
Nombor Plat:<br>Model:</td>
<td width="400"> <?php echo $infoE['nomplat']; ?><br>
<?php echo $infoE['model']; ?>
</td>
</tr>
<tr>
<td width="300">Nama Pelanggan:</td>
<td width="400"> <?php echo $infoB['nama']; ?></td>
</tr>
<tr>
<td width="300">Nombor Kad Pengenalan:</td>
<td width="400"> <?php echo $infoA['icpelanggan']; ?></td>
</tr>
<tr>
<td width="300">Alamat:</td>
<td width="400">
<?php echo $infoC['noRumah']; ?><br>
<?php echo $infoC['alamat1']; ?><br>
<?php echo $infoC['alamat2']; ?><br>
<?php echo $infoC['poskod']; ?>
<?php echo $infoC['bandar']; ?><br>
<?php echo $infoC['negeri']; ?><br>

</td>
</tr>
<tr>
<td width="300">Tarikh Belian:</td>
<td width="400"><?php echo $tarikhJualan; ?> <br></td>
</tr>
<tr>
<td width="300">Kaedah Bayaran (<?php echo $infoA['jenisBayaran'];?>):</td>
<td width="400">RM<?php echo $infoE['harga'];?></td>
</tr>
<p>
</table>
<hr/><div align="center" class="style15"></div>
<center><br>
<small>Ini adalah cetakan komputer, tidak memerlukan tanda tangan.</small><br><br>
<a href="javascript:window.print()">Cetak Laporan</a>
<a href="index2.php">Menu Utama</a>
</body>
</html>
