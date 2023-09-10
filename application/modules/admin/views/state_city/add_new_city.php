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
        <h1>City</h1>
      </div>


      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="<?= base_url('admin/dashboard') ?>">Dashboard</a></li>
          <li class="breadcrumb-item"><a href="<?= base_url('admin/state-city/cities') ?>">Manage Cities</a></li>
          <li class="breadcrumb-item active">Add New City</li>
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
                    <label for="city_name">City Name</label>
                    <input type="text" class="form-control" name="city_name" id="city_name" value="<?= set_value('city_name'); ?>" maxlength="50" placeholder="Enter City name" />
                    <?= form_error('city_name', '<span class="error text-danger"><small>', '</small></span>'); ?>
                  </div>
                </div>


                <div class="col-sm-6">

                  <div class="form-group">
                    <label for="Select">Select State</label>

                    <select class="form-control" name="city_state_id" id="city_state_id">
                      <option>Select State</option>
                      <?php
                      foreach ($states as $state) :
                        echo "<option value='$state->id' " . set_select('city_state_id', $state->id, FALSE) . ">$state->name</option>";
                      endforeach;
                      ?>
                    </select>

                    <?= form_error('city_state_id', '<span class="error text-danger"><small>', '</small></span>'); ?>
                  </div>
                </div>

              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="city_latitude">Latitude</label>
                    <input type="text" maxlength="50" autocomplete="city_latitude" name="city_latitude" value="<?= set_value("city_latitude"); ?>" class="form-control" id="city_latitude" placeholder="Enter latitude">
                    <?= form_error('city_latitude', '<span class="error text-danger"><small>', '</small></span>'); ?>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label for="city_longitude">Longitude</label>
                    <input type="text" maxlength="50" autocomplete="city_longitude" name="city_longitude" value="<?= set_value("city_longitude"); ?>" class="form-control" id="city_longitude" placeholder="Enter latitude">
                    <?= form_error('city_longitude', '<span class="error text-danger"><small>', '</small></span>'); ?>
                  </div>
                </div>

              </div>
              <div class="row">

                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="city_status">Select Status</label>
                    <div>
                      <input type="checkbox" name="city_status" data-bootstrap-switch data-size="large" data-on-color="success" data-off-color="danger" data-on-text="Active" data-off-text="Inactive" value="1" <?= set_checkbox('city_status', '1', true) ?>>
                    </div>

                    <?= form_error('city_status', '<span class="error text-danger"><small>', '</small></span>'); ?>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
              <button type="submit" class="btn btn-primary" name="city_submit" id="city_submit" value="1">Submit</button>
            </div>
          </form>
        </div>
        <!-- /.card -->

      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
</section>