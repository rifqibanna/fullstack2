<form method="POST" action="">
    <label for="Nama">Nama Anda</label>
    <input type="text" id="nama" name="nama">
    <label for="alamat">Alamat</label>
    <input type="text" id="alamat" name="alamat">
    <button type="submit" name="btnsimpan">proses</button>
</form>


<?php

if (isset($_POST["btnsimpan"])) {

    $nama = $_POST["nama"];
    $alamat = $_POST["alamat"];

    echo "nama anda adalah " . $nama . " Alamat anda di " . $alamat;
}
