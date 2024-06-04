<html>
    <body>
        <?php
            $nama = $_POST['nama'];
            $kelamin = $_POST['kelamin'];
            $statPegawai = $_POST['status'];
            $jamlembur = $_POST['jamlembur'];
            $lemburPjam = 0;

            if ($statPegawai == "Pegawai Asn") {
                $lemburPjam = 20000;
            }
            if ($statPegawai == "Pegawai P3k") {
                $lemburPjam = 15000;
            }
            if ($statPegawai == "Dosen Asn") {
                $lemburPjam = 40000;
            }
            if ($statPegawai == "Dosen P3k") {
                $lemburPjam = 35000;
            }

            $totalUangLembur = $lemburPjam * $jamlembur;

            echo "Nama              : $nama<br>";
            echo "Jenis Kelamin     : $kelamin<br>";
            echo "Status Pegawai    : $statPegawai<br>";
            echo "Jam Lembur        : $jamlembur<br>";
            echo "Lembur Per Jam    : $lemburPjam<br>";
            echo "Total Uang Lembur : $totalUangLembur";
        ?>
    </body>
</html>