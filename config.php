<?php
//nama localhost, user, password NULL, nama database
$samb = mysqli_connect("localhost","root","","ezcar");
//semak sambungan jika gagal
if (mysqli_connect_errno()){
    echo "Gagal sambungkan pangkalan data mysql: ".mysqli_connect_error();
}
//UBAH SUAI DI SINI
//SETUP NAMA KEDAI
$namasistem="EZCAR";
$namakedai="Ezcar";
$alamat="Lot 88 , Taman Indah , <br> 18000 Kuala Pilah 72000, Perak.";
$moto="BANDINGKAN HARGA KITA";
$logo="header1.jpg";
?>