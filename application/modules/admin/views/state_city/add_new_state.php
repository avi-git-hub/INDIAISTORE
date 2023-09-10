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
        <h1>States</h1>
      </div>


      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="<?= base_url('admin/dashboard') ?>">Dashboard</a></li>
          <li class="breadcrumb-item"><a href="<?= base_url('admin/state-city/states') ?>">Manage States</a></li>
          <li class="breadcrumb-item active">Add New State</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>


<section class="content">
  <div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col">
        <!-- general form elements -->
        <div class="card card-secondary">
          <div class="card-header">
            <h3 class="card-title">Add New</h3>
          </div>
          <!-- /.card-header -->
          <form role="form" method="post" autocomplete="off">
            <div class="card-body">
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="state_name">State Name</label>
                    <input type="text" class="form-control" name="state_name" id="state_name" value="<?= set_value('state_name'); ?>" maxlength="50" placeholder="Enter State name" />
                    <?= form_error('state_name', '<span class="error text-danger"><small>', '</small></span>'); ?>
                  </div>
                </div>

                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="state_status">Select Status</label>
                    <div>
                      <input type="checkbox" name="state_status" data-bootstrap-switch data-size="large" data-on-color="success" data-off-color="danger" data-on-text="Active" data-off-text="Inactive" value="1" <?= set_checkbox('state_status', '1', true) ?>>
                    </div>

                    <?= form_error('state_status', '<span class="error text-danger"><small>', '</small></span>'); ?>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
              <button type="submit" class="btn btn-primary" name="state_submit" id="state_submit" value="1">Submit</button>
            </div>
          </form>
        </div>
        <!-- /.card -->

      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
</section>