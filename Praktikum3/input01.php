<html>
    <head>
        <title>Pengolahan Form</title>
    </head>
    <body>
        <form action="" method="post" name="input">
            Nama Anda: <input type="text" name="nama">
            <input type="submit" value="Input" name="Input">
        </form>
    </body>
</html>
<?php
if(isset($_POST['Input'])){
    $nama = $_POST['nama'];
    echo "Nama Anda : <b>$nama</b>";
}
?>

<?php
// Nama : Daeng Ahmad Nurdin
// NIM  : 121103026
?>
