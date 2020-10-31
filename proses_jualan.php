<?php
//sambung ke pangkalan data
require('config.php');
//ambil nama penjual
session_start();
$jurujual=$_SESSION['idPekerja'];

echo $_POST['nomic'], $_POST['nama'];

if(isset($_POST['nomic']))
{

    //pelanggan
    $nomic=$_POST['nomic'];
    $nama=$_POST['nama'];
    $nomhp=$_POST['nomhp'];

    //alamat
    $alamat1=$_POST['alamat1'];
    $alamat2=$_POST['alamat2'];
    $bandar=$_POST['bandar'];
    $poskod=$_POST['poskod'];
    $negeri=$_POST['negeri'];
    //lain-lain
    $tarikh=$_POST['tarikh'];
    $nomplat=$_POST['nomplat'];
    $bayaran=$_POST['bayaran'];
    $idJualan = 'G' . strval(rand(1000,9999));

    //WUJUDKAN SESSION - NOMPLAT
    $_SESSION['nomplat']=$nomplat;

    //TAMBAH REKOD - JUALAN
    $result1 = mysqli_query($samb,
    "INSERT INTO jualan VALUES ('$idJualan','$tarikh','$bayaran','$nomplat','$nomic','$jurujual', '$nama')");

    //TAMBAH REKOD - TABLE PELANGGAN
    $result2 = mysqli_query($samb,
    "INSERT INTO pelanggan VALUES ('$nomic',$nama','$nomhp')");

    //TAMBAH REKKOD - TABLE ADDRESS
    $result3 = mysqli_query($samb,
    "INSERT INTO alamat values ('$nama','$alamat1','$alamat2','$bandar','$poskod','$negeri')");

    //TAMBAH REKOD - KENDERAAN
    $result4 = mysqli_query($samb,
    "UPDATE kenderaan SET model=model, tahun_perbuat=tahun_perbuat,
    harga=harga, gambar=gambar , status='SOLD'
    WHERE nomplat='$nomplat'");

    //PAPARAN MESEJ JIKA REKOD BERJAYA DI SIMPAN
    echo "<script>alert('Penambahan rekod jualan telah berjaya');
    window.location='cetakan_resit.php';</script>";

}
?>