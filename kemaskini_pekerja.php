<?php
//sambung ke pangkalan data
require('config.php');
//sambung ke fail header
require('header.php');
//ambil rekod yang dipost
if(isset($_POST['update']))
{
    $idpengguna = $_POST['userid'];
    $nama=$_POST['nama_pekrja'];
    $kata=$_POST['pass'];
    $aras=$_POST['level'];

    //KEMASKINI DENGAN REKOD BARU
    $result = mysqli_query($samb,
    "UPDATE pengguna SET nama='$nama',kata_laluan='$kata',status='aras'
    WHERE nama_pengguna='$idpengguna'");

//papar mesej jika rekod berjaya dikemaskini
echo "<script>alert('Kemaskini rekod telah berjaya');
window.location='pekerja.php'</script>";
}
?>
<?php
//DAPATKAN ID DARI URL
$id = $_GET['kemaskini_id'];
//PILIH DATA BERDASARKAN PADA ID REKOD
$result = mysqli_query($samb, "SELECT * FROM pengguna
WHERE nama_pengguna='$id'");
while($res = mysqli_fetch_array($result))
{
    //Paparkan nilai asal
    $user = $res['nama_pengguna'];
    $pekerja= $res['nama'];
    $pass = $res['katalaluan'];
    $level= $res['status'];

}
?>

<html>
<center>
<body>
<?php echo $user; ?>

    <h3>KEMASKINI REKOD PEKERJA</h3>
 
<form name="form1" action="kemaskini_pekerja.php" method="POST">
<table width="700" border="1" align"center">
<tr>
<td width="200">NAMA PEKERJA:</td>
<td width="400"><input type="text" name="nama_pekerja" size=60
id="nama_pekerja" value="<?php echo $pekerja;?>"/></td>
</tr>
<tr>
<td width="200">NAMA PENGGUNA:</td>
<td width="400"><input type="text" name="userid" size=30
id="userid" value="<?php echo $user;?>"> /></td>
</tr>
<tr>
<td width="200">KATA LALUAN:</td>
<td width="400"><input type="text" name="pass"
id="pass" value="<?php echo $pass;?>" /></td>
</tr>
</table>

<input type="hidden" name="level" value=<?php echo $level;?> />
<br><br>

<input type="submit" name="update" id="submit" value="Kemaskini" /></br>
<font size="1" color="#ff0000">
</font>
<br>

</form>
<a href="pekerja.php">Ke senarai pekerja</a><br>
</center>
</body>
</html>