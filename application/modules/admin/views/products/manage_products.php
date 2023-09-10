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

          <li class="breadcrumb-item active">Products</li>
        </ol>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-12">
        <h1>Products</h1>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header bg-dark border-dark">
          <h3 class="card-title">Manage</h3>

          <div class="float-right">
            <a href="<?= base_url("admin/product/add-new") ?>" role="button" class="btn btn-success btn-sm mr-2">
              <i class="fa fa-plus"></i> Add New
            </a>

            <!-- <a href="<?//= base_url("admin/products/edit-display-order") ?>" role="button" class="btn btn-info btn-sm" title="Edit Product Display Order">
              <i class="fa fa-sort"></i> Edit Order
            </a> -->
          </div>
        </div>
        <!-- /.card-header -->

        <div class="card-body">
          <table id="tbl_products" class="table table-bordered table-striped text-center">
            <thead>
              <tr>
                <th>Category</th>

                <th>Product Name</th>

                <th>Status</th>

                <th>Created</th>

                <th>Updated</th>

                <th><i class="fa fa-cog"></i></th>
              </tr>
            </thead>

            <tbody>
              <?php if (!empty($products)) : ?>
                <?php foreach ($products as $prod) : ?>
                  <tr>
                    <td><?= $prod->prod_category ?></td>

                    <td><?= $prod->prod_name ?></td>

                    <td>
                      <h4 class="text-center m-0" title="Active">
                        <span class="badge badge-pill badge-<?= ($prod->status == 1) ? 'success' : 'danger' ?>">&nbsp;</span>
                      </h4>
                    </td>

                    <td><?= $prod->created_at ?></td>

                    <td><?= is_null($prod->updated_at) ? '-' : $prod->updated_at ?></td>

                    <td class="text-center m-0">
                      <a href="<?= base_url("admin/product/$prod->prod_id/edit") ?>" target="_self" role="button" class="btn btn-dark btn-sm" title="Edit Product">
                        <i class="fa fa-edit"></i>
                      </a>

                      <a href="<?= base_url("admin/product/$prod->prod_id/variants") ?>" target="_self" role="button" class="btn btn-outline-dark btn-sm" title="List Product Variants">
                        <i class="fa fa-list"></i>
                      </a>

                      <a href="javascript:void(0)" role="button" class="btn btn-sm btn-danger product_delete_btn" id="product_delete_btn_<?= $prod->prod_id ?>" data-toggle="modal" data-target="#product_confirm_delete" data-record-id="<?= $prod->prod_id ?>" data-record-title="<?= $prod->prod_slug ?>" title="Delete Product">
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
<div class="modal fade" id="product_confirm_delete" tabindex="-1" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-dark">
        <h4 class="modal-title" id="product_confirm_delete_label">Delete Product</h4>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>

      <div class="modal-body">
        <ul>
          <li>Are you sure you want to delete <span class="text-bold title"></span> product.</li>

          <li>Please note, <span class="text-danger text-bold">this will delete all the variations, pricings, the pdp image sets, the images, and the features of this product.</span></li>

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