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
          <li class="breadcrumb-item active"><a href="<?= base_url("admin/dashboard") ?>">Admin</a></li>

          <li class="breadcrumb-item active"><a href="<?= base_url("admin/products") ?>">Products</a></li>

          <li class="breadcrumb-item"><a href="<?= base_url("admin/product/$prod_id/pdp-image-sets") ?>"><?= $product->prod_name ?> PDP Image Sets</a></li>

          <li class="breadcrumb-item"><a href="<?= base_url("admin/product/$prod_id/pdp-image-set/$pdp_set_id/edit") ?>">PDP Image Set <?= $pdp_set_id ?></a></li>

          <li class="breadcrumb-item">Edit Display Order</li>
        </ol>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-12">
        <h1>PDP Images</h1>
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
          <h3 class="card-title">Edit PDP Display Order</h3>
        </div>
        <!-- /.card-header -->

        <div class="card-body">
          <table class="table table-bordered text-center" id="tbl_prod_display_order">
            <thead>
              <tr>
                <th>Set/File</th>

                <th>Image</th>

                <th>Created At</th>

                <th>Updated At</th>

                <th>Move</th>
              </tr>
            </thead>

            <tbody id="display_order">
              <?php if (!empty($product_pdp_images)) : ?>
                <?php foreach ($product_pdp_images as $img) : ?>
                  <tr class="ui-state-default" id="prod_variant_<?= $img->prod_pdp_img_id; ?>">
                    <td><?= $img->pdp_set_slug . '/' . $img->pdp_img; ?></td>

                    <td>
                      <a href="<?= PATH_FILES_UPLOADS_ADMIN . "products/pdp/$img->pdp_set_slug/$img->pdp_img" ?>" class="text-dark" data-lightbox="lb_<?= $img->prod_pdp_img_id; ?>" data-title="<?= $img->pdp_set_slug; ?>" title="View PDP Image">
                        <i class="fa fa-eye" aria-hidden="true"></i>
                      </a>
                    </td>

                    <td><?= date('Y-m-d H:i:s', strtotime($img->created_at)) ?></td>

                    <td><?= (is_null($img->updated_at)) ? '-' : date('Y-m-d H:i:s', strtotime($img->updated_at)) ?></td>

                    <td><i class="fa fa-arrows-alt-v"></i></td>
                  </tr>
                <?php endforeach; ?>
              <?php endif; ?>
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
          <?php if (!empty($product_pdp_images)) : ?>
            <button type="button" class="btn btn-primary px-4" id="save_pdp_img_display_order" data-prod-id="<?= $prod_id ?>" data-pdp-set-id="<?= $pdp_set_id ?>">Save</button>
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