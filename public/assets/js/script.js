$(function () {
    $(".submit").on("click", function () {
        $("tr").remove(".tablerow");
        var tujuan = $("#tujuan").val();
        var start_date = $("#start_date").val();
        var end_date = $("#end_date").val();
        var tambah =
            '<div class="spinner-border" role="status"><span class="visually-hidden">Loading...</span></div>';
        var spinner = '<div class="spinner"></div>';

        if (tujuan == "") {
            alert("No Tujuan belum diisi");
        } else {
            var send = {
                tujuan: tujuan,
                start_date: start_date,
                end_date: end_date,
                page: 1,
                per_page: 3,
            };
            $(".spinner").html(tambah);
            getData(send, spinner);
        }
    });

    $(".datepicker").datepicker({
        format: "yyyy-mm-dd",
        autoclose: true,
        todayHighlight: true,
    });
});

function makecall(pagenum, send) {
    $("tr").remove(".tablerow");
    var spinner = '<div class="spinner"></div>';
    var send = {
        tujuan: send.tujuan,
        start_date: send.start_date,
        end_date: send.end_date,
        page: pagenum,
        per_page: 3,
    };
    getData(send, spinner);
}

function getData(send, spinner) {
    $.ajax({
        type: "POST",
        url: "https://apicetak.murapay.id:9878/api/history",
        data: JSON.stringify(send),
        contentType: "application/json; charset=utf-8",
        dataType: "json",
        timeout: 500000,
        success: function (data) {
            let result = data.data;
            $(".spinner").html(spinner);
            if (data.message === "Data tidak ditemukan") {
                $("#myTable").append(
                    '<tr class="tablerow"><td colspan="8" class="text-center">' +
                        data.message +
                        "</td></tr>"
                );
            } else {
                $.map(result, function (item, i) {
                    $("#myTable").append(
                        '<tr class="tablerow"><td><button onclick="cetak(' +
                            item.kode +
                            ',1)" type="button" title="Cetak ukuran 80mm untuk printer kasir/bluetooth" class="btn btn-outline-primary cetak"  style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bluetooth" viewBox="0 0 16 16"><path fill-rule="evenodd" d="m8.543 3.948 1.316 1.316L8.543 6.58V3.948Zm0 8.104 1.316-1.316L8.543 9.42v2.632Zm-1.41-4.043L4.275 5.133l.827-.827L7.377 6.58V1.128l4.137 4.136L8.787 8.01l2.745 2.745-4.136 4.137V9.42l-2.294 2.274-.827-.827L7.133 8.01ZM7.903 16c3.498 0 5.904-1.655 5.904-8.01 0-6.335-2.406-7.99-5.903-7.99C4.407 0 2 1.655 2 8.01 2 14.344 4.407 16 7.904 16Z"/></svg></button>  <button onclick="cetak(' +
                            item.kode +
                            ',2)" type="button" title="Cetak A4 untuk printer Dot Matrix & InkJet" class="btn btn-outline-primary cetak mt-1"  style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-printer" viewBox="0 0 16 16"><path d="M2.5 8a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z"/><path d="M5 1a2 2 0 0 0-2 2v2H2a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h1v1a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2v-1h1a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2h-1V3a2 2 0 0 0-2-2H5zM4 3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v2H4V3zm1 5a2 2 0 0 0-2 2v1H2a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-1v-1a2 2 0 0 0-2-2H5zm7 2v3a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1z"/></svg></button></td><td>' +
                            item.tgl_entri +
                            "</td>" +
                            "<td>" +
                            item.kode +
                            "</td>" +
                            "<td>" +
                            item.kode_produk +
                            "</td>" +
                            "<td>" +
                            item.tujuan +
                            "</td>" +
                            '<td><input type="number" class="col-xs-2" value="' +
                            item.tambahan.admin +
                            '" id="' +
                            item.kode +
                            '" placeholder="Admin"></td>' +
                            "<td>" +
                            item.harga +
                            "</td>" +
                            "<td>" +
                            item.sn +
                            "</td></tr>"
                    );
                });
            }
            var total_pages = data.total_page;
            var pagenum = "";
            if (!data.total_page) {
                pagenum = 1;
                total_pages = 1;
            } else {
                pagenum = send.page;
            }
            createpagination(pagenum, total_pages, send);
        },
        error: function (request, status, error) {
            // alert(request.responseText);
            $(".spinner").html(spinner);
            $("#myTable").append(
                '<tr class="tablerow"><td colspan="8" class="text-center">Error Api Server</td></tr>'
            );
        },
    });
}

function createpagination(pagenum, total_pages, send) {
    $("#page_container").html("");
    if (pagenum == 1) {
        $("#page_container").append(
            "<li class='page-item disabled previous'><a href='javascript:void(0)' class='page-link'><</a></li>"
        );
    } else {
        $("#page_container").append(
            "<li class='page-item' onclick='makecall(" +
                (pagenum - 1) +
                ", " +
                JSON.stringify(send) +
                ")'><a href='javascript:void(0)' class='page-link'><</a></li>"
        );
    }

    var i = 0;
    for (i = 0; i <= 2; i++) {
        if (pagenum == pagenum + i) {
            $("#page_container").append(
                "<li class='page-item disabled'><a href='javascript:void(0)' class='page-link'>" +
                    (pagenum + i) +
                    "</a></li>"
            );
        } else {
            if (pagenum + i <= total_pages) {
                $("#page_container").append(
                    "<li class='page-item' onclick='makecall(" +
                        (pagenum + i) +
                        ", " +
                        JSON.stringify(send) +
                        ")'><a href='javascript:void(0)' class='page-link'>" +
                        (pagenum + i) +
                        "</a></li>"
                );
            }
        }
    }

    if (pagenum == total_pages) {
        $("#page_container").append(
            "<li class='page-item disabled'><a href='javascript:void(0)' class='page-link'>></a></li>"
        );
    } else {
        $("#page_container").append(
            "<li class='page-item next' onclick='makecall(" +
                (pagenum + 1) +
                ", " +
                JSON.stringify(send) +
                ")'><a href='javascript:void(0)' class='page-link'>></a></li>"
        );
    }
}

function cetak(kode, potrait) {
    var myVar = $("#" + kode).val();
    var admin1 = myVar;
    var kode = {
        kodetrx: kode,
    };
    getCetak(kode, potrait, admin1);
}

function getCetak(kode, potrait, admin1) {
    $.ajax({
        type: "POST",
        url: "https://apicetak.murapay.id:9878/api/print",
        data: JSON.stringify(kode),
        contentType: "application/json; charset=utf-8",
        dataType: "json",
        success: function (data) {
            let result = data.data;

            var adminCustom = admin1;
            var token = "";
            var nama = "";
            var id_meteran = "";
            var id_pelanggan = "";
            var angsuran = "";
            var rp_token = "";
            var ppn = "";
            var ppj = "";
            var materai = "";
            var pln_ref = "";
            var stand_meter = "";
            var admin = "";
            var harga = "";
            var tgl_entri = "";
            var kode_produk = "";
            var tarif_daya = "";
            var tujuan = "";
            $.map(result, function (item, i) {
                token = item.tambahan.token;
                nama = item.tambahan.nama;
                id_meteran = item.tambahan.id_meteran;
                id_pelanggan = item.tambahan.id_pelanggan;
                angsuran = item.tambahan.angsuran;
                rp_token = item.tambahan.rp_token;
                ppn = item.tambahan.ppn;
                ppj = item.tambahan.ppj;
                materai = item.tambahan.materai;
                pln_ref = item.tambahan.pln_ref;
                stand_meter = item.tambahan.stand_meter;
                admin = item.tambahan.admin;
                harga = item.harga;
                tgl_entri = item.tgl_entri;
                periode = item.tambahan.periode;
                jml_bulan = item.tambahan.jml_bulan;
                tarif_daya = item.tambahan.tarif_daya;
                tagihan = item.tambahan.tagihan;
                total_tagihan = item.tambahan.total_tagihan;
                kode_produk = item.kode_produk;
                tujuan = item.tujuan;
            });

            if (kode_produk.includes("BYRPDAM")) {
                judul = "PDAM";
            } else if (kode_produk === "BYRTLKTLP") {
                judul = "TELKOM TELPON";
            } else if (kode_produk === "BYRFNCADR") {
                judul = "ADIRA";
            } else if (kode_produk === "BYRFNCBAF") {
                judul = "BAF";
            } else if (kode_produk === "BYRFNCCLB") {
                judul = "COLUMBIA";
            } else if (kode_produk === "BYRFNCMAF") {
                judul = "MAF";
            } else if (kode_produk === "BYRFNCMCF") {
                judul = "MCF";
            } else if (kode_produk === "BYRFNCNSC") {
                judul = "NSC";
            } else if (kode_produk === "BYRFNCOTO") {
                judul = "OTO";
            } else if (kode_produk === "BYRTLKSPDY") {
                judul = "TELKOM SPEEDY";
            }

            if (potrait === 1) {
                if (kode_produk === "BYRPLN") {
                    window.location =
                        "/pln?periode=" +
                        periode +
                        "&nama=" +
                        nama +
                        "&jml_bulan=" +
                        jml_bulan +
                        "&tarif_daya=" +
                        tarif_daya +
                        "&stand_meter=" +
                        stand_meter +
                        "&tagihan=" +
                        tagihan +
                        "&total_tagihan=" +
                        total_tagihan +
                        "&admin=" +
                        admin +
                        "&harga=" +
                        harga +
                        "&tgl_entri=" +
                        tgl_entri +
                        "&tujuan=" +
                        tujuan +
                        "&adminCustom=" +
                        adminCustom;
                } else if (kode_produk.includes("BYRPLN")) {
                    window.location =
                        "/plntoken?token=" +
                        token +
                        "&nama=" +
                        nama +
                        "&id_meteran=" +
                        id_meteran +
                        "&id_pelanggan=" +
                        id_pelanggan +
                        "&angsuran=" +
                        angsuran +
                        "&rp_token=" +
                        rp_token +
                        "&ppn=" +
                        ppn +
                        "&ppj=" +
                        ppj +
                        "&materai=" +
                        materai +
                        "&pln_ref=" +
                        pln_ref +
                        "&stand_meter=" +
                        stand_meter +
                        "&admin=" +
                        admin +
                        "&harga=" +
                        harga +
                        "&tgl_entri=" +
                        tgl_entri +
                        "&adminCustom=" +
                        adminCustom;
                } else if (kode_produk.includes("BYRBPJS" || "BYRBPJSTK")) {
                    window.location =
                        "/bpjs?nama=" +
                        nama +
                        "&peserta=" +
                        peserta +
                        "&cbg=" +
                        cbg +
                        "&periode=" +
                        periode +
                        "&jml_bulan=" +
                        jml_bulan +
                        "&tagihan=" +
                        tagihan +
                        "&harga=" +
                        harga +
                        "&tgl_entri=" +
                        tgl_entri +
                        "&tujuan=" +
                        tujuan +
                        "&adminCustom=" +
                        adminCustom;
                } else {
                    // alert(judul);
                    window.location =
                        "/tagihan?nama=" +
                        nama +
                        "&periode=" +
                        periode +
                        "&jml_bulan=" +
                        jml_bulan +
                        "&stand_meter=" +
                        stand_meter +
                        "&tagihan=" +
                        tagihan +
                        "&admin=" +
                        admin +
                        "&total_tagihan=" +
                        total_tagihan +
                        "&harga=" +
                        harga +
                        "&tgl_entri=" +
                        tgl_entri +
                        "&tujuan=" +
                        tujuan +
                        "&judul=" +
                        judul +
                        "&adminCustom=" +
                        adminCustom;
                }
            } else {
                if (kode_produk === "BYRPLN") {
                    window.location =
                        "/LandscapePln?periode=" +
                        periode +
                        "&nama=" +
                        nama +
                        "&jml_bulan=" +
                        jml_bulan +
                        "&tarif_daya=" +
                        tarif_daya +
                        "&stand_meter=" +
                        stand_meter +
                        "&tagihan=" +
                        tagihan +
                        "&total_tagihan=" +
                        total_tagihan +
                        "&admin=" +
                        admin +
                        "&harga=" +
                        harga +
                        "&tgl_entri=" +
                        tgl_entri +
                        "&tujuan=" +
                        tujuan +
                        "&adminCustom=" +
                        adminCustom;
                } else if (kode_produk.includes("BYRPLN")) {
                    window.location =
                        "/LandscapePlntoken?token=" +
                        token +
                        "&nama=" +
                        nama +
                        "&id_meteran=" +
                        id_meteran +
                        "&id_pelanggan=" +
                        id_pelanggan +
                        "&angsuran=" +
                        angsuran +
                        "&rp_token=" +
                        rp_token +
                        "&ppn=" +
                        ppn +
                        "&ppj=" +
                        ppj +
                        "&materai=" +
                        materai +
                        "&pln_ref=" +
                        pln_ref +
                        "&stand_meter=" +
                        stand_meter +
                        "&admin=" +
                        admin +
                        "&harga=" +
                        harga +
                        "&tgl_entri=" +
                        tgl_entri +
                        "&adminCustom=" +
                        adminCustom;
                } else if (kode_produk.includes("BYRBPJS" || "BYRBPJSTK")) {
                    window.location =
                        "/LandscapeBpjs?nama=" +
                        nama +
                        "&peserta=" +
                        peserta +
                        "&cbg=" +
                        cbg +
                        "&periode=" +
                        periode +
                        "&jml_bulan=" +
                        jml_bulan +
                        "&tagihan=" +
                        tagihan +
                        "&harga=" +
                        harga +
                        "&tgl_entri=" +
                        tgl_entri +
                        "&tujuan=" +
                        tujuan +
                        "&adminCustom=" +
                        adminCustom;
                } else {
                    window.location =
                        "/LandscapeTagihan?nama=" +
                        nama +
                        "&periode=" +
                        periode +
                        "&jml_bulan=" +
                        jml_bulan +
                        "&stand_meter=" +
                        stand_meter +
                        "&tagihan=" +
                        tagihan +
                        "&admin=" +
                        admin +
                        "&total_tagihan=" +
                        total_tagihan +
                        "&harga=" +
                        harga +
                        "&tgl_entri=" +
                        tgl_entri +
                        "&tujuan=" +
                        tujuan +
                        "&judul=" +
                        judul +
                        "&adminCustom=" +
                        adminCustom;
                }
            }
        },
        error: function (err) {},
    });
}
