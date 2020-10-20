<?php
//sambung ke pangkalan data
require('config.php');
//sambung ke fail header
require('header.php');

if(isset($_POST['nomplat'])){
    $gambar=$_FILES['gambar']['name'];
    $imageArr=explode('.',$gambar); //tentukan jenis fail
    $rawak=rand(10000,99999);
    $namabarugambar=$imageArr[0].$rawak.'.'.$imageArr[1];
    echo $_POST['nomplat'], $_POST['model'], $_POST['tahun'], $_POST['harga'], $namabarugambar;
    $uploadPath="gambar/".$namabarugambar;
    $isUploaded=move_uploaded_file($_FILES["gambar"]["tmp_name"],$uploadPath);
    mysqli_query($samb,"INSERT INTO kenderaan(nomplat,model,tahun_perbuat,harga,gambar,status)
    values('$_POST[nomplat]','$_POST[model]','$_POST[tahun]','$_POST[harga]','$namabarugambar','ADA')");
    //papar mesej
    echo"<script>alert('Pendaftaran Kenderaan Baru Berjaya');
    window.location='kenderaan.php'</script>";

}
?>

<html>
<center>
<body>
<h3> DAFTAR KENDERAAN BARU</h3>
<form method="post" enctype="multipart/form-data">
<table width="700" border="1" align="center">
<tr>
<td width="200">Nombor Plat Kenderaan:</td>
<td width="400"><input type="text" name="nomplat"
id="nomplat" placeholder="WYX4455" require autofocus/></td>
</tr>
<tr>
<td width="200">Model Kenderaan:</td>
<td width="400"><input type="text" name="model"
id="model" placeholder="PROTON WIRA" required /></td>
</tr>
<tr>
<td width="200">Tahun Diperbuat:</td>
<td width="400"><input type="text" name="tahun"  id="tahun"
placeholder="2019" maxlength='4'size="15"
onkeypress='return event.charCode >=48 && event.charCode <=57'
required /></td>
</tr>
<tr>
<td width="200">Harga Jualan RM:</td>
<td width="400"><input type="text" name="harga"
id="harga" placeholder="38509.80" maxlength='10'size="15"
onkeypress='return event.charCode >= 48 && event.charCode <= 57'
required /></td>
</tr>
<tr>
<td width="200">Gambar Kenderaan:</td>
<td width="400"><input type="file" name="gambar" required /></td>
</tr>

<p>
</table>

    <br>
    <br>
    <input type="submit" name="daftar" id="daftar" value="Daftar Kenderaan" />
    </fieldset>
    </form>
    <a href="kenderaan.php">Ke senarai kenderaan</a><br>
    </body></center>

</html>