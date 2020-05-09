<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./login.css">
</head>

<body>
    <div class="login">
        <form action="" method="POST">
            <table>

                <td> <img class="gambar" src="./images/facebook_logos_PNG19751.png" alt=""></td>
                <tr>
                    <td>
                        <input type="text" name="username" class="tombol1" placeholder="username">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="password" name="password" class="tombol1" placeholder="password">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" name="submit" class="tombol2" placeholder="Submit">
                        <input type="submit" name="hapus" class="tombol2" value="Hapus">
                    </td>
                </tr>

                <td><input type="submit" name="register" class="tombol3" value="Register"></td>

            </table>
        </form>
    </div>
</body>

<?php
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    echo  "SELAMAT KAMU BERHASIL MASUK!" . "<br>" . "username kamu adalah $username" . " dan password kamu adalah $password";
}


?>





</html>