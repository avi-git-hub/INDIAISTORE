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

          <li class="breadcrumb-item active"><?= $product->prod_name ?> Variants</li>
        </ol>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-12">
        <h1>Product Variants</h1>
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
        <div class="card-header bg-dark border-dark">
          <h3 class="card-title">Manage</h3>

          <div class="float-right">
            <a href="<?= base_url("admin/product/$prod_id/variant/add-new") ?>" role="button" class="btn btn-success btn-sm mr-2">
              <i class="fa fa-plus"></i> Add New
            </a>

            <?php if (!empty($product_variants)) : ?>
              <a href="<?= base_url("admin/product/$prod_id/variants/edit-display-order"); ?>" role="button" class="btn btn-info btn-sm mr-2">
                <i class="fa fa-sort"></i> Edit Order
              </a>

              <a href="<?= base_url("admin/product/$prod_id/pdp-image-sets"); ?>" role="button" class="btn btn-secondary btn-sm">
                <i class="far fa-images"></i> Manage PDP Sets
              </a>
            <?php endif ?>
          </div>
        </div>
        <!-- /.card-header -->

        <div class="card-body">
          <table id="tbl_products" class="table table-bordered table-striped text-center">
            <thead>
              <tr>
                <th>Slug</th>

                <th>MRP</th>

                <th>Status</th>

                <th>Created</th>

                <th>Updated</th>

                <th><i class="fa fa-cog"></i></th>
              </tr>
            </thead>

            <tbody>
              <?php if (!empty($product_variants)) : ?>
                <?php foreach ($product_variants as $variant) : ?>
                  <tr>
                    <td><?= $variant->prod_variant_slug ?></td>

                    <td><?= number_format($variant->prod_mrp) ?></td>

                    <td>
                      <h4 class="text-center m-0" title="Active">
                        <span class="badge badge-pill badge-<?= ($variant->status == 1) ? 'success' : 'danger' ?>">&nbsp;</span>
                      </h4>
                    </td>

                    <td><?= $variant->created_at ?></td>

                    <td><?= is_null($variant->updated_at) ? '-' : $variant->updated_at ?></td>

                    <td class="text-center m-0">
                      <a href="<?= base_url("admin/product/$variant->prod_id/variant/$variant->prod_variant_id/edit"); ?>" target="_self" role="button" class="btn btn-dark btn-sm" title="Edit Product Variant">
                        <i class="fa fa-edit"></i>
                      </a>

                      <a href="javascript:void(0)" role="button" class="btn btn-sm btn-danger product_variant_delete_btn" id="product_variant_delete_btn_<?= $variant->prod_variant_id ?>" data-toggle="modal" data-target="#product_variant_confirm_delete" data-prod-id="<?= $variant->prod_id ?>" data-record-id="<?= $variant->prod_variant_id ?>" data-record-title="<?= $variant->prod_variant_slug ?>" title="Delete Product Variant">
                        <i class="fa fa-trash"></i>
                      </a>
                    </td>
                  </tr>
                <?php endforeach; ?>
              <?php endif ?>
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
<div class="modal fade" id="product_variant_confirm_delete" tabindex="-1" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-dark">
        <h4 class="modal-title" id="product_variant_confirm_delete_label">Delete Product Variant</h4>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>

      <div class="modal-body">
        <ul>
          <li>Are you sure you want to delete <span class="text-bold title"></span> product variant.</li>

          <li>Please note, <span class="text-danger text-bold">this will delete all the pricing and images of this product variant.</span></li>

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