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

    <div class="row">
      <div class="col-sm-12">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="<?= base_url('admin/dashboard') ?>">Admin</a></li>

          <li class="breadcrumb-item"><a href="<?= base_url('admin/banner/positions') ?>">Banner Positions</a></li>

          <li class="breadcrumb-item active">Edit <?= $banner_position->position_name ?></li>
        </ol>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-12">
        <h1>Banner Position</h1>
      </div>
    </div>
  </div>
  <!-- /.container-fluid -->
</section>

<section class="content">
  <div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col">
        <div class="card">
          <div class="card-header bg-dark">
            <h3 class="card-title">Edit</h3>
          </div>
          <!-- /.card-header -->

          <!-- form start -->
          <form role="form" method="post" autocomplete="off">
            <div class="card-body">
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="banner_position_name">Banner Position Name</label>

                    <input type="text" required maxlength="100" class="form-control" name="banner_position_name" id="banner_position_name" value="<?= set_value('banner_position_name', $banner_position->position_name) ?>" maxlength="100" minlength="1" placeholder="Enter unique banner position name" required />

                    <?= form_error('banner_position_name', '<span class="error text-danger"><small>', '</small></span>'); ?>
                  </div>
                </div>

                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="banner_position_slug">Banner Position Slug</label>

                    <input type="text" required maxlength="100" class="form-control" name="banner_position_slug" id="banner_position_slug" value="<?= set_value('banner_position_slug', $banner_position->position_slug) ?>" placeholder="Banner Slug" readonly />

                    <?= form_error('banner_position_slug', '<span class="error text-danger"><small>', '</small></span>'); ?>
                  </div>
                </div>
              </div>

              <hr>

              <div class="row">
                <div class="col-sm-3">
                  <div class="form-group">
                    <label for="banner_position_for_category">Select Category</label>

                    <select class="form-control" name="banner_position_for_category" id="banner_position_for_category">
                      <option value="">NONE</option>
                      <?php foreach ($categories as $cat) : ?>
                        <?= "<option value='$cat->cat_id'", (($banner_position->cat_id == $cat->cat_id) ? " selected" : ""), ">$cat->cat_name</option>" ?>
                      <?php endforeach ?>
                    </select>
                  </div>
                </div>

                <div class="col-sm-3">
                  <div class="form-group">
                    <label for="banner_position_for_product">Select Product</label>

                    <select class="form-control" name="banner_position_for_product" id="banner_position_for_product">
                      <option value="">NONE</option>
                      <?php foreach ($products as $prod) : ?>
                        <?= "<option value='$prod->prod_id'", (($banner_position->prod_id == $prod->prod_id) ? " selected" : ""), ">$prod->prod_name</option>" ?>
                      <?php endforeach ?>
                    </select>
                  </div>
                </div>

                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="banner_position_status">Select Status</label>

                    <!-- <select class="form-control" id="banner_position_status" name="banner_position_status" required>
                      <option value="1" <?//= set_select('banner_position_status', '1'); ?>>Active</option>
                      <option value="0" <?//= set_select('banner_position_status', '0'); ?>>Inactive</option>
                    </select>-->

                    <div>
                      <input type="checkbox" name="banner_position_status" data-bootstrap-switch data-size="large" data-on-color="success" data-off-color="danger" data-on-text="Active" data-off-text="Inactive" value="<?= set_value('banner_position_status', $banner_position->status); ?>" <?= set_checkbox('banner_position_status', set_value('banner_position_status', $banner_position->status), ($banner_position->status == '1') ? true : false) ?>>
                    </div>

                    <?= form_error('banner_position_status', '<span class="error text-danger"><small>', '</small></span>'); ?>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
              <button type="submit" class="btn btn-primary" name="banner_position_submit" id="banner_position_submit" value="1">Submit</button>
            </div>
          </form>
        </div>
        <!-- /.card -->

      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</section>