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
    ?>
    <table width="800" border="0" style="font-family: Arial; font-size:11px; padding: 0 0 0 0;">
        <tr align="center">
            <td colspan="7" align="center">
                <h2>Struk Pembayaran BPJS Kesehatan</h2>
            </td>
        </tr>
        <tr>
           <td width="200">Tanggal</td>
            <td>:</td>
            <td width="200">
                <?php echo $tgl_entri ?>
            </td>
            <td width="200"></td>
            <td width="200">Periode</td>
            <td>:</td>
            <td width="200">
                <?php echo $jml_bulan ?> Bulan
            </td>
        </tr>
        <tr>
            <td width="200">Cabang</td>
            <td>:</td>
            <td width="200">
                <?php echo $cbg ?>
            </td>
            <td></td>
            <td width="200">Jumlah Peserta</td>
            <td>:</td>
            <td width="200">
                <?php echo $peserta ?> orang
            </td>
        </tr>
        <tr>
            <td width="200">ID Pelanggan</td>
            <td>:</td>
            <td width="200">
                <?php echo $tujuan ?>
            </td>
            <td></td>
            <td width="200">Tagihan</td>
            <td>:</td>
            <td width="200">Rp. <span style="float:right;">
                <?php echo $tagihan ?>
            </span></td>
        </tr>
        <tr>
            <td width="200">Nama</td>
            <td>:</td>
            <td width="200">
                <?php echo $nama ?>
            </td>
            <td></td>
            <td width="200">Admin Bank</td>
            <td>:</td>
            <td width="200">Rp. <span style="float:right;">
                <?php echo $admin ?>
            </span></td>
        </tr>
        <tr>
            {{-- <td width="200">SW Reff</td>
            <td>:</td>
            <td width="200">
                <?php echo $tgl_entri ?>
            </td> --}}
            <td></td>
            <td width="200">Total Bayar</td>
            <td>:</td>
            <td width="200">Rp. <span style="float:right;">
                <?php echo $total_tagihan ?>
            </span></td>
        </tr>
        <tr>
            <td colspan="7" align="center"><br>Simpanlah Struk ini sebagai bukti pembayaran anda.<br>Struk ini
            merupakan dokumen elektronik dan alat bukti hukum yang sah (PASAL 5 AYAT 1 UU ITE)</td>
        </tr>
        <tr>
            <td colspan="7" align="center">
                <hr>
            </td>
        </tr>
    </table>
    <script>
        window.print();
    </script>
</body>
</html>