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

          <li class="breadcrumb-item"><a href="<?= base_url('admin/products') ?>">Products</a></li>

          <li class="breadcrumb-item"><a href="<?= base_url("admin/product/$prod_id/pdp-image-sets") ?>"><?= $pdp_product ?> PDP Image Sets</a></li>

          <li class="breadcrumb-item active">Add New PDP Image Set</li>
        </ol>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-12">
        <h1>Add New PDP Image Set</h1>
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
          <form name="frm_pdp_set" id="frm_pdp_set" role="form" method="post" enctype="multipart/form-data" autocomplete="off">
            <input type="hidden" name="pdp_product_id" value="<?= $prod_id ?>" />

            <div class="card-body">
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="pdp_product">PDP Product</label>

                    <input type="text" class="form-control for_slug" name="pdp_product" id="pdp_product" value="<?= set_value('pdp_product', $pdp_product) ?>" placeholder="PDP Product" readonly />
                  </div>
                </div>

                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="pdp_set_color">PDP Set Color</label>

                    <select class="form-control for_slug" name="pdp_set_color" id="pdp_set_color">
                      <option value="">Select Product Color</option>
                      <?php
                      foreach ($product_colors as $color) :
                        echo "<option value='$color'", set_select('pdp_set_color', $color), "'>", ucfirst($color), "</option>";
                      endforeach
                      ?>
                    </select>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="pdp_set_slug">PDP Set Slug</label>

                    <input type="text" class="form-control" name="pdp_set_slug" id="pdp_set_slug" value="<?= set_value('pdp_set_slug') ?>" placeholder="PDP Set Slug" readonly />
                  </div>
                </div>

                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="pdp_set_vid_id">PDP Video ID</label>

                    <input type="text" class="form-control" name="pdp_set_vid_id" id="pdp_set_vid_id" value="<?= set_value('pdp_set_vid_id') ?>" placeholder="PDP Set Video ID" />
                  </div>
                </div>
              </div>

              <div id="pdp_images"></div>

              <div class="row">
                <div class="col-sm-12">
                  <button type="button" class="btn btn-dark" name="btn_add_new_pdp_img" id="btn_add_new_pdp_img">
                    <i class="fa fa-plus"></i> Add New Image
                  </button>
                </div>
              </div>
            </div>

            <div class="card-footer">
              <button type="submit" class="btn btn-primary" name="btn_pdp_set_submit" id="btn_pdp_set_submit" value="1">Submit</button>
            </div>
            <!-- /.card-body -->
          </form>
        </div>
      </div>
      <!-- /.card -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container-fluid -->
</section>