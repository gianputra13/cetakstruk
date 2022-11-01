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
        $periode= $_GET['periode'];
        $jml_bulan = $_GET['jml_bulan'];  
        $stand_meter = $_GET['stand_meter'];
        $tagihan = $_GET['tagihan'];
        $admin = $_GET['admin'];
        $total_tagihan = $_GET['total_tagihan'];
        $harga = $_GET['harga'];
        $tgl_entri = $_GET['tgl_entri'];
        $tujuan = $_GET['tujuan'];
        $judul = $_GET['judul'];
        $tgl_sekarang = date("Y/m/d");
        $adminCustom = $_GET['adminCustom'];
        $total = $harga + $adminCustom
    ?>
        <table width="800" style = "font-family: Arial; font-size:11px; padding: 0 0 0 0;">
            <tr align="center">
                <td colspan="7">
                <h4>STRUK PEMBAYARAN TAGIHAN
                    <?php echo $judul ?>
                </h4>
                </td>
            </tr>
            <tr>
                <td width="15%">Tanggal</td>
                <td>:</td>
                <td width="35%">
                    <?php echo $tgl_entri ?>
                </td>
                <td>&nbsp;&nbsp;&nbsp;</td>
                {{-- <td width="15%">No. Reff</td>
                <td>:</td>
                <td width="35%">
                    <?php echo $tgl_entri ?>
                </td> --}}
            </tr>
            <tr>
                <td width="15%">ID Pelanggan</td>
                <td>:</td>
                <td width="35%">
                    <?php echo $tujuan ?>
                </td>
                <td>&nbsp;&nbsp;&nbsp;</td>
                <td width="15%">Tagihan</td>
                <td>:</td>
                <td width="35%">Rp.
                    <?php echo $tagihan ?>
                </td>
            </tr>
            <tr>
                <td width="15%">Atas Nama</td>
                <td>:</td>
                <td width="35%">
                    <?php echo $nama ?>
                </td>
                <td>&nbsp;&nbsp;&nbsp;</td>
                <td width="15%">Biaya Admin</td>
                <td>:</td>
                <td width="35%">Rp.
                    <?php echo $adminCustom ?>
                </td>
            </tr>
            <tr>
                <td width="15%">Periode</td>
                <td>:</td>
                <td width="35%">
                    <?php echo $periode ?>
                </td>
                <td>&nbsp;&nbsp;&nbsp;</td>
                <td width="15%">Total Bayar</td>
                <td>:</td>
                <td width="35%">Rp.
                    <?php echo $total ?>
                </td>
            </tr>
            <tr>
                <td colspan="7" align="center">
                    <br />
                    Simpanlah Struk ini sebagai bukti pembayaran anda.<br>Struk ini merupakan dokumen elektronik dan
                    alat bukti hukum yang sah (PASAL 5 AYAT 1 UU ITE)
                </td>
            </tr>
            <tr>
                <td colspan="7" align="center">
                </td>
            </tr>
        </table>
    <script>
        window.print();
    </script>
</body>
</html>