<?php
//sambung ke pangkalan data 
require('config.php');
//sambung ke fail header
require('header.php');
//mulakan sesi login untuk kekalkan login
session_start();
//semak sama ada data dengan ID pengguna nama telah dihantar 
if (isset($_POST['idPekerja'])){
    //pembolehubah untuk memegang data yang dihantar
    $user = $_POST['idPekerja'];
    $pass = $_POST['kataLaluan'];
    //arahan sql akan dilaksanakan
    $query = mysqli_query($samb,"SELECT * FROM pengguna
    WHERE idPekerja='$user' AND kataLaluan='$pass'");
    $row = mysqli_fetch_assoc($query);

    if(mysqli_num_rows($query) == 0 || $row['kataLaluan']!=$pass) 
    {
        //papar mesej gagal login
        echo"<script>alert('ID pengguna atau Katalaluan yang salah');
        window.location='index.php'</script>";
    }
    else
    {
        $_SESSION['idPekerja']=$row['namaPekerja'];
        $_SESSION['level'] = $row['status'];    
        //cipta sesi login
        $jurujual=$_SESSION['idPekerja'];

        //buka page utama berdasarkan level login
        header("Location: index2.php");
    }
}
?>
<html>
<body>
<FIELDSET>
<!--Papar Jadual-->
<CENTER><table width='70%' border=0>
<tr>
    <td witdh="900"><FONT SIZE="+2"><U>PENGGUNA</U></td>
</tr>
    <td>
    <form method="POST">
    <p>Login masuk untuk pengguna</p>
    <label for="inputID">ID Pengguna</label><br>
    <input type="text" name="idPekerja" placeholder= "ID Pengguna" required>
    <br>
    <label for="inputPassword">Katalaluan</label><br>
    <input type="password" name="kataLaluan"
    id="inputPassword" placeholder="Katalaluan" required><br>
    <button type="submit">Login</button><br>
   </td>
</tr>
    </form>
    </table></center>
    </FIELDSET>
    </body>
    <br><br>
    </html>