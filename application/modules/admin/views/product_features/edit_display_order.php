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

          <li class="breadcrumb-item"><a href="<?= base_url("admin/product-feature/category/$feat_cat_id") ?>"><?= $prod_feat_cat->feat_cat_name ?> Feature Values</a></li>

          <li class="breadcrumb-item active">Edit Display Order</li>
        </ol>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-12">
        <h1>Feature Values Display Order</h1>
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
          <h3 class="card-title">Edit Display Order</h3>
        </div>
        <!-- /.card-header -->

        <div class="card-body">
          <table class="table table-bordered text-center" id="tbl_display_order">
            <thead>
              <tr>
                <th width="40%">Feature Title</th>

                <th width="15%">Feature Slug</th>

                <th width="15%">Status</th>

                <th width="15%">Move</th>

                <th width="15%"><i class="fa fa-cog"></i></th>
              </tr>
            </thead>

            <tbody id="display_order">
              <?php if (empty($prod_feat)): ?>
                <tr>
                  <td colspan="5">No data available.</td>
                </tr>
              <?php else: ?>
                <?php foreach ($prod_feat as $feat): ?>
                  <tr class="ui-state-default" id="banner_<?php echo $feat->feat_id; ?>">
                    <td><?php echo $feat->feat_value; ?></td>
                    
                    <td><?php echo $feat->feat_slug; ?></td>
                    
                    <td>
                      <h4 class="m-0" title="Active">
                        <span class="badge badge-pill badge-<?= ($feat->status == 1) ? 'success' : 'danger' ?>">&nbsp;</span>
                      </h4>
                    </td>

                    <td><i class="fa fa-arrows-alt-v"></i></td>

                    <td>  
                      <a href="<?= base_url("/admin/banner/position/$feat_cat_id/edit/$feat->feat_id") ?>" target="_self" role="button" class="btn btn-sm btn-dark" title="Edit this feature">
                        <i class="fa fa-edit"></i>
                      </a>
                    </td>
                  </tr>
                <?php endforeach; ?>
              <?php endif; ?>
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
          <?php if (!empty($prod_feat)): ?>
            <button type="button" class="btn btn-primary px-4" id="save_feat_cat_val_display_order" data-feat-cat-id="<?= $feat_cat_id ?>">Save</button>
          <?php endif; ?>
        </div>
      </div>
      <!-- /.card -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
</section>
<!-- /.content -->