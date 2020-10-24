<?php
require('config.php');
require('header.php');
if(isset($_POST['update'])){
    $idPekerja=$_POST['idPekerja'];
    $namaPekerja=$_POST['namaPekerja'];
    $kataLaluan=$_POST['kataLaluan'];
    $telefon=$_POST['noTelefonPekerja'];
    $aras=$_POST['level'];

    $result=mysqli_query($samb,"UPDATE pengguna SET idPekerja='$idPekerja',kataLaluan='$kataLaluan',noTelefonPekerja='$telefon',status='$aras' WHERE namaPekerja='$namaPekerja'");
    echo "<script>alert('Kemaskini rekod telah berjaya');
    window.location='pekerja.php'</script>";
}
?>
<?php
$id=$_GET['kemaskini_id'];
$result=mysqli_query($samb, "SELECT * FROM pengguna WHERE namaPekejar='$namaPekerja'");
while($res=mysqli_fetch_array($result)){
    $user=$res['namaPekerja'];
    $pekerja=$res['idPekerja'];
    $pass=$res['kataLaluan'];
    $phone=$res['noTelefonPekerja'];
    $level=$res['status'];
}
?>
<html>
<center>
<body>
<?php echo $user;?>
<h3>KEMASKINI REKOD PEKERJA</h3>
<form name="form1" action="kemaskini_pekerja.php" method="POST">
<table width="700" border="1" align="center">
<tr>
<td width="200">ID PEKRJA:</td>
<td width="400"><input type="text" name="idPekerja" id="idPekerja" value="<?php echo $pekerja;?>"/></td>
</tr>
<tr>
<td width="200">NAMA PENGGUNA:</td>
<td width="400"><input type="text" name="namaPekerja" id="namaPekerja" value="<?php echo $user;?>"/></td>
</tr>
<tr>
<td width="200">KATA LALUAN:</td>
<td width="400"><input type="text" name="kataLaluan" id="kataLaluan" value="<?php echo $pass;?>"/></td>
</tr>
<tr>
<td width="200">No. Telefon Pekerja:</td>
<td width="400"><input type="text" name="noTelefonPekerja" id="noTelefonPekerja" value="<?php echo $phone;?>"/></td>
</tr>
</table>
<input type="hidden" name="level" value=<?php echo $level;?>>
<br><br>
<input type="submit" name="update" id="submit" value="Kemaskini"/></br>
<font size="1" color="#ff0000">*ID Pekerja tidak boleh dikemaskini
</font>
<br>
</form>
<a href="pekerja.php">Ke senarai pekerja</a><br>
</center>
</body>
</html>