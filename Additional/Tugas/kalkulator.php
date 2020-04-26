<?php

if (isset($_POST["hitung"])) {
    $angka1 = $_POST["angka1"];
    $angka2 = $_POST["angka2"];
    $operasi = $_POST["operasi"];

    if ($operasi == "+") {
        $hasil = $angka1 + $angka2;
    }
    if ($operasi == "-") {
        $hasil = $angka1 - $angka2;
    }
    if ($operasi == "*") {
        $hasil = $angka1 * $angka2;
    }
    if ($operasi == "/") {
        $hasil = $angka1 / $angka2;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./zzz.css">
</head>


<body>
    <div class="kalkulator">
        <h1>KALKULATOR</h1>
        <form action="" method="POST">
            <input type="number" name="angka1" class="bil" placeholder="masukkan bilangan satu">
            <input type="number" name="angka2" class="bil" placeholder="masukkan bilangan dua">
            <select class="option" name="operasi" id="operasi">
                <option>-Pilih-</option>
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>
            </select>
            <input type="submit" value="HITUNG" name="hitung" class="tombol">
            <input type="reset" value="HAPUS" class="clear">
            <?php if (isset($_POST['hitung'])) { ?>
                <input type="text" value="<?php echo $hasil; ?>" class="bil">
            <?php } else { ?>
                <input type="text" value="0" class="bil">
            <?php } ?>

        </form>
    </div>
</body>

</html>