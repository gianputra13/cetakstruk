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
        $total = $harga + $adminCustom;
    ?>
    <table class="page-break" style="font-family: Arial; font-size:11px; padding: 0 0 0 0;">
        <tr>
            <td width="25%" valign="top">
                <b>STRUK PEMBAYARAN PLN</b><br /><br />
                <table cellspacing='1' cellpadding='0' style='font-family: Arial; font-size:10px;'>
                    <tr>
                        <td>TGL BELI</td>
                        <td>:</td>
                        <td>&nbsp;&nbsp; <?php echo $tgl_entri ?></td>
                    </tr>
                    <tr>
                        <td>IDPEL</td>
                        <td>:</td>
                        <td>&nbsp;&nbsp; <?php echo $tujuan ?></td>
                    </tr>
                    <tr>
                        <td>NAMA</td>
                        <td>:</td>
                        <td>&nbsp;&nbsp; <?php echo $nama ?></td>
                    </tr>
                    <tr>
                        <td>TRF/DAYA</td>
                        <td>:</td>
                        <td>&nbsp;
                            <?php echo $tarif_daya ?> 
                        </td>
                    </tr>
                    <tr>
                        <td>PERIODE</td>
                        <td>:</td>
                        <td>&nbsp;
                            <?php echo $periode ?> 
                        </td>
                    </tr>
                    <tr>
                        <td>ST METER</td>
                        <td>:</td>
                        <td>&nbsp;
                            <?php echo $stand_meter ?>
                        </td>
                    </tr>
                    <tr>
                        <td>ADMIN</td>
                        <td>:</td>
                        <td>&nbsp;&nbsp;Rp.
                            <?php echo $adminCustom ?>
                        </td>
                    </tr>
                    {{-- <tr v-if="stateDenda">
                        <td>DENDA</td>
                        <td>:</td>
                        <td>&nbsp;&nbsp;Rp denda
                        </td>
                    </tr> --}}
                    <tr>
                        <td>TAGIHAN</td>
                        <td>:</td>
                        <td>&nbsp;&nbsp;Rp.
                            <?php echo $tagihan ?>
                        </td>
                    </tr>
                    <tr>
                        <td>TOTAL</td>
                        <td>:</td>
                        <td>&nbsp;&nbsp;Rp.
                            <?php echo $total ?>
                        </td>
                    </tr>
                </table>
            </td>
            <td width="5%"></td>
            <td>
                <table width="450" border="0" cellspacing="1" cellpadding='0'
                    style='font-family: Arial; font-size:11px;'>
                    <tr>
                        <td colspan="5" align="center" style='font-size:12px;'><b>STRUK PEMBAYARAN PLN PASCA
                                BAYAR</b><br /><br /></td>
                    </tr>
                    <tr>
                        <td width="20%">ID PELANGGAN </td>
                        <td>:&nbsp;&nbsp;
                            <?php echo $tujuan ?>
                        </td>
                        <td width="15%">TANGGAL</td>
                        <td width="2%">:&nbsp;&nbsp;</td>
                        <td align="right">
                            <?php echo $tgl_entri ?>
                        </td>
                    </tr>
                    <tr>
                        <td>NAMA </td>
                        <td>:&nbsp;&nbsp;
                            <?php echo $nama ?>
                        </td>
                        <td>ADMIN </td>
                        <td>:&nbsp;&nbsp;Rp.</td>
                        <td align="right">
                            <?php echo $adminCustom ?>
                        </td>
                    </tr>
                    <tr>
                        <td>TARIF/DAYA </td>
                        <td>:&nbsp;
                            <?php echo $tarif_daya ?> 

                        </td>
                        {{-- <td>DENDA </td>
                        <td>:&nbsp;&nbsp;Rp.</td>
                        <td align="right">
                            denda
                        </td> --}}
                    </tr>
                    <tr>
                        <td>STAND METER </td>
                        <td>:&nbsp;
                            <?php echo $stand_meter ?>
                        </td>
                        <td>TAGIHAN </td>
                        <td>:&nbsp;&nbsp;Rp.</td>
                        <td align="right">
                            <?php echo $tagihan ?>
                        </td>
                    </tr>
                    <tr>
                        <td>PERIODE </td>
                        <td>:&nbsp;
                            <?php echo $periode ?>
                        <td>TOTAL </td>
                        <td>:&nbsp;&nbsp;Rp.</td>
                        <td align="right">
                            <?php echo $total ?>
                        </td>
                    </tr>
                    {{-- <tr>
                        <td>REFF </td>
                        <td colspan="4">:&nbsp;
                            reff
                        </td>
                    </tr> --}}
                    <tr>
                        <td colspan="5" align="center" style='font-size:11px;'><br />
                            Informasi Hubungi Call Center 123 Atau hubungi PLN Terdekat <br />http://www.pln.co.id/
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>