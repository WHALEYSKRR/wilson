<?php
//sambung ke pangkalan data
require('config.php');
//sambung ke fail header
require('header.php');
//tunggu rekod yang dihantar
if(isset($_POST['update']))
{
    $gambar=$_FILES['gambar']['name'];
    $imageArr=explode('.',$gambar); //tentukan jenis fail
    $rawak=rand(1000,9999);
    $namabarugambar=$imageArr[0].$rawak.'.'.$imageArr[1];
    $uploadPath="gambar/".$namabarugambar;
    $isUploaded=move_uploaded_file($_FILES["gambar"]
    ["tmp_name"],$uploadPath);

    $nomplat = $_POST['nomplat'];
    $model=$_POST['model'];
    $harga=$_POST['harga'];
    $tahun=$_POST['tahun'];
    $status=$_POST['status'];
//KEMASKINI DENGAN REKOD BARU
    $result = mysqli_query(samb,"Update kenderaan SET model='$model', tahun_perbuat='$tahun',
    harga='$harga', gambar='$namabarugambar', status='$status' WHERE nomplat='$nomplat' ");

echo "<script>alert('Kemaskini rekod kenderaan telah berjaya');
window.locaation='kenderaan.php'</script>";
}
?>
<?php 
//AMBIL ID DARI URL
$nomplat=$_GET['nomplat'];
//PAPAR REKOD LAMA BERADASARKAN ID YANG DIPILIH
$result = mysqli_query($samb, "SELECT * FROM kenderaan WHERE nomplat='$nomplat'");
while($res = mysqli_fetch_array($result))
{
    $nomplat = $res['nomplat'];
    $model = $res['model'];
    $tahun = $res['tahun_perbuat'];
    $harga = $res['harga'];
    $gambar = $res['gambar'];
    $status = $res['status'];
}
?>
<html>
<center>
<body>
    <h3>KEMASKINI REKOD KENDERAAN</h3>
    <form method ="post" enctype="multipart/form-data">
    
    <table width="800" border="1" align "center">
    </td>
    </tr>
    <tr>
    <td width="200">Nombor Plat Kenderaan:</td>
    <td width="400"><input type="text" name="nomplat"
    id ="nomplat" autofocus value="<?php echo $nomplat ;?>" /></td>
    </tr>   
    <tr>
    <td width="200">Model Kenderaan:</td>
    <td witdh="400"><input type="text" name="model"
    id="model" autofocus value="<?php echo $model;?>" /></td>
    </tr>
    <tr>
    <td width="200">Tahun Diperbuat;</td>
    <td width="400"><input type="text" name="tahun"
    id="kadar" value="<?php echo $tahun;?>" /></td>
    </tr>
    <tr>
    <td witdh="200">Harga Jualan RM:</td>
    <td witdh="400"><input type="text" name="harga"
    id="kadar" value= "<?php echo $harga;?>" /></td>
    </tr>
    <tr>
    <td width="200">Status Kenderaan:</td>
    <td width="400">
    <select name="status" id="status">
    <option value="<?php echo $status;?>" selected >
    <?php echo $status;?></option>
    <option value="ADA">ADA</option>
    <option value="XADA">XADA</option>
    </select>
    </td>
    </tr>
    <tr>
    <td width="200">Gambar Kenderaan;</td>
    <td width="400"><?php echo
    "<img src='./gambar/".$gambar."' width='200px' height='100px'/>"; ?>
    <br><input type="file" name="gambar" /></td>
    </tr>
<p>
</table>
    <input type="submit" name ="update" id="submit" value="Kemaskini" />
</form>
    <a href="kenderaan.php">Ke senarai kenderaan</a><br>
</center>
</body>
</html>

}