<?php
//sambung ke pangkalan data
require('config.php');
//sambung ke fail header
require('header.php');

if (isset($_GET["nomplat"]))
{
    $data1=mysqli_query($samb,"SELECT * FROM  kenderaan
    WHERE nomplat='$_GET[nomplat]'");
}
else
{
    $data1=mysqli_query($samb,"select * from kenderaan");
}

$nomplat=$_GET["nomplat"];

?>
<html>
<body>
<center><h2>BORANG JUALAN KENDERAAN</h2>
<form  action="proses_jualan.php" method="post">
<table width="1000" border="1" align="center">
<?php
while ($info1=mysqli_fetch_array($data1))
{
    ?>
    <tr>
    <td width="200"><b>MAKLUMAT KENDERAAN</b></td>
    </tr>
    <tr>
    <td width="200">NOMBOR PLAT:</td>
    <td width="400"><?php echo $info1['nomplat']; ?></td>
    </tr>
    <tr>
    <td width="200">MODEL:</td>
    <td width="400"><?php echo $info1['model']; ?></td>
    </tr>
    <tr>
    <td width="200">TAHUN DIPERBUAT:</td>
    <td width="400"><?php echo $info1['tahun_perbuat']; ?></td>
    </tr>
    <tr>
    <td width="200">HARGA:</td>
    <td width="400">RM<?php echo $info1['harga']; ?></td>
    </tr>
    <tr>
    <td width="200">STATUS KENDERAAN:</td>
    <td width="400"><font color="#ff0000">
    <?php echo $info1['status']; ?></font></td>
    </tr>
    <tr>
    <td width="200">GAMBAR KENDERAAN:</td>
    <td width="400">
    <?php echo "<img src='gambar/".$info1['gambar']."' width='200px'
    height='100px'/>"; ?></td>
    </tr>
    <tr>
    <td width="200"><b>MAKLUMAT PELANGGAN</b></td>
    </tr>
    <tr>
    <td width="200">NOMBOR KAD PENGENALAN:</td>
    <td width="400"><input type="text" name="nomic"
    id="nomic" placeholder="851225035255" maxlength='12'
    onkeypress='return event.charCode >=48 && event.charCode <= 57'
    required autofocus /></td>
    </tr>
    <tr>
    <td width="200">NAMA PENUH:</td>
    <td width="400"><input type="text" name="nama"
    id="nama" placeholder="RAZMAN BIN ROSLI" size="60"required />
    </td>
    </tr>
    <tr>
    <td width="200">NOMBOR TELEFON:</td>
    <td width="400"><input type="text" name="nomhp"
    id="nomhp" placeholder="0199998989" maxlength='11'
    onkeypress='return event.charCode >=48 && event.charCode <= 57'
    required /></td>
    </tr>
    <tr>
    <td width="200">ALAMAT LENGKAP:</td>
    <td width="400">
    <label>Alamat1</label><br>
    <input type="text" name="alamat1" id="alamat1"
    placeholder="Alamat1" size="60" required ><br>
    <label>Alamat2</label><br>
    <input type="text" name="alamat2" id="alamat2"
    placeholder="Alamat2" size="60" required ><br>
    <label>Bandar</label><br>
    <input type="text" name="bandar" id="bandar"
    placeholder="Bandar" size="40" required ><br>
    <label>Poskod</label><br>
    <input type="text" name="poskod"
    placeholder="18000" maxlength="5" size="7"
    onkeypress='return event.charCode >= 48 && event.charCode <=57' 
    required ><br>
    <label>Negeri</label><br>
    <input type="text" name="negeri" id="negeri"
    placeholder="Negeri" size="30" required ><br>
</td>
<tr>
<td width="200"><b>MAKLUMAT BAYARAN</b></td>
</tr>
<tr>
<td width="200">JENIS BAYARAN:</td>
<td width="400">
<select name="bayaran" id="bayaran">
<option value="-">Pilih di sini</option>
<option value="TUNAI">TUNAI</option>
<option value="PINJAMAN">PINJAMAN</option>
</select><br>
</td>
</tr>
</tr>
</table>
<input hidden type="text" name="nomplat" id="nomplat"
value="<?php echo $info1['nomplat']; ?>"/>
<input hidden type="date" readonly name="tarikh" 
value="<?php echo date('Y-m-d'); ?>" />
<?php
}
?>
<br><br>
<button type="submit">JUAL</button>
<button type="reset">Reset</button><br><br>
*Pastikan semua makumat betul sebelum tekan butang JUAL.
</form>
<a href="index2.php">Ke Menu Utama</a><br>
</center>
</body><br><br>
<?php require('footer.php'); ?>
</html>