<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <?php if ($this->session->flashdata('success_msg')): ?>
      <div class="alert with-close alert-success alert-dismissible fade show">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <?= $this->session->flashdata('success_msg') ?>
      </div>
    <?php elseif ($this->session->flashdata('error_msg')): ?>
      <div class="alert with-close alert-danger alert-dismissible fade show">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <?= $this->session->flashdata('error_msg') ?>
      </div>	
    <?php endif; ?>

    <div class="row">
      <div class="col-sm-12">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="<?= base_url('admin/dashboard') ?>">Admin</a></li>

          <li class="breadcrumb-item"><a href="<?= base_url("admin/product-feature/categories") ?>">Product Feature Categories</a></li>

          <li class="breadcrumb-item"><a href="<?= base_url("admin/product-feature/category/$feat_cat_id") ?>"><?= $prod_feat_cat->feat_cat_name ?> Feature Values</a></li>

          <li class="breadcrumb-item active">Add New Feature Value</li>
        </ol>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-12">
        <h1>Add New</h1>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

<section class="content">
  <div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col">
        <!-- general form elements -->
        <div class="card">
          <div class="card-header bg-dark">
            <h3 class="card-title">Add New Feature</h3>
          </div>
          <!-- /.card-header -->

          <!-- form start -->
          <form role="form" method="post" enctype="multipart/form-data" autocomplete="off">
            <div class="card-body">
              <input type="hidden" name="feat_cat_id" id="feat_cat_id" value="<?= $feat_cat_id ?>" />

              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="feat_title">Feature Title</label>

                    <input type="text" class="form-control" name="feat_title" id="feat_title" value="<?= set_value('feat_title') ?>" maxlength="100" minlength="1" placeholder="Enter unique feature title">

                    <?= form_error('feat_title', '<span class="error text-danger"><small>', '</small></span>'); ?>
                  </div>
                </div>
                
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="feat_value">Feature Value</label>

                    <input type="text" class="form-control" name="feat_value" id="feat_value" value="<?= set_value('feat_value') ?>" maxlength="100" minlength="1" placeholder="Enter feature value">

                    <?= form_error('feat_value', '<span class="error text-danger"><small>', '</small></span>'); ?>
                  </div>
                </div>

                <div class="col-sm-4">
                  <div class="form-group">
                    <label for="feat_slug">Feature Slug</label>

                    <input type="text" class="form-control" name="feat_slug" id="feat_slug" value="<?= set_value('feat_slug'); ?>" placeholder="Feature Slug" readonly />

                    <?= form_error('feat_slug', '<span class="error text-danger"><small>', '</small></span>'); ?>
                  </div>
                </div>
              </div>
              
              <div class="row">
                <div class="col-sm-4">
                  <div class="form-group">
                    <label for="feat_hex_code">Hex Code</label>

                    <input type="text" class="form-control" name="feat_hex_code" id="feat_hex_code" value="<?= set_value('feat_hex_code'); ?>" placeholder="Hex code for color" />

                    <?= form_error('feat_hex_code', '<span class="error text-danger"><small>', '</small></span>'); ?>
                  </div>
                </div>
                
                <div class="col-sm-4">
                  <div class="form-group">
                    <label for="feat_icon">Upload an Icon</label>

                    <div class="custom-file">
                      <input type="file" class="custom-file-input" name="feat_icon" id="feat_icon" value="" accept="image/jpeg, image/png">

                      <label class="custom-file-label" for="feat_icon">Choose file</label>

                      <small class="form-text text-muted">image dimensions should be (53 x 53)</small>

                      <?= form_error('feat_icon', '<span class="error text-danger"><small>', '</small></span>'); ?>  
                    </div>
                  </div>
                </div>
                
                <div class="col-sm-4">
                  <div class="form-group">
                    <label for="feat_thumbnail">Upload a Thumbnail Image</label>

                    <div class="custom-file">
                      <input type="file" class="custom-file-input" name="feat_thumbnail" id="feat_thumbnail" value="" accept="image/jpeg, image/png">

                      <label class="custom-file-label" for="feat_thumbnail">Choose file</label>

                      <small class="form-text text-muted">image dimensions should be (456 x 456)</small>

                      <?= form_error('feat_thumbnail', '<span class="error text-danger"><small>', '</small></span>'); ?>  
                    </div>
                  </div>
                </div>
              </div>
              
              <div class="row">                 
                <div class="col-sm-4">
                  <div class="form-group">
                    <label for="feat_status">Select Status</label>

                    <!-- <select class="form-control" id="feat_status" name="feat_status" required>
                      <option value="1" <?//= set_select('feat_status', '1'); ?> >Active</option>
                      <option value="0" <?//= set_select('feat_status', '0'); ?> >Inactive</option>
                    </select>-->

                    <div>
                      <input type="checkbox" name="feat_status"
                             data-bootstrap-switch data-size="large"
                             data-on-color="success" data-off-color="danger"
                             data-on-text="Active" data-off-text="Inactive"
                             value="1" <?= set_checkbox('feat_status', '1', true) ?>>
                    </div>
                    
                    <?= form_error('feat_status', '<span class="error text-danger"><small>', '</small></span>'); ?>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
              <button type="submit" class="btn btn-primary" name="feature_value_submit" id="feature_value_submit" value="1">Submit</button>
            </div>
          </form>
        </div>
        <!-- /.card -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</section>