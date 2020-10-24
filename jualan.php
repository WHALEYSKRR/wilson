<?php
//sambung ke pangkalan data
require('config.php');
//sambung ke fail header
require('header.php');
if (isset($_GET["nomplat"]))
    {
        $data1=mysqli_query($samb,"SELECT * FROM kenderaan
        WHERE nomplat='$_GET[nomplat]'");
    }
    else
    {
        $data1=mysqli_query($samb,"SELECT * from kenderaan");
    }
?>

<html>
<body>
<center><h2>BORANG JUALAN KENDERAAN</h2>
<table width="1000" border="1" align="center">
<tr>
<td width="400">
<form name="FormCarian">
<p>NOMBOR PLAT KENDERAAN :<br>
<font size="1" color="#ff0000">*Carian kenderaan</font></td>
<td width="600">
<select name="carian" size="1" onChange="go()">
<option selected value="-">Pilih nombor plat di sini </option>
<?php
$dataKereta=mysqli_query($samb,"SELECT * FROM kenderaan
WHERE status='ADA' ");

if(isset($_GET["nomplat"])){
    echo"<option>$_GET[model]</option>";}
    while ($infoKereta=mysqli_fetch_array($dataKereta))
    {
        echo "<option value='borang_jualan.php?
        nomplat=$infoKereta[nomplat]'>$infoKereta[nomplat]</option>";
    }
?>
</select>
</p>
<script type="text/javascript">
<!--
funtion go(){
location=
document.FormCarian.carian.
options[docuent.FormCarian.carian.selectedIndex].value
}
//-->
</script>
</form>
</td>
</tr>
</table>
<br>
<a href="index2.php">Ke Menu Utama</a><br><br>
</center>
</body>
<?php require('footer.php'); ?>
</html>