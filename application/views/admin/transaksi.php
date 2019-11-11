<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>DayClean - Transaksi</title>

<?php $this->load->view('admin/res/lib'); ?>

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <?php $this->load->view('admin/res/sitebar'); ?>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

      <?php $this->load->view('admin/res/topnav'); ?>  

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Transaksi</h1>
          </div>

          <!-- Content Row -->
          <div class="row">
            <div class="col-lg-4">
                <div class="card shadow mb-4">
                  <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Data Transaksi</h6>
                  </div>
                  <div class="card-body">
                      <div class="col-lg-6">
                      <form>
                          <a href="#" class="btn btn-success btn-rounded">Tambah</a>
                      </form>
                      </div>
                  </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card shadow mb-4">
                  <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Treatment</h6>
                  </div>
                  <div class="card-body">
                      <div class="col-lg-12">
                      <form>
                          <div class="form-group">
                              <div class="row">
                              <div class="col-lg-8">
                              <input type="text" name="namamenu" class="form-control" id="exampleFormControlInput1" placeholder="Menu">
                              </div>
                              <div class="col-lg-2">
                              <a href="#" class="btn btn-success btn-rounded">Cari</a>
                              </div>
                              </div>
                          </div>
                          <div class="form-group">
                              <input type="text" name="qty" class="form-control" id="exampleFormControlInput1" placeholder="Jumlah">
                              <a href="#" class="btn btn-success btn-rounded mt-3">Tambah</a>
                          </div>
                      </form>
                      </div>
                  </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card shadow mb-4">
                  <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">TOTAL</h6>
                  </div>
                  <div class="card-body">
                      <div class="col-lg-6">

                      <form>
                          <a href="#" class="btn btn-success btn-rounded">Tambah</a>
                      </form>
                      </div>
                  </div>
                </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12">
              <!-- DataTales Example -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Tabel Detail Transaksi</h6>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                      <thead>
                        <tr>
                          <th>Invoice</th>
                          <th>Nama</th>
                          <th>Alamat</th>
                          <th>No.Hp</th>
                          <th>Jenis Treatment</th>
                          <th>Jumlah Sepatu</th>
                          <th>Tgl. Order</th>
                          <th>Tgl. Selesai</th>
                          <th>Catatan</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>0001</td>
                          <td>Suprememan</td>
                          <td>jl.kemaraupanjang no.212</td>
                          <td>082128827676</td>
                          <td>Deep clean</td>
                          <td>2</td>
                          <td>22-10-2019</td>
                          <td>23-10-2019</td>
                          <td>Tolong kembaliannya tidak disumbangkan walau hanya 100 rupiah</td>
                          <td>
                              <div class="row justify-content-center">
                                <a href="#" class="btn btn-info btn-circle"><i class="fas fa-info-circle"></i></a> &nbsp &nbsp 
                                <a href="#" class="btn btn-danger btn-circle"><i class="fas fa-trash"></i></a>
                              </div>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <?php $this->load->view('admin/res/footer'); ?>

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <?php $this->load->view('admin/res/script'); ?>

  <script type="text/javascript">
  function myFunction() {
  var x = document.getElementById("seePass");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
  </script>

</body>

</html>
