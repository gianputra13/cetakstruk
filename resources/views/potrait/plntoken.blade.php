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
        $token = $_GET['token'];
        $nama = $_GET['nama'];
        $id_meteran= $_GET['id_meteran'];
        $id_pelanggan = $_GET['id_pelanggan'];
        $angsuran = $_GET['angsuran'];
        $rp_token = $_GET['rp_token'];
        $ppn = $_GET['ppn'];
        $ppj = $_GET['ppj'];
        $materai = $_GET['materai'];
        $pln_ref = $_GET['pln_ref'];
        $stand_meter = $_GET['stand_meter'];
        $admin = $_GET['admin'];
        $harga = $_GET['harga'];
        $tgl_entri = $_GET['tgl_entri'];
    ?>
    <div style="font-family: Arial; font-size:11px; padding:2mm;width:80mm;">
        <center>STRUK PEMBELIAN LISTRIK PRABAYAR</center><br>
        -----------------------------------------------------------------------------<br><br>
        <table style="font-family: Arial; font-size:11px; padding:2mm;width:80mm;">
            <tr>
                <td>NO METER</td>
                <td>: <?php echo $id_meteran ?></td>
            </tr>
            <tr>
                <td>IDPEL</td>
                <td>: <?php echo $id_pelanggan ?></td>
            </tr>
            <tr>
                <td>NAMA</td>
                <td>: <?php echo $nama ?></td>
            </tr>
            <tr>
                <td>TARIF/DAYA</td>
                <td>: <?php echo $stand_meter ?></td>
            </tr>
            <tr>
                <td>NO REF</td>
                <td>: <?php echo $pln_ref ?></td>
            </tr>
            <tr>
                <td>RP BAYAR</td>
                <td>: <?php echo $harga ?></td>
            </tr>
            <tr>
                <td>METERAI</td>
                <td>: <?php echo $materai ?></td>
            </tr>
            <tr>
                <td>PPn</td>
                <td>: <?php echo $ppn ?></td>
            </tr>
            <tr>
                <td>PPj</td>
                <td>: <?php echo $ppj ?></td>
            </tr>
            <tr>
                <td>ANGSURAN</td>
                <td>: <?php echo $angsuran ?></td>
            </tr>
            {{-- <tr>
                <td>RP STROOM/TOKEN</td>
                <td>: <?php echo $pln_ref ?></td>
            </tr>
            <tr>
                <td>JML KWH</td>
                <td>: <?php echo $pln_ref ?></td>
            </tr>
            <tr>
                <td>STROOM/TOKEN</td>
                <td>: <?php echo $pln_ref ?></td>
            </tr> --}}
            <tr>
                <td>ADMIN BANK</td>
                <td>: <?php echo $admin ?></td>
            </tr>
        </table>
        <br>
        <br>
        <center><br>
            <br>Tanggal Beli : <?php echo $tgl_entri ?>
        </center>
        <br>
    </div>
    <script>
        window.print();
    </script>
</body>
</html>

