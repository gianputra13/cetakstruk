<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cetak Struk</title>
    <link rel="stylesheet" href="{{ url('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/bootstrap-datepicker.min.css') }}">
    <meta name="_token" content="{{ csrf_token() }}">
  </head>

  <body>
    <div class="container-fluid">
      <div class="row py-5 bg-header"></div>
      <div class="row justify-content-center">
        <div class="col-sm-10 shadow-sm rounded py-2 title borderTitle">
          <div class="row text-center py-1">
            <div class="col-sm">  
              <h2>Cetak Struk</h2>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid mt-5">
      <div class="row">
        <div class="col-sm-12">
          <div class="card shadow-lg">
            <div class="card-header borderCard">
              <div class="row">
                <div class="spinner"></div>
              </div>
              <div class="row py-2">
                <div class="col-sm-8">
                  <img src="{{ url('assets/img/mura.png') }}" class="image" alt="">
                </div>
                <div class="col-sm-4 pt-1">
                  <div class="row">
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="Search No Tujuan.." name="tujuan" id="tujuan" required >
                      <button class="btn btn-primary bg-header submit" type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/></svg>
                      </button>
                    </div>
                  </div>
                  <div class="row justify-content-end">
                    <div class="col-sm-6 mt-2">
                      <input type="text" placeholder="Tanggal Awal" id="start_date" class="form-control datepicker">
                    </div>
                    <div class="col-sm-6 mt-2">
                      <input type="text" placeholder="Tanggal Ahkir" id="end_date" class="form-control datepicker">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-body mb-5">
              <div class="table-responsive">
              <table class="table table-hover table-bordered" id="myTable">
                <thead>
                  <tr>
                    <th scope="col">Cetak</th>
                    <th scope="col">Tgl Transaksi</th>
                    <th scope="col">Kode Trx</th>
                    <th scope="col">Kode Produk</th>
                    <th scope="col">Tujuan</th>
                    <th scope="col">Admin</th>
                    <th scope="col">Harga</th>
                    <th scope="col">SN</th>
                    </tr>
                </thead>
                <tbody>

                </tbody>
              </table>
              </div>
              <div class="row mt-4 content-center">
                <div class="col-sm-6">
                  <ul class="pagination" id="page_container"></ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="py-3 mt-5 bg-header footer">
      <div class="row text-center"><span>© Copyright MuraPay. All Rights Reserved</span></div>
    </div>
    <script src="{{ url('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ url('assets/js/jquery-3.6.1.min.js') }}"></script>
    <script src="{{ url('assets/js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ url('assets/js/script.js') }}"></script>
  </body>
</html>

