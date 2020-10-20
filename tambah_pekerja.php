<?php 
require('config.php');
require('header.php');
if(isset($_POST['nama']))
{
    $pekerja=$_POST['nama_pekerja'];
    $nama=$_POST['nama'];
    $katalaluan=$_POST['katalaluan'];
    $result = mysqli_query($samb, "INSERT INTO pengguna"
    (nama_pengguna,nama,kata_laluan,status) values
    ('$nama','$pekerja','$katalaluan','PEKERJA')");
    echo "<script>alert('Penambahan rekod pekerja telah berjaya');
    window.location='pekerja.php'</script>";
}

?>
<html>
<center>
<body>
    <h3>TAMBAH PEKERJA</h3>
<form name="form1" action="tambah_pekerja.php" method="POST">
<table width="700" border="1" align="center">
<tr>
<td width="200">NAMA PEKERJA:</td>
<td width="400"><input type="text" name="nama_pekerja" size=60
id="nama_pekerja" placeholder="RAZMI BIN RAZMAN" required autofocus/>
</td>
</tr>
<tr>
<td width="200">NAMA PENGGUNA:</td>
<td width="400"><input type="text" name="nama" size=30
id="nama" placeholder="man88" required /></td>
</tr>
<tr>
<td witdh="200">KATA LALUAN:</td>
<td width=400><input type="text" name="katalaluan"
id="katalaluan" placeholder="1234" required /></td>
</tr>
</table>
<input type="submit" name="update" id="submit" value="Tambah Pekerja" />
</form>
<a href="pekerja.php">Ke senarai pengguna</a><br>
</body></center>
<?php require('footer.php'); ?>
</html>
