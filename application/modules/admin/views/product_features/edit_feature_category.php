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

          <li class="breadcrumb-item"><a href="<?= base_url('admin/product-feature/categories') ?>">Product Feature Categories</a></li>

          <li class="breadcrumb-item active">Edit <?= $prod_feat_cat->feat_cat_name ?> Feature Category</li>
        </ol>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-12">
        <h1>Product Feature Category</h1>
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
                <div class="col-sm-4">
                  <div class="form-group">
                    <label for="prod_feat_cat_name">Category Name</label>

                    <input type="text" class="form-control" name="prod_feat_cat_name" id="prod_feat_cat_name" value="<?= set_value('prod_feat_cat_name', $prod_feat_cat->feat_cat_name) ?>" placeholder="Enter unique name" maxlength="100" minlength="1" required />

                    <?= form_error('prod_feat_cat_name', '<span class="error text-danger"><small>', '</small></span>'); ?>
                  </div>
                </div>

                <div class="col-sm-4">
                  <div class="form-group">
                    <label for="prod_feat_cat_slug">Category Slug</label>

                    <input type="text" class="form-control" name="prod_feat_cat_slug" id="prod_feat_cat_slug" value="<?= set_value('prod_feat_cat_slug', $prod_feat_cat->feat_cat_slug) ?>" placeholder="Category Slug" readonly />

                    <?= form_error('prod_feat_cat_slug', '<span class="error text-danger"><small>', '</small></span>'); ?>
                  </div>
                </div>

                <div class="col-sm-4">
                  <div class="form-group">
                    <label for="prod_feat_cat_status">Status</label>
                    
                    <!-- <select class="form-control" name="prod_feat_cat_status" id="prod_feat_cat_status" required>
                      <option value="1" <?//= set_select('prod_feat_cat_status', '1'); ?> >Active</option>
                      <option value="0" <?//= set_select('prod_feat_cat_status', '0'); ?> >Inactive</option>
                    </select>-->
                    
                    <div>
                      <input type="checkbox" name="prod_feat_cat_status"
                             data-bootstrap-switch data-size="large"
                             data-on-color="success" data-off-color="danger"
                             data-on-text="Active" data-off-text="Inactive"
                             value="<?= set_value('prod_feat_cat_status', $prod_feat_cat->status); ?>"
                             <?= set_checkbox('prod_feat_cat_status', set_value('prod_feat_cat_status', $prod_feat_cat->status), ($prod_feat_cat->status == '1') ? true: false) ?>>
                    </div>

                    <?= form_error('prod_feat_cat_status', '<span class="error text-danger"><small>', '</small></span>'); ?>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
              <button type="submit" class="btn btn-primary" name="prod_feat_cat_submit" id="prod_feat_cat_submit" value="1">Submit</button>
            </div>
          </form>
        </div>
        <!-- /.card -->

      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</section>