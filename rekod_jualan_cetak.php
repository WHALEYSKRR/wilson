<?php 
//sambung ke pangkalan data
require('config.php');
?>
<html>
<head>
<title>LAPORAN BULANAN JUALAN KENDERAAN</title>
</head>
<body>

<table width="800" border="0">
<tr>
<td width="400">
<?php echo $namakedai;?><br/>
<?php echo $alamat;?><br />
<br /> </td>

<td width="400" valign="bottom"><div align="right">
<br />
Tarikh Cetak: <php echo date("d/m/y"); ?>

</td>
</tr>
<tr>
<td colspan="3" valign="top"><hr /></td>
</tr>
</table>
<table width="800" border="0">
<td><p><strong>LAPORAN BULANAN JUALAN KENDERAAN</strong></p>
<table width="1000" border="1" align="center">
<tr>
<td width="20"><b>Bil.</b></td>
<td width="100"><b>Nombor Plat</b></td>
<td width="200"><b>Model</b></td>
<td width="200"><b>Gambar</b></td>
<td width="50"><b>Tahun Diperbuat</b></td>
<td width="100"><b>Tarikh Jualan</b></td>
<td width="100"><b>Juru Jual</b></td>
<td width="150"><b>Harga Jualan OTR</b></td>
</tr>
<?php
//istihar pemboleh ubah dan nilai pemula
$jumBesar=0;
$no=1;
$bulan=$_POST["bulan"];
$tahun=$_POST["tahun"];

if($bulan=="-"&&$tahun=="-")
{
    $data1=mysqli_query($samb,"SELECT * FROM jualan
    ORDER BY nomplat,tarikhJualan");
}
elseif ($bulan!="-"&&$tahun=="-")
{
    $data1=mysqli_query($samb,"SELECT * FROM jualan
    WHERE MONTH(tarikh)='$bulan'
    ORDER BY nomplat,tarikhJualan");
}
elseif ($bulan!="-"&&$tahun!="-")
{
    $data1=mysqli_query($samb,"SELECT * FROM jualan
    WHERE ((MONTH(tarikhJualan)='$bulan' AND YEAR(tarikhJualan)='$tahun') )
    ORDER BY nomplat,tarikhJualan");
}
elseif ($bulan=="-"&&$tahun!="-")
{
    $data1=mysqli_query($samb,"SELECT * FROM jualan
    WHERE YEAR(tarikhJualan)='$tahun' ORDER BY nomplat,tarikhJualan");
}

$bil_rekod=mysqli_num_rows($data1);
while ($info1=mysqli_fetch_array($data1))
{
    //SAMBUNG REKOD YANG BERKAITAN
    $datakereta=mysqli_query($samb,"SELECT * FROM kenderaan
    WHERE nomplat='$info1[nomplat]'");
    $infokereta=mysqli_fetch_array($datakereta);

    //DAPATKAN NAMA PENGGUNA SISTEM
    $dataJurujual=mysqli_query($samb,"SELECT * FROM pengguna
    WHERE nama_pengguna='$info1[idpekerja]'");
    $infoJurujual=mysqli_fetch_array($dataJurujual);

    //susun semula tarikh
    $tarikh = data("d/m/y", strtotime($info1['tarikhJualan']));

    ?>
<!-- PAPAR REKOD DALAM JUALAN -->
<tr>
<td><?php echo $no; ?></td>
<td><?php echo $infokereta['nomplat']; ?></td>
<td><?php echo $infokereta['model']; ?></td>
<td><?php echo "<img src='gambar/".$infokereta['gambar']."'
width='200px' height='100px'/>"; ?></td>
<td><?php echo $infokereta['tahun_perbuat']; ?></td>
<td><?php echo $tarikh; ?></td>
<td><?php echo $infoJurujual['namaPekerja']; ?></td>
<td>RM <?php echo $infokereta['harga']; 

$jumBesar+=$infokereta['harga'];

?></td>
</tr>
<?php

$no++; }
?>
<tr>
<td colspan="7" align="right">
JUMLAH KESELURUHAN
</td>
<td>RM <?php echo number_format($jumlahBesar,2);?></td>
</tr>
</table>

<hr /><div align="center" class="style15">* Laporan Tamat *<br />
Jumlah Rekod:<?php echo $bil_rekod; ?></div>
<center><br><br>
<a href="index2.php">Ke Menu Utama</a><br>
<a href="javascript:window.print()">Cetak Laporan</a>
</center>
</body>
</html>