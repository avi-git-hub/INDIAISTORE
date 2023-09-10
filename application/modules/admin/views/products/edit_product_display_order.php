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

          <li class="breadcrumb-item active"><a href="<?= base_url("admin/categories") ?>">Categories</a></li>

          <li class="breadcrumb-item active">Edit <?= $category->cat_name ?> Products Display Order</li>
        </ol>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-12">
        <h1>Product Display Order</h1>
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
          <table class="table table-bordered text-center" id="tbl_prod_display_order">
            <thead>
              <tr>
                <th width="15%">Category Name</th>

                <th width="25%">Product Name</th>

                <th width="15%">Product Slug</th>

                <th width="15%">Status</th>

                <th width="15%">Move</th>

                <th width="15%"><i class="fa fa-cog"></i></th>
              </tr>
            </thead>

            <tbody id="display_order">
              <?php if (empty($products)) : ?>
                <tr>
                  <td colspan="5">No product data available.</td>
                </tr>
              <?php else : ?>
                <?php foreach ($products as $prod) : ?>
                  <tr class="ui-state-default" id="prod_<?= $prod->prod_id; ?>">
                    <td><?= $prod->prod_category; ?></td>

                    <td><?= $prod->prod_name; ?></td>

                    <td><?= $prod->prod_slug; ?></td>

                    <td>
                      <h4 class="m-0" title="Active">
                        <span class="badge badge-pill badge-<?= ($prod->status == 1) ? 'success' : 'danger' ?>">&nbsp;</span>
                      </h4>
                    </td>

                    <td><i class="fa fa-arrows-alt-v"></i></td>

                    <td>
                      <a href="<?= base_url("admin/product/$prod->prod_id/edit") ?>" target="_self" role="button" class="btn btn-sm btn-dark" title="Edit this prod">
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
          <?php if (!empty($products)) : ?>
            <button type="button" class="btn btn-primary px-4" id="save_cat_display_order" data-cat-id="<?= $category->cat_id ?>">Save</button>
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