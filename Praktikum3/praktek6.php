<html>
    <head>
        <title>Penggajian Karyawan</title>
    </head>
    <body>
    <?php
    // Nama : Daeng Ahmad Nurdin
    // NIM  : 121103026
    if(isset($_POST['Submit'])){
        $NIP = $_POST['NIP'];
        $gapok = $_POST['Gaji'];
        $bonus =  $_POST['Bonus'];
        $tunjangan = 5 * $gapok / 100;
        $pajak = 10 * $gapok / 100;
        $totalPenggajian = $gapok + $bonus + $tunjangan - $pajak;
    }
    ?>
    <p>
    =================== <br>
    NIP = <?php echo $NIP; ?><br>
    Nama Pegawai = Daeng Ahmad Nurdin<br>
    =================== <br>
    Gaji Pokok&emsp;=Rp. <?php echo $gapok; ?> <br>
    Bonus &emsp;&emsp;&ensp;=Rp. <?php echo $bonus; ?> <br>
    Tunjangan&emsp;=Rp. <?php echo $tunjangan; ?> <br>
    Pajak&emsp;&emsp;&emsp;=Rp. <?php echo $pajak; ?> <br>
    =================== <br>
    Gaji Yang Harus Dibayarkan&emsp;=Rp. <?php echo $totalPenggajian; ?>
    </p>
    </body>
</html>
