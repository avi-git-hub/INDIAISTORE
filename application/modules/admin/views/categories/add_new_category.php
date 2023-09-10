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

          <li class="breadcrumb-item"><a href="<?= base_url('admin/categories') ?>">Categories</a></li>

          <li class="breadcrumb-item active">Add New</li>
        </ol>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-12">
        <h1>Category</h1>
      </div>
    </div>
  </div>
  <!-- /.container-fluid -->
</section>

<section class="content">
  <div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col">
        <!-- general form elements -->
        <div class="card">
          <div class="card-header bg-dark">
            <h3 class="card-title">Add New</h3>
          </div>
          <!-- /.card-header -->

          <!-- form start -->
          <form role="form" method="post" enctype="multipart/form-data" autocomplete="off">
            <div class="card-body">
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="category_name">Category Name</label>

                    <input type="text" class="form-control" name="category_name" id="category_name" value="<?= set_value('category_name'); ?>" placeholder="Enter unique name for Category" maxlength="100" minlength="1" />

                    <?= form_error('category_name', '<span class="error text-danger"><small>', '</small></span>'); ?>
                  </div>
                </div>

                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="category_slug">Category Slug</label>

                    <input type="text" class="form-control" name="category_slug" id="category_slug" value="<?= set_value('category_slug'); ?>" placeholder="Category Slug" readonly />

                    <?= form_error('category_slug', '<span class="error text-danger"><small>', '</small></span>'); ?>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="category_icon">Upload an Icon</label>

                    <div class="custom-file">
                      <input type="file" class="custom-file-input" name="category_icon" id="category_icon" value="" accept="image/jpeg, image/png">

                      <label class="custom-file-label" for="category_icon">Choose file</label>

                      <small class="form-text text-muted">image dimensions should be (53 x 53)</small>

                      <?= form_error('category_icon', '<span class="error text-danger"><small>', '</small></span>'); ?>
                    </div>
                  </div>
                </div>

                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="category_thumbnail">Upload a Thumbnail Image</label>

                    <div class="custom-file">
                      <input type="file" class="custom-file-input" name="category_thumbnail" id="category_thumbnail" value="" accept="image/jpeg, image/png">

                      <label class="custom-file-label" for="category_thumbnail">Choose file</label>

                      <small class="form-text text-muted">image dimensions should be (456 x 456)</small>

                      <?= form_error('category_thumbnail', '<span class="error text-danger"><small>', '</small></span>'); ?>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="category_icon">Home Page Image</label>


                    <div class="custom-file">
                      <input type="file" class="custom-file-input" name="category_home" id="category_home" value="" accept="image/jpeg, image/png">

                      <label class="custom-file-label" for="category_icon">Choose file</label>

                      <small class="form-text text-muted">image dimensions should be (53 x 53)</small>

                      <?= form_error('category_home', '<span class="error text-danger"><small>', '</small></span>'); ?>
                    </div>
                  </div>
                </div>

             
              </div>

              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="category_status">Status</label>

                    <div>
                      <input type="checkbox" name="category_status" data-bootstrap-switch data-size="large" data-on-color="success" data-off-color="danger" data-on-text="Active" data-off-text="Inactive" value="1" <?= set_checkbox('category_status', '1', true) ?>>
                    </div>

                    <?= form_error('category_status', '<span class="error text-danger"><small>', '</small></span>'); ?>
                  </div>
                </div>

                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="category_show_on_homepage">Show on Homepage</label>

                    <div>
                      <input type="checkbox" name="category_show_on_homepage" data-bootstrap-switch data-size="large" data-on-color="success" data-off-color="danger" data-on-text="Yes" data-off-text="No" value="1" <?= set_checkbox('category_show_on_homepage', '1', true) ?>>
                    </div>

                    <?= form_error('category_show_on_homepage', '<span class="error text-danger"><small>', '</small></span>'); ?>
                  </div>
                </div>
              </div>

              <hr>

              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="category_applicable_features">Applicable Feature(s)</label>

                    <select class="form-control select2bs4" name="category_applicable_features[]" id="category_applicable_features" multiple="multiple" data-placeholder="Select the value(s)">
                      <?php
                      foreach ($prod_feat_cat as $feat_cat) :
                        echo "<option value='$feat_cat->feat_cat_id'", set_select('category_applicable_features[]', $feat_cat->feat_cat_id), ">$feat_cat->feat_cat_name</option>";
                      endforeach;
                      ?>
                    </select>

                    <?= form_error('category_applicable_features[]', '<span class="error text-danger"><small>', '</small></span>'); ?>
                  </div>
                </div>

                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="category_applicable_variants">Applicable Variants</label>

                    <select class="form-control select2bs4" name="category_applicable_variants[]" id="category_applicable_variants" multiple="multiple" data-placeholder="Select the value(s)">
                      <?php
                      foreach ($prod_feat_cat as $feat_cat) :
                        echo "<option value='$feat_cat->feat_cat_id'", set_select('category_applicable_variants[]', $feat_cat->feat_cat_id), ">$feat_cat->feat_cat_name</option>";
                      endforeach;
                      ?>
                    </select>

                    <?= form_error('category_applicable_variants[]', '<span class="error text-danger"><small>', '</small></span>'); ?>
                  </div>
                </div>
              </div>

              <hr>

              <div class="row">
                <div class="col-sm-12">
                  <div class="form-group">
                    <label for="category_description">Description</label>

                    <textarea class="form-control" name="category_description" id="category_description" placeholder="Enter description of the category"><?= set_value('category_description'); ?></textarea>
                    <!-- style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" -->
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="category_html_id">HTML ID</label>

                    <input type="text" class="form-control" name="category_html_id" id="category_html_id" value="<?= set_value('category_html_id'); ?>" placeholder="Enter unique HTML id" maxlength="100" minlength="1" />

                    <?= form_error('category_html_id', '<span class="error text-danger"><small>', '</small></span>'); ?>
                  </div>
                </div>

                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="category_html_classes">HTML class(es)</label>

                    <input type="text" class="form-control" name="category_html_classes" id="category_html_classes" value="<?= set_value('category_html_classes'); ?>" placeholder="HTML class(es)" />

                    <?= form_error('category_html_classes', '<span class="error text-danger"><small>', '</small></span>'); ?>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="category_mob_img">Mobile Image</label>

                    <div class="custom-file">
                      <input type="file" class="custom-file-input" name="category_mob_img" id="category_mob_img" value="" accept="image/jpeg, image/png">

                      <label class="custom-file-label" for="category_mob_img">Choose file</label>

                      <small class="form-text text-muted">image dimensions should be (53 x 53)</small>

                      <?= form_error('category_mob_img', '<span class="error text-danger"><small>', '</small></span>'); ?>
                    </div>
                  </div>
                </div>

                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="category_desk_img">Desktop Image</label>

                    <div class="custom-file">
                      <input type="file" class="custom-file-input" name="category_desk_img" id="category_desk_img" value="" accept="image/jpeg, image/png">

                      <label class="custom-file-label" for="category_desk_img">Choose file</label>

                      <small class="form-text text-muted">image dimensions should be (456 x 456)</small>

                      <?= form_error('category_desk_img', '<span class="error text-danger"><small>', '</small></span>'); ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
              <button type="submit" class="btn btn-primary" name="category_submit" id="category_submit" value="1">Submit</button>
            </div>
          </form>
        </div>
      </div>
      <!-- /.card -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container-fluid -->
</section>