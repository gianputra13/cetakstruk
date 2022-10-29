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
        $total = $harga + $admin
    ?>
<table class="page-break" style="font-family: Arial; font-size:11px; padding: 0 0 0 0;">
    <tr>
        <td width="30%" valign="top">
            <b>STRUK PEMBELIAN TOKEN PLN</b><br /><br />
            <table cellspacing='1' cellpadding='0' style='font-family: Arial; font-size:10px;'>
                <tr>
                    <td>TGL BELI</td>
                    <td>:</td>
                    <td>&nbsp;
                        <?php echo $tgl_entri ?>
                    </td>
                </tr>
                <tr>
                    <td>NO METER</td>
                    <td>:</td>
                    <td>&nbsp;
                        <?php echo $id_meteran ?>
                    </td>
                </tr>
                <tr>
                    <td>IDPEL</td>
                    <td>:</td>
                    <td>&nbsp;
                        <?php echo $id_pelanggan ?>
                    </td>
                </tr>
                <tr>
                    <td>NAMA</td>
                    <td>:</td>
                    <td>&nbsp;
                        <?php echo $nama ?>
                    </td>
                </tr>
                <tr>
                    <td>TRF/DAYA</td>
                    <td>:</td>
                    <td>&nbsp;
                        <?php echo $stand_meter ?>
                    </td>
                </tr>
                {{-- <tr>
                    <td>JML KWH </td>
                    <td>:</td>
                    <td>&nbsp;
                        <?php echo $id_meteran ?>
                    </td>
                </tr> --}}
                <tr>
                    <td>RP TOKEN</td>
                    <td>:</td>
                    <td>&nbsp;Rp
                        <?php echo $rp_token ?>
                    </td>
                </tr>
                <tr>
                    <td>RP NOMINAL</td>
                    <td>:</td>
                    <td>&nbsp;Rp.
                        <?php echo $harga ?>
                    </td>
                </tr>
                <tr>
                    <td>ADMIN</td>
                    <td>:</td>
                    <td>&nbsp;Rp
                        <?php echo $admin ?>
                    </td>
                </tr>
                {{-- <tr>
                    <td>TOTAL</td>
                    <td>:</td>
                    <td>&nbsp;Rp.
                        <?php echo $id_meteran ?>
                    </td>
                </tr> --}}
                <tr>
                    <td><b>TOKEN</b></td>
                    <td>:</td>
                    <td>&nbsp;
                        <?php echo $token ?>
                    </td>
                </tr>
            </table>
        </td>
        <td width="5%">
        </td>
        <td>
            <table width="450" border="0" cellspacing="1" cellpadding='0'
                style='font-family: Arial; font-size:11px;'>
                <tr>
                    <td colspan="5" style='font-size:8px;'>TGL PEMBELIAN :
                        <?php echo $tgl_entri ?><br /><br />
                    </td>
                </tr>
                <tr>
                    <td colspan="5" align="center" style='font-size:12px;'><b>STRUK PEMBELIAN LISTRIK
                            PRABAYAR</b><br /><br /></td>
                </tr>
                <tr>
                    <td width="20%">NO METER </td>
                    <td>:&nbsp;&nbsp;
                        <?php echo $id_meteran ?>
                    </td>
                    <td width="15%">ADMIN</td>
                    <td width="2%">:&nbsp;&nbsp;Rp</td>
                    <td width="15%" align="right">
                        <?php echo $admin ?>
                    </td>
                </tr>
                <tr>
                    <td>IDPEL </td>
                    <td>:&nbsp;&nbsp;
                        <?php echo $id_pelanggan ?>
                    </td>
                    <td>METERAI </td>
                    <td>:&nbsp;&nbsp;Rp</td>
                    <td align="right">
                        <?php echo $materai ?>
                    </td>
                </tr>
                <tr>
                    <td>NAMA </td>
                    <td>:&nbsp;&nbsp;
                        <?php echo $nama ?>
                    </td>
                    <td>PPN </td>
                    <td>:&nbsp;&nbsp;Rp</td>
                    <td align="right">
                        <?php echo $ppn ?>
                    </td>
                </tr>
                <tr>
                    <td>TARIF/DAYA </td>
                    <td>:&nbsp;&nbsp;
                        <?php echo $stand_meter ?>
                    </td>
                    <td>PPJ</td>
                    <td>:&nbsp;&nbsp;Rp</td>
                    <td align="right">
                        <?php echo $ppj ?>
                    </td>
                </tr>
                <tr>
                    <td>JML KWH </td>
                    <td>:&nbsp;&nbsp;
                       -
                    </td>
                    <td>RP TOKEN </td>
                    <td>:&nbsp;&nbsp;Rp</td>
                    <td align="right">
                        <?php echo $rp_token ?>
                    </td>
                </tr>
                <tr>
                    <td>RP NOMINAL </td>
                    <td>:&nbsp;&nbsp;Rp
                        <?php echo $harga ?>
                    </td>
                    <td>RP BAYAR </td>
                    <td>:&nbsp;&nbsp;Rp</td>
                    <td align="right">
                        <?php echo $total ?>
                    </td>
                </tr>
                <tr>
                    <td colspan="5" class="token" align="left" style='font-size:12px;'><b>STROOM / TOKEN :
                        <?php echo $token ?>
                        </b></td>
                </tr>
                <tr>
                    <td colspan="5" align="center" style='font-size:11px;'><br />
                        {{-- {{informasi}} --}}
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
    <script>
        window.print();
    </script>
</body>
</html>

