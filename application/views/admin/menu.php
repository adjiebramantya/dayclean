<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>DayClean - Menu</title>

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
            <h1 class="h3 mb-0 text-gray-800">Data Treatment</h1>
          </div>


          <div class="row">
            <div class="col-lg-12">
                <div class="card shadow mb-4">
                  <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Mengelolah Treatment</h6>
                  </div>
                  <div class="card-body">
                      <div class="col-lg-6">
                      <form>
                          <a href="<?php echo base_url('admin/Home/tambahMenu'); ?>" class="btn btn-success btn-rounded">Tambah Treatment</a>
                      </form>
                      </div>
                  </div>
                </div>
            </div>
          </div>
          <!-- Content Row -->
          <div class="row ">
            <div class="col-lg-12">
              <!-- DataTales Example -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Tabel Treatment</h6>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                      <thead>
                        <tr>
                          <th>Id</th>
                          <th>Nama Treatment</th>
                          <th>Deskripsi</th>
                          <th>Harga</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php 
                        foreach ($datatreatment->result_array() as $m):
                              $id_treatment=$m['id_treatment'];

                              $nama_treatment=$m['nama_treatment'];

                              $deskripsi=$m['deskripsi'];

                              $harga=$m['harga'];

                        ?>
                        <tr>
                          <td><?php echo $id_treatment."<br>"; ?></td>
                          <td><?php echo $nama_treatment."<br>"; ?></td>
                          <td><?php echo $deskripsi."<br>"; ?></td>
                          <td><?php echo $harga."<br>"; ?></td>
                          <td>
                              <div class="row justify-content-center">
                                <a href="#" class="btn btn-info btn-circle"><i class="fas fa-info-circle"></i></a> &nbsp &nbsp 
                                <a href="#" class="btn btn-danger btn-circle"><i class="fas fa-trash"></i></a>
                              </div>
                          </td>
                        </tr>
                        <?php endforeach;?>
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

</body>

</html>
