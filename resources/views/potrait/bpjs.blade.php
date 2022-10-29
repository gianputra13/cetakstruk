<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        $nama = $_GET['nama'];
        $peserta= $_GET['peserta'];
        $cbg = $_GET['cbg'];  
        $periode = $_GET['periode'];
        $jml_bulan = $_GET['jml_bulan'];
        $tagihan = $_GET['tagihan'];
        $admin = $_GET['admin'];
        $total_tagihan = $_GET['total_tagihan'];
        $harga = $_GET['harga'];
        $tgl_entri = $_GET['tgl_entri'];
        $tujuan = $_GET['tujuan'];
        $total = $harga + $admin
    ?>
    <div style="font-family: Arial; font-size:11px; padding:2mm;width:80mm;">
        ------------------------------------------------------------------------------
        <br>
        <center>Pembayaran Tagihan BPJS KESEHATAN
            <br>Tgl: tanggalSekarang
        </center>
        <br>------------------------------------------------------------------------------
        <table style="font-family: Arial; font-size:11px; padding:2mm;width:80mm;">
            <tr>
                <td>Tgl Bayar</td>
                <td>: <?php echo $tgl_entri ?></td>
            </tr>
            <tr>
                <td>Periode</td>
                <td>: <?php echo $periode ?></td>
            </tr>
            <tr>
                <td>ID PEL</td>
                <td>: <?php echo $tujuan ?></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>: <?php echo $nama ?></td>
            </tr>
            <tr>
                <td>Cabang</td>
                <td>: <?php echo $cbg ?></td>
            </tr>
            <tr>
                <td>Jumlah Peserta</td>
                <td>: <?php echo $peserta ?></td>
            </tr>
            <tr>
                <td>Tagihan</td>
                <td>: <?php echo $tagihan ?></td>
            </tr>
            <tr>
                <td>Adm Bank</td>
                <td>: <?php echo $admin ?></td>
            </tr>
            <tr>
                <td>Total</td>
                <td>: <?php echo $total ?></td>
            </tr>
            <tr>
                <td colspan='2'></td>
            </tr>
            <tr>
                <td>SW Reff</td>
                <td>: -</td>
            </tr>
        </table>
        <br>------------------------------------------------------------------------------
        <br>
        <center>Simpanlah Struk ini sebagai
            <br>bukti pembayaran anda. Struk ini
            <br>merupakan dokumen elektronik dan
            <br> alat bukti hukum yang sah
            <br>(PASAL 5 AYAT 1 UU ITE)
        </center>
        <br>
    </div>
    <script>
        window.print();
    </script>
</body>
</html>