<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <?php if ($this->session->flashdata('success_msg')) : ?>
      <div class="alert with-close alert-success alert-dismissible fade show">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <?= $this->session->flashdata('success_msg') ?>
      </div>
    <?php elseif ($this->session->flashdata('error_msg')) : ?>
      <div class="alert with-close alert-danger alert-dismissible fade show">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <?= $this->session->flashdata('error_msg') ?>
      </div>
    <?php endif; ?>

    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Application Versioning</h1>
      </div>


      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="<?= base_url('admin/dashboard') ?>">Admin</a></li>
          <li class="breadcrumb-item active">App Versioning</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>


<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col">
        <!-- general form elements -->
        <div class="card card-secondary">
          <div class="row mt-3 justify-content-center">
            <div class="col-sm-4">
              <div class="info-box">
                <span class="info-box-icon bg-info elevation-1"><i class="fas fa-star"></i></span>

                <div class="info-box-content">
                  <span class="info-box-text">Current Version</span>
                  <span class="info-box-number">
                    <?= $version->version ?>
                  </span>
                </div>
                <!-- /.info-box-content -->
              </div>
            </div>
          </div>


          <div class="row justify-content-center">
            <div class="col-sm-4">
              <!-- form start -->
              <form role="form" method="post" id="version_update_form">
                <div class="alert with-close alert-dismissible fade show d-none mt-2">
                  <button type="button" class="close" data-dismiss="alert">×</button>
                </div>
                <div class="card-body text-center">
                  <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#update_version_modal">Update Version</a>
                </div>
                <!-- /.card-body -->

                <!-- <div class="card-footer">
                            <button type="submit" class="btn btn-primary" id="partner_submit" name="partner_submit" value="1">Submit</button>
                        </div> -->
              </form>
            </div>
          </div>
        </div>
        <!-- /.card -->

      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
</section>


<!-- modal -->
<div class="modal fade" id="update_version_modal" tabindex="-1" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="update_version_modal_label">Update Application Version</h4>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>

      <div class="modal-body">
        <p>Do you want to proceed?</p>
      </div>

      <div class="modal-footer justify-content-end">
        <button type="button" class="btn btn-outline-dark" data-dismiss="modal">No</button>

        <button type="button" class="btn btn-outline-dark btn-ok" onclick="document.getElementById('version_update_form').submit();">Yes</button>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- ./modal -->