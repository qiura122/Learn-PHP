<!DOCTYPE html>
<html>
    <body>
        <?php
        function ftotalpembayaran($vQty, $vHarga) {
            return $vQty * $vHarga;
        }
        function fDiskon ($vTotPembayaran) {
            
            if ($vTotPembayaran >= 500000) {
                $discount = $vTotPembayaran * 0.1;
            } else {
                $discount = 0;
            }

            return $discount;
        }
        function fTotalAfterDiskon ($vtbayar, $vdisc) {
            return $vtbayar - $vdisc;
        }

        $NamaProduk = "Jaket";
        $Harga = 150000;
        $Qty = 5;
        $vtotal = ftotalpembayaran($Qty, $Harga);
        $mydisk = fDiskon($vtotal);
        $after = fTotalAfterDiskon($vtotal, $mydisk);
        echo "Nama Produk           : $NamaProduk<br>";
        echo "Harga Produk          : $Harga<br>";
        echo "Kuantitas Produk      : $Qty<br><br>";

        echo "Total Pembayaran      : $vtotal<br>";
        echo "Diskon                : $mydisk<br>";
        echo "Total Setelah Diskon  : $after<br>";
        ?>
    </body>
</html>