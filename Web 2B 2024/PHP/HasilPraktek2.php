<html>
    <body>
        <?php
            $kodeKaryawan = $_POST['kodeKaryawan'];
            $namaKaryawan = $_POST['namaKaryawan'];
            $gajipokok = $_POST['gajipokok'];
            $jabatan = $_POST['jabatan'];
            $jumHrKerjaSebulan = $_POST['jumHrKerjaSebulan'];
            $masakerja = $_POST['masakerja'];

            function hitungUangMakan($jabatan, $jumHrKerjaSebulan) {
                if ($jabatan == 'Manager') {
                    $uang_makan = $jumHrKerjaSebulan * 50000;
                }
                if ($jabatan == 'Supervisor') {
                    $uang_makan = $jumHrKerjaSebulan * 30000;
                }
                if ($jabatan == 'Staff') {
                    $uang_makan = $jumHrKerjaSebulan * 20000;
                }
                return $uang_makan;
            }

            function hitungTunjanganJabatan($jabatan) {
                if ($jabatan == 'Manager') {
                    $tunJabatan = 1000000;
                }
                if ($jabatan == 'Supervisor') {
                    $tunJabatan = 300000;
                }
                if ($jabatan == 'Staff') {
                    $tunJabatan = 200000;
                }
                return $tunJabatan;
            }

            function hitungTunjanganKhusus($jabatan, $masakerja) {
                if ($jabatan == 'Manager') {
                    $m = round($masakerja / 5);
                    $total = $m * 1000000;
                }
                if ($jabatan == 'Supervisor') {
                    $m = round($masakerja / 5);
                    $total = $m * 500000;
                }
                if ($jabatan == 'Staff') {
                    $m = round($masakerja / 5);
                    $total = $m * 200000;
                }
                return $total;
            }
            
            $totalUangMakan = hitungUangMakan($jabatan, $jumHrKerjaSebulan);
            $totalTunJabatan = hitungTunjanganJabatan($jabatan);
            $totalTunjKhusus = hitungTunjanganKhusus($jabatan, $masakerja);
            $total_gaji = $gajipokok + $totalUangMakan + $totalTunJabatan + $totalTunjKhusus;
            
            echo "Kode Karyawan             : $kodeKaryawan<br>";
            echo "Nama Keryawan             : $namaKaryawan<br>";
            echo "Gaji Pokok                : $gajipokok<br>";
            echo "Jabatan                   : $jabatan<br>";
            echo "Jumlah Hari Kerja Sebulan : $jumHrKerjaSebulan<br>";
            echo "Masa Kerja                : $masakerja<br>";
            echo "Uang Makan                : $totalUangMakan<br>";
            echo "Tunjangan Jabatan         : $totalTunJabatan<br>";
            echo "Tunjangan Khusus          : $totalTunjKhusus<br>";
            echo "Total Gaji                : $total_gaji";
        ?>
    </body>
</html>