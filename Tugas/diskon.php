<?php
$bil1 = "";
$bil2 = "";
$bil5 = 0;
$hasil1 = 0;
$hasil2 = 0;
$hasil3 = 0;

if (isset($_POST["tombol1"])) {
    $bil1 = $_POST["bil1"];
    $bil2 = $_POST["bil2"];
    $bil3 = $_POST["bil3"];
    $bil4 = $_POST["bil4"];

    $hasil1 = $bil3 * $bil4;
}

if (isset($_POST["tombol2"])) {
    $bil1 = $_POST["bil1"];
    $bil2 = $_POST["bil2"];
    $bil3 = $_POST["bil3"];
    $bil4 = $_POST["bil4"];


    if ($_POST["bil5"] == "") {
        $bil5 = 0;
    } else {
        $bil5 = $_POST["bil5"];
    }

    $hasil1 = $bil3 * $bil4;
    $hasil2 = $hasil1 - ($hasil1 * ($bil5 / 100));
}

if (isset($_POST["tombol3"])) {
    $bil1 = $_POST["bil1"];
    $bil2 = $_POST["bil2"];
    $bil3 = $_POST["bil3"];
    $bil4 = $_POST["bil4"];
    $bil6 = $_POST["bil6"];


    if ($_POST["bil5"] == "") {
        $bil5 = 0;
    } else {
        $bil5 = $_POST["bil5"];
    }

    $hasil1 = $bil3 * $bil4;
    $hasil2 = $hasil1 - ($hasil1 * ($bil5 / 100));
    $hasil3 = $bil6 - $hasil2;
}




?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./diskon.css">

<body>
    <div class="diskon">
        <form action="<?= $_SERVER['PHP_SELF']; ?>" method="POST">
            <table>

                <TD></TD>
                <div class="judul">
                    <td style="margin-left: -30px"> TABEL PERHITUNGAN
                </div>
                <br><br>
                </td>

                <tr>
                    <td> Nama Barang </td>
                    <td><input type="text" name="bil1" class="tombol" value="<?php echo $bil1 ?>"></td>
                </tr>
                <tr>
                    <td> Jenis Barang </td>
                    <td><input type="text" name="bil2" class="tombol" value="<?php echo $bil2 ?>"> </td>
                </tr>
                <tr>
                    <td> Harga Satuan </td>
                    <td><input type="number" name="bil3" class="tombol" value="<?php echo $bil3 ?>" required> Rp</td>
                </tr>
                <tr>
                    <td> Jumlah Beli </td>
                    <td><input type="number" name="bil4" class="tombol" value="<?php echo $bil4 ?>" required> </td>
                </tr>
                <label>
                    <tr>
                        <td></td>
                        <td><input type="submit" name="tombol1" class="tmbl1"></td>
                    </tr>
                    <td>Total Harga</td>
                    <td><input type="text" placeholder="HASIL" class="tombol" name="total_harga" value="Rp <?php echo $hasil1; ?>"></td>
                    <tr>
                        <td>Diskon</td>
                        <td> <input type="number" name="bil5" class="tombol" value="<?php
                                                                                    if ($bil5 == 0) {
                                                                                        echo "";
                                                                                    } else {
                                                                                        echo $bil5;
                                                                                    }
                                                                                    ?>"> % </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" name="tombol2" class="tmbl1"></td>
                    </tr>
                    <tr>
                        <td>Total Harga</td>
                        <td><input type="text" class="tombol" value="<?php echo "Rp " . $hasil2; ?>"></td>
                    </tr>
                    <tr>
                        <td>Bayar</td>
                        <td><input type="number" name="bil6" class="tombol" value="<?php echo $bil6 ?>">Rp </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" name="tombol3" class="tmbl1"></td>
                    </tr>
                    <tr>
                        <td>Kembalian</td>
                        <td><input type="text" placeholder="HASIL" class="tombol" name="total_harga" value="Rp <?php echo $hasil3; ?>"></td>
                    </tr>

                </label>
                <tr>
                    <td></td>
                    <td> <a href="./diskon1.php"> <input type="submit" value="HAPUS" class="tmblhapus"> </a> </td>
                </tr>
            </table>
        </form>
    </div>
</body>

</html>