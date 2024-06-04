<!DOCTYPE html>
<html>
    <body>
        <?php
        $awal = 10;
        $akhir = 20;
        $i = 0;
        $max_i = 10;
        $acc_angka = 0;
        $big = -100;

        do {
            $angka = rand($awal, $akhir);
            echo("angka ke-".$i."= ".$angka."<br>");
            $acc_angka=$acc_angka+$angka;
            if ($angka > $big) {
                $big = $angka;
            }
            $i++;
        } while ($i < $max_i);
        echo("<br>");
        echo("Jumlah seluruh angka = ".$acc_angka."<br>");
        echo("Angka Terbesar = ".$big);

        ?>
    </body>
</html>