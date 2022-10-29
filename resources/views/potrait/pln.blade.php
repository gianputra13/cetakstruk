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
        $periode = $_GET['periode'];
        $nama = $_GET['nama'];
        $jml_bulan= $_GET['jml_bulan'];
        $tarif_daya = $_GET['tarif_daya'];
        $stand_meter = $_GET['stand_meter'];
        $tagihan = $_GET['tagihan'];
        $total_tagihan = $_GET['total_tagihan'];
        $admin = $_GET['admin'];
        $harga = $_GET['harga'];
        $tgl_entri = $_GET['tgl_entri'];
        $tujuan = $_GET['tujuan'];
        $adminCustom = $_GET['adminCustom'];
    ?>
    <div style="font-family: Arial; font-size:11px; padding:2mm;width:80mm;">
        ------------------------------------------------------------------------------
        <br>Struk Pembayaran Tagihan Listrik
        <br>------------------------------------------------------------------------------
        <table style="font-family: Arial; font-size:11px; padding:2mm;width:80mm;">
            <tr>
                <td>IDPEL</td>
                <td>: <?php echo $tujuan ?></td>
            </tr>
            <tr>
                <td>NAMA </td>
                <td>: <?php echo $nama ?></td>
            </tr>
            <tr>
                <td>TARIF/DAYA</td>
                <td>: <?php echo $tarif_daya ?></td>
            </tr>
            <tr>
                <td>BL/TH</td>
                <td>: <?php echo $periode ?></td>
            </tr>
            <tr>
                <td>STAND METER</td>
                <td>: <?php echo $stand_meter ?></td>
            </tr>
            <tr>
                <td>RP TAG PLN</td>
                <td>: <?php echo $harga ?></td>
            </tr>
            {{-- <tr>
                <td>NO REFF</td>
                <td>: <?php echo $periode ?></td>
            </tr> --}}
            <tr>
                <td colspan='2'></td>
            </tr>
            <tr>
                <td colspan='2'>PLN menyatakan struk ini sebagai</td>
            </tr>
            <tr>
                <td colspan='2'>bukti pembayaran yang sah.</td>
            </tr>
            <tr>
                <td colspan='2'></td>
            </tr>
            <tr>
                <td>ADMIN CA*)</td>
                <td>: <?php echo $admin ?></td>
            </tr>
            <tr>
                <td>TOTAL BAYAR</td>
                <td>: <?php echo $total_tagihan ?></td>
            </tr>
            {{-- <tr>
                <td colspan='2'><b>Anda memiliki tunggakan *angsuran* bulan</b></td>
            </tr> --}}
        </table>
        <br>------------------------------------------------------------------------------
        <br>
        <br>Rincian tagihan dapat diakses di www.pln.co.id
        <br>Informasi Contact Center : 123
        <br>Hubungi PLN Terdekat : 123
        <br>
        <br>Tanggal Beli : <?php echo $tgl_entri ?>
        <br>
        {{-- <?php echo $adminCustom ?> --}}
    </div>
    <script>
        window.print();
    </script>
</body>
</html>