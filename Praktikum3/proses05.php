<?php
if(isset($_POST['Login'])){
    $user = $_POST['username'];
    $pass = $_POST['password'];
    if($user == "achmatim" && $pass == "123"){
        echo "<h2>Login Berhasil</h2>";
    } else {
        echo "<h2>Login Gagal</h2>";
    }
}
?>
<?php
// Nama : Daeng Ahmad Nurdin
// NIM  : 121103026
?>
