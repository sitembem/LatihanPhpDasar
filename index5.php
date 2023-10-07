<?php
//fumction (built in function atau user)
$teks = "hello world";
echo "panjang dari teks adalah". strlen( $teks) . " karakter.";
//date()-> menampilkan tanggal
echo"<br>";
echo date ("y-m-d h:i:s");

function salam($nama="admin"){
    return "selamat datang disitus kami Admin  $nama";
}
?>

<html>
    <body>
        <h1><?php echo salam(""); ?></h1>
    </body>
</html>
