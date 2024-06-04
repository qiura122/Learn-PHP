<html>
    <body>
        <form id = "Form Lembur Pegawai" name = "Laporan Lembur Pegawai" method = "post" action = "HasilPraktek.php">
            Nama : <br>
            <input type = "text" name = "nama"><br><br>
            Jenis Kelamin :<br>
            <p>
                <input type = "radio" name = "kelamin" value = "laki" /> Laki - laki<br>
                <input type = "radio" name = "kelamin" value = "perempuan" /> Perempuan<br>
            </p>
            Status Pegawai :<br>
            <select name = "status">
                <option value = "Pegawai Asn">Pegawai ASN</option>
                <option value = "Pegawai P3k">Pegawai P3K</option>
                <option value = "Dosen Asn">Dosen ASN</option>
                <option value = "Dosen P3k">Dosen P3K</option>
            </select><br><br>
            Jam Lembur :<br>
            <input type = "int" name = "jamlembur"><br>
            <p></p>
            <p><input type="submit" name="button" value="Hitung"/></p>
        </form>
    </body>
</html>