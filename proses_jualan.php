<?php
require('config.php');
session_start();
$jurujual=$_SESSION['idpengguna'];

if(isseet($_POST['icpelanggan'])){

    //pelanggan
    $icpelanggan=$_POST['icpelanggan'];
    $namaPelanggan=$_POST['namaPelanggan'];
    $nomph=$_POST['nomph'];

    //alamat
    $alamat1=$_POST['alamat1'];
    $alamat2=$_POST['alamat2'];
    $bandar=$_POST['bandar'];
    $poskod=$_POST['poskod'];
    $negeri=$_POST['negeri'];
    //lain-lain
    $tarikhJualan=$_POST['tarikhJualan'];
    $nomplat=$_POST['nomplat'];
    $jenisBayaran=$_POST['JenisBayaran'];

    //WUJUDKAN SESSION - NOMPLAT
    $_SESSION['nomplat']=$nomplat;

    //TAMBAH REKOD - JUALAN
    $result1 = mysqli_query($samb,
    "INSERT INTO jualan
    idjualan,tarkih,jenis_bayaran,nomplat,idpelanggan,idpekerja
    VALUES (NULL,'$tarikhJualan','$jenisBayaran','$nomplat','$icpelanggan','$idPekerja')");

    //TAMBAH REKOD - TABLE PELANGGAN
    $result2 = mysqli_query($samb,
    "INSERT INTO pelanggan (icpelanggan,nama,nomhp)
    values ('$icpelanggan',$namaPelanggan','$nomhp')");

    //TAMBAH REKKOD - TABLE ADDRESS
    $result3 = mysqli_query($samb,
    "INSERT INTO alamat
    (idalamat,alamat1,alamat2,bandar,poskod,negeri,icpelanggan)
    values
    (NULL,'$alamat1','$alamat2','$bandar','$poskod','$negeri','$icpelanggan')");

    //TAMBAH REKOD - KENDERAAN
    $result4 = mysqli_query($samb,
    "UPDATE kenderaan SET model=model, tahun_perbuat=tahun_perbuat,
    harga=harga, gambar=gambar , status='SOLD'
    WHERE nomplat='$nomplat'");

    //PAPARAN MESEJ JIKA REKOD BERJAYA DI SIMPAN
    echo "<script>alert('Penambahan rekod jualan telah berjaya';
    window.location='cetak_resit.php'</script>";

}
?>