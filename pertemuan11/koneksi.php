<?php 
$host = mysql_connect("localhost","root","");

if($host){
    echo "Koneksi host berhasil.<br>";
} else {
    echo "Koneksi host gagal.<br>";
}

$db = mysql_select_db("konekdb");

if($db){
    echo "Koneksi db berhasil.<br>";
} else {
    echo "Koneksi db gagal.<br>";
}

?>