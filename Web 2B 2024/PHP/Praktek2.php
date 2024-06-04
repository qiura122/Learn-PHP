<html>
    <body>
        <form id = "Input Gaji Karyawan" name = "Form Gaji Karyawan" method = "post" action = "HasilPraktek2.php">
            Kode Karyawan   : <br>
            <input type = "text" name = "kodeKaryawan"><br><br>
            Nama Keryawan   : <br>
            <input type = "text" name = "namaKaryawan"><br><br>
            Gaji Pokok      : <br>
            <input type = "int" name = "gajipokok"><br><br>
            Jabatan         : <br>
            <select name = "jabatan">
                <option value = "Manager">Manager</option>
                <option value = "Supervisor">Supervisor</option>
                <option value = "Staff">Staff</option>
            </select> <br><br>
            Jumlah Hari Kerja Sebulan : <br>
            <input type = "int" name = "jumHrKerjaSebulan"><br><br>
            Masa Kerja (Tahun) : <br>
            <input type = "int" name = "masakerja"><br>
            <p></p>
            <p><input type="submit" name="button" value="Hitung Total Gaji"/></p>
        </form>
    </body>
</html>