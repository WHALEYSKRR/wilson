<?php
//sambung ke pangkalan data
include "config.php";
//dapatkan nomplat dari page lepas
session_start();
$nomplat=$_SESSION['nomplat'];
//jana nombor resit
$rawak=rand(10000,99999);
?>

<html>
<title>RESIT RASMI <?php echo $namakedai;?></title>
<table width="800" border="0">
<tr>
<td width="700"><table width="700" border="0">
<tr>
<td width="360" valign="top">
<span class="style1">
<center>
<u><h2>RESIT RASMI</h2></u></center><br/>
<?php echo $namakedai;?><br/>
<?php echo $alamat;?><br/>
</span><br/></td>
<td width="23">&nbsp;</td>
<td width="308" valign="top"><div align="right">

<br/>
Tarikh Cetak: <?php echo date("d/m/y"); ?><br>
Nombor Resit: <?php echo $rawak; ?>

</span></div></td>
</tr>
<tr>
<td colspan="3" valign="top"><hr /></td>
</tr>
</table></td>




<?php
//sambung ke relationship table
$dataA=mysqli_query($samb,"SELECT * FROM jualan
WHERE nomplat='nomplat'");
$infoA=mysqli_fetch_array($dataA);

$dataB=mysqli_query($samb,"SELECT * FROM pelanggan
WHERE icpelanggan='$infoA[idpelanggan]'");
$infoA=mysqli_fetch_array($dataB);

$dataC=mysqli_query($samb,"SELECT * FROM alamat
WHERE icpelanggan='$infoB[icpelanggan]'");
$infoA=mysqli_fetch_array($dataC);

$dataE=mysqli_query($samb,"SELECT * FROM kenderaan
WHERE nomplat='$infoA[nomplat]'");
$infoA=mysqli_fetch_array($dataE);

//susun semula tarikh
$tarikh =date("d/m/y", strtotime($infoA['tarikh']));
?>
</tr>
<tr>
<td><p><strong>BERIKUT ADALAH BUTIRAN JUALAN KENDERAAN ANTARA 
SYARIKAT DENGAN PELANGGAN</strong></p>

<table width="700" border="1" align="center">

</td>
</tr>
<!-- nama lajur dalam jadual-->
<tr>
<td width="300">MAKLUMAT KENDERAAN<br>
Nombor Plat:<br>Model:</td>
<td width="400"><?php echo $infoE['nomplat']; ?><br>
<?php echo $infoE['model']; ?>
</td>
</tr>

<tr>
<td width="300">NAMA PELANGGAN</td>
<td width="400"><?php echo $infoB['nama'];?></td>
</tr>
<tr>
<td width="300">NOMBOR KAD PENGENALAN</td>
<td width="400"><?php echo $infoA['idpelanggan'];?></td>
</tr>

<tr>
<td width="300">ALAMAT</td>
<td width="400"><?php echo $infoC['alamat1'];?><br>
                <?php echo $infoC['alamat2'];?><br>
                <?php echo $infoC['poskod'];?>
                <?php echo $infoC['bandar'];?><br>
                <?php echo $infoC['negeri'];?><br>

</td>
</tr>
<tr>
<td width="300">TARIKH BELIAN:</td>
<td width="400"><?php echo $tarikh;?></td>
</tr>
<tr>
<td width="300">KAEDAH BAYARAN</td>
<?php echo $infoA['jenis_bayaran'];?></td>
<td width="400">RM<?php echo $infoE['harga'];?></td>
</tr>
<p>
</table>
<hr /><div align="center" class="style15"></div>
<center><br>
<small>INI ADALAH CETAKAN KOMPUTER, TIDAK MEMERLUKAN TANDA TANGAN.
</small><br><br>
<a href="javascript:window.print()">Cetak Laporan</a>
<a href="index2.php">Ke Menu Utama</a>
</body>
</html>




