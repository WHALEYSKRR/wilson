<?php include "config.php"; ?>
<html>
<head>
<!-- tukar nama sistem yang sesuai -->
<title><?php echo $namasistem; ?></title>
</head>
<body><center>
<TABLE BORDER="0" cellpading="0" CELLSPACING="0">
<TR>
<!-- nama fail header adalah header .jpg -->
<TD WIDTH="3000" HEIGHT="200" BACKGROUND="<?php echo $logo; ?>"
VALIGN="center"style="background-repeat:no-repeat;">
<!-- tukar nama sistem yang sesuai -->
<FONT Size='+3' COLOR="aqua" font face ="Arial">
<?php echo $namasistem; ?><br><?php echo "bandingkan harga kita";?></FONT></br>
</TD>
</P>
</TR>
</center>
</TABLE>
</body></center>
<!-- panggil fail utk besarkan huruf -->
<?php include "besar.php"; ?>
<!-- panggil fail untuk  tukar warna font ->
<?php include "tukar.php"; ?>
</html>