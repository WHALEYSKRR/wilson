<?php
require('config.php');
require('header.php');
if(isset($_POST['update'])){
    $gambar=$_FILES['gambar']['name'];
    $imageArr=explode('.',$gambar); 
    $rawak=rand(10000,99999);
    $namabarugambar=$imageArr[0].$rawak.'.'.$imageArr[1];
    $uploadPath="gambar/".$namabarugambar;
    $isUploaded=move_uploaded_file($_FILES["gambar"]["tmp_name"],$uploadPath);

    $nomplat=$_POST['nomplat'];
    $model=$_POST['model'];
    $harga=$_POST['harga'];
    $tahun_perbuat=$_POST['tahun_perbuat'];
    $status=$_POST['status'];

    $result=mysqli_query($samb,"Update kenderaan SET model='$model', tahun_perbuat='$tahun_perbuat',
    harga='$harga',gambar='$namabarugambar',status='$status' WHERE nomplat='$nomplat' ");
    echo"<script>alert('Kemaskini rekod kenderaan telah berjaya');
    window.location='kenderaan.php'</script>";
}
?>
<?php 
$nomplat=$_GET['nomplat'];
$result=mysqli_query($samb, "SELECT * FROM kenderaan WHERE nomplat='$nomplat'");
while($res = mysqli_fetch_array($result)){
    $nomplat=$res['nomplat'];
    $model=$res['model'];
    $tahun_perbuat=$res['tahun_perbuat'];
    $harga=$res['harga'];
    $gambar=$res['gambar'];
    $status=$res['status'];
}
?>
<html>
<center>
<body>
<h3>KEMASKINI REKOD KENDERAAN</h3>
<form method="post" enctype="multipart/form-data">
<table width="800" border="1" align="center">
</td>
</tr>
<tr>
<td width="200">Nombor Plat Kenderaan:</td>
<td width="400"><input type="text" name="nomplat" id ="nomplat" autofocus value="<?php echo $nomplat;?>"/></td>
</tr>   
<tr>
<td width="200">Model Kenderaan:</td>
<td width="400"><input type="text" name="model" id="model" value="<?php echo $model;?>"/></td>
</tr>
<tr>
<td width="200">Tahun Diperbuat:</td>
<td width="400"><input type="text" name="tahun_perbuat" id="tahun_perbuat" value="<?php echo $tahun_perbuat;?>"/></td>
</tr>
<tr>
<td width="200">Harga Jualan RM:</td>
<td width="400"><input type="text" name="harga" id="harga" value="<?php echo $harga;?>"/></td>
</tr>
<tr>
<td width="200">Status Kenderaan:</td>
<td width="400"><select name="status" id="status">
<option value="<?php echo $status;?>"selected><?php echo $status;?></option>
<option value="ADA">ADA</option>
<option value="SOLD">Dijual</option>
</select>
</td>
</tr>
<tr>
<td width="200">Gambar Kenderaan:</td>
<td width="400"><?php echo"<img src='gambar/".$gambar."' width='200px' height='100px'/>";?>
<br><input type="file" name="gambar"/></td>
</tr>
<p>
</table>
<input type="submit" name="update" id="submit" value="Kemaskini"/>
</form>
<a href="kenderaan.php">Ke senarai kenderaan</a><br>
</center>
</body>
</html>