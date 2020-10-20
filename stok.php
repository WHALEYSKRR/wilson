<?php
//sambung ke pangkalan data
require('config.php');
//sambung ke fail header
require('header.php');
?>
<html>
<center>
<h2>SENARAI KENDERAAN YANG BELUM TERJUAL</h2><br>

<table width="1000" border="1" align="center">
<tr>
<td width="20"><b>Bil.</b></td>
<td width="200"><b>Model</b></td>
<td width="100"><b>Nombor Plat</b></td>
<td width="200"><b>Gambar</b></td>
<td width="50"><b>Tahun Diperbuat</b></td>
<td width="150"><b>Harga Jualan OTR</b></td>
</tr>
<?php
$jumBesar=0;
$data1=mysqli_query($samb,"SELECT * FROM kenderaan
WHERE status='ADA' ORDER BY tahun_perbuat DESC ");
$no=1;
$bil_rekod=mysqli_num_rows($data1);
while ($info1=mysqli_fetch_array($data1))
{
    ?>
    <tr>
    
    <td><?php echo $no; ?></td>
    <td><?php echo $info1['model']; ?></td>
    <td><?php echo $info1['nomplat']; ?></td>
    <td><?php echo "<img src='gambar/".$info1['gambar']."'
    width='200px' height='100px'/>"; ?></td>
    <td><?php echo $info1['tahun_perbuat']; ?></td>
    <td>RM <?php echo $info1['harga'];

    $jumBesar+=$info1['harga'];

    ?></td>
    </tr>

    <?php 
    $no++;}
    ?>
    <td colspan="5" align="right">
    JUMLAH KESELURUHAN
    </td>
    <td>RM <?php echo number_format($jumBesar,2);?></td>
    </tr>
</table>

<hr /><div align="center" class="style15"> * Laporan Tamat *<br/>
Jumlah Rekod:<?php echo $bil_rekod; ?></div><br/><br/>

<a href="index2.php">Ke Menu Utama</a><br>

</center></body><br/><br/>

<?php require('footer.php'); ?>

</html>