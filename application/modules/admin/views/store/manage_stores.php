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
        <h1>Stores</h1>
      </div>

      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="<?= base_url('admin/stores') ?>">Stores</a></li>

          <li class="breadcrumb-item active">Manage</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header bg-dark">
          <strong class="card-title">Stores Data</strong>
        </div>

        <div class="card-body">
          <a href="<?= base_url('admin/store/download'); ?>" target="_blank" role="button" class="btn btn-dark btn-sm float-right ml-2">
            <i class="fa fa-download"></i> Download
          </a>

          <a href="<?= base_url('admin/store/upload'); ?>" target="_blank" role="button" class="btn btn-dark btn-sm float-right ml-2">
            <i class="fa fa-download"></i> Upload
          </a>

          <a href="<?= base_url('admin/store/add-new'); ?>" role="button" class="btn btn-dark btn-sm float-right">
            <i class="fa fa-plus"></i> Add Store
          </a>

          <table id="store_manage_table" class="table table-striped table-bordered"></table>
        </div>
      </div>
      <!-- /.card -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
</section>
<!-- /.content -->

<!-- modal -->
<div class="modal fade" id="store_confirm_delete" tabindex="-1" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content bg-danger">
      <div class="modal-header">
        <h4 class="modal-title" id="store_confirm_delete_label">Delete Store</h4>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>

      <div class="modal-body">
        <p>You are about to delete <b><i class="title"></i></b> store, this procedure is irreversible.</p>

        <p>Do you want to proceed?</p>
      </div>

      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>

        <button type="button" class="btn btn-outline-light btn-ok">Delete</button>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- ./modal -->