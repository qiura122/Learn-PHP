<?php
$expire = time() + 10;
setcookie('kunjungan', 1, $expire);
?>
<html>

<head>
    <title>Cookies</title>
</head>

<body>
    <?php
    if (isset($_COOKIE['kunjungan'])) {
        echo "Selamat Datang Kembali";
    } else {
        echo "Selamat Datang, Ini Kunjungan Anda Pertama Kali";
    }
    ?>
</body>

</html>