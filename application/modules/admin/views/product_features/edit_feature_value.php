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

          <li class="breadcrumb-item"><a href="<?= base_url('admin/product-feature/categories') ?>">Product Feature Categories</a></li>

          <li class="breadcrumb-item"><a href="<?= base_url("admin/product-feature/category/$feat_cat_id") ?>"><?= $prod_feat_cat->feat_cat_name ?> Feature Values</a></li>

          <li class="breadcrumb-item active">Edit <?= $prod_feat->feat_title ?> Value</li>
        </ol>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-12">
        <h1>Feature Value</h1>
      </div>
    </div>
  </div><!-- /.container-fluid -->
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
          <form role="form" method="post" enctype="multipart/form-data" autocomplete="off">
            <div class="card-body">
              <input type="hidden" value="<?= $prod_feat->feat_cat_id ?>" name="banner_position_id_old">

              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="feat_title">Feature Title</label>

                    <input type="text" class="form-control" name="feat_title" id="feat_title" value="<?= set_value('feat_title', $prod_feat->feat_title) ?>" maxlength="100" minlength="1" placeholder="Enter unique feature title">

                    <?= form_error('feat_title', '<span class="error text-danger"><small>', '</small></span>'); ?>
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="form-group">
                    <label for="banner_name">Feature Value</label>

                    <input type="text" class="form-control" name="feat_value" id="feat_value" value="<?= set_value('feat_value', $prod_feat->feat_value) ?>" maxlength="100" minlength="1" placeholder="Enter unique feature value" required>

                    <?= form_error('feat_value', '<span class="error text-danger"><small>', '</small></span>'); ?>
                  </div>
                </div>

                <div class="col-sm-4">
                  <div class="form-group">
                    <label for="feat_slug">Feature Slug</label>

                    <input type="text" class="form-control" name="feat_slug" id="feat_slug" value="<?= set_value('feat_slug', $prod_feat->feat_slug) ?>" placeholder="Feature Slug" readonly />

                    <?= form_error('feat_slug', '<span class="error text-danger"><small>', '</small></span>'); ?>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-sm-4">
                  <div class="form-group">
                    <label for="feat_hex_code">Hex Code</label>

                    <input type="text" class="form-control" name="feat_hex_code" id="feat_hex_code" value="<?= set_value('feat_hex_code', $prod_feat->feat_hex_code); ?>" placeholder="Hex code for color" />

                    <?= form_error('feat_hex_code', '<span class="error text-danger"><small>', '</small></span>'); ?>
                  </div>
                </div>

                <div class="col-sm-4">
                  <div class="form-group">
                    <label for="feat_icon">Upload an Icon</label>

                    <?php
                    /*$image_present = false;

                    if (in_array($prod_feat->feat_icon, ['', null])):
                      echo '<a href="javascript:void(0)" class="float-right text-danger"><strong>File Not Found!</strong></a>';
                    else:
                      echo '<a href="', base_url("files/uploads/product-features/$prod_feat->feat_icon"), '" target="_blank" class="float-right text-success" download><strong>Download/Backup</strong></a>';

                      $image_present = true;
                    endif;*/

                    if (!in_array($prod_feat->feat_icon, ['', null])) :
                      echo '<a href="', base_url("files/uploads/product-features/$prod_feat->feat_icon"), '" target="_blank" class="float-right text-success" download><strong>Download/Backup</strong></a>';
                    endif;
                    ?>

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

                    <?php
                    /*$image_present = false;

                    if (in_array($prod_feat->feat_thumbnail, ['', null])):
                      echo '<a href="javascript:void(0)" class="float-right text-danger"><strong>File Not Found!</strong></a>';
                    else:
                      echo '<a href="', base_url("files/uploads/product-features/$prod_feat->feat_thumbnail"), '" target="_blank" class="float-right text-success" download><strong>Download/Backup</strong></a>';

                      $image_present = true;
                    endif;*/

                    if (!in_array($prod_feat->feat_thumbnail, ['', null])) :
                      echo '<a href="', base_url("files/uploads/product-features/$prod_feat->feat_thumbnail"), '" target="_blank" class="float-right text-success" download><strong>Download/Backup</strong></a>';
                    endif;
                    ?>

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
                    <label for="feat_status" class="form-control-label">Status</label>

                    <!-- <select class="form-control" name="feat_status" id="feat_status" required>
                      <option value="1" <?//= set_select('feat_status', '1'); ?>>Active</option>
                      <option value="0" <?//= set_select('feat_status', '0'); ?>>Inactive</option>
                    </select>-->

                    <div>
                      <input type="checkbox" name="feat_status" data-bootstrap-switch data-size="large" data-on-color="success" data-off-color="danger" data-on-text="Active" data-off-text="Inactive" value="<?= set_value('feat_status', $prod_feat->status); ?>" <?= set_checkbox('feat_status', set_value('feat_status', $prod_feat->status), ($prod_feat->status == '1') ? true : false) ?>>
                    </div>

                    <?= form_error('feat_status', '<span class="error text-danger"><small>', '</small></span>'); ?>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
              <button type="submit" class="btn btn-primary" id="feature_submit" name="feature_submit" value="1">Submit</button>
            </div>
          </form>
        </div>
        <!-- /.card -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</section>