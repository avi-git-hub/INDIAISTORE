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

          <li class="breadcrumb-item"><a href="<?= base_url("admin/product-feature/categories") ?>">Product Feature Categories</a></li>

          <li class="breadcrumb-item active"><?= $prod_feat_cat->feat_cat_name ?> Feature Values</li>
        </ol>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-12">
        <h1>Feature Values</h1>
      </div>
    </div>
  </div>
  <!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header bg-dark">
          <h3 class="card-title">Manage</h3>

          <div class="float-right">
            <a href="<?= base_url("admin/product-feature/category/$feat_cat_id/add-new") ?>" role="button" class="btn btn-success btn-sm mr-2">
              <i class="fa fa-plus"></i> Add New
            </a>

            <a href="<?= base_url("admin/product-feature/category/edit-display-order/$feat_cat_id"); ?>" role="button" class="btn btn-info btn-sm" title="Edit feature value display order">
              <i class="fa fa-sort"></i> Edit Order
            </a>
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="tbl_prod_feat" class="table table-bordered table-striped text-center">
            <thead>
              <tr>
                <th>Title</th>

                <th>Value</th>

                <th>Slug</th>

                <th>Display Order</th>

                <th>Status</th>

                <th>Created</th>

                <th>Updated</th>

                <th><i class="fa fa-cog"></i></th>
              </tr>
            </thead>

            <tbody>
              <?php if (!empty($prod_feat)) : ?>
                <?php foreach ($prod_feat as $feat) : ?>
                  <tr>
                    <td><?= $feat->feat_title ?></td>

                    <td><?= $feat->feat_value ?></td>

                    <td><?= $feat->feat_slug ?></td>

                    <td><?= $feat->display_order ?></td>

                    <td>
                      <h4 class="text-center m-0" title="Active">
                        <span class="badge badge-pill badge-<?= ($feat->status == 1) ? 'success' : 'danger' ?>">&nbsp;</span>
                      </h4>
                    </td>

                    <td><?= $feat->created_at ?></td>

                    <td><?= is_null($feat->updated_at) ? '-' : $feat->updated_at ?></td>

                    <td class="text-center m-0">
                      <a href="<?= base_url("/admin/product-feature/category/$feat_cat_id/edit/$feat->feat_id") ?>" target="_self" role="button" class="btn btn-sm btn-dark" title="Edit this feature">
                        <i class="fa fa-edit"></i>
                      </a>

                      <a href="javascript:void(0)" role="button" class="btn btn-sm btn-danger banner_delete_btn" id="banner_delete_btn_<?= $feat->feat_id ?>" data-feat-cat-id="<?= $feat_cat_id ?>" data-record-id="<?= $feat->feat_id ?>" data-record-title="<?= $feat->feat_title ?>" data-toggle="modal" data-target="#prod_feat_confirm_delete" title="Delete this banner">
                        <i class="fa fa-trash"></i>
                      </a>
                    </td>
                  </tr>
                <?php endforeach; ?>
              <?php endif; ?>
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
</section>
<!-- /.content -->

<!-- modal -->
<div class="modal fade" id="prod_feat_confirm_delete" tabindex="-1" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-dark">
        <h4 class="modal-title" id="banner_confirm_delete_label">Delete Product Feature</h4>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>

      <div class="modal-body">
        <ul class="mb-0">
          <li>Are you sure you want to delete <span class="text-bold title"></span> product feature.</li>

          <li>This is an irreversible procedure.</li>
        </ul>
      </div>

      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-outline-dark" data-dismiss="modal">Close</button>

        <button type="button" class="btn btn-dark btn-ok">Delete</button>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>

<!-- ./modal -->