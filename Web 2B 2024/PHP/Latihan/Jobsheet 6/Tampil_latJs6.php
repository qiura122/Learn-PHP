<html>
    <body>
        <?php
            $nama = $_POST['nama'];
            $alamat = $_POST['alamat'];
            $jabatan = $_POST['jabatan'];
            $gajipokok = $_POST['gajipokok'];
            $jumhrkerja = $_POST['jumhrkerja'];
            $UM = 0;
            $TJ = 0;

            if ($jabatan == "Manager") {
                $UM = $jumhrkerja * 50000;
                $TJ = 1500000;
            }
            if ($jabatan == "Supervisor") {
                $UM = $jumhrkerja * 30000;
                $TJ = 500000;
            }if ($jabatan == "Staf") {
                $UM = $jumhrkerja * 25000;
                $TJ = 150000;
            }
            $total_gaji = $UM + $TJ + $gajipokok;

            echo "Nama              : $nama<br>";
            echo "Alamat            : $alamat<br>";
            echo "Jabatan           : $jabatan<br>";
            echo "Gaji Pokok        : $gajipokok<br>";
            echo "Jumlah Hari Kerja : $jumhrkerja<br>";
            echo "Uang Makan        = $jumhrkerja x " . ($UM / $jumhrkerja) . " = $UM<br>";
            echo "Tunjangan Jabatan = $TJ<br>";
            echo "Total Gaji        = $UM + $TJ + $gajipokok = $total_gaji";
        ?>
    </body>
</html>
