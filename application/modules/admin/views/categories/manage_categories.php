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

          <li class="breadcrumb-item active">Categories</li>
        </ol>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-12">
        <h1>Categories</h1>
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
            <a href="<?= base_url("admin/category/add-new") ?>" role="button" class="btn btn-success btn-sm mr-2">
              <i class="fa fa-plus"></i> Add New
            </a>

            <a href="<?= base_url("admin/categories/edit-display-order"); ?>" role="button" class="btn btn-info btn-sm" title="Edit display order">
              <i class="fa fa-sort"></i> Edit Order
            </a>
          </div>
        </div>
        <!-- /.card-header -->

        <div class="card-body">
          <table id="tbl_categories" class="table table-bordered table-striped text-center">
            <thead>
              <tr>
                <th>Name</th>

                <th>Icon</th>

                <th>Thumbnail</th>

                <th>on Homepage</th>

                <th>Status</th>

                <th>Created</th>

                <th>Updated</th>

                <th><i class="fa fa-cog"></i></th>
              </tr>
            </thead>

            <tbody>
              <?php if (!empty($categories)) : ?>
                <?php foreach ($categories as $cat) : ?>
                  <tr>
                    <td><?= $cat->cat_name ?></td>

                    <td>
                      <a href="<?= PATH_FILES_UPLOADS_ADMIN, "categories/$cat->cat_slug/$cat->cat_icon" ?>" class="text-dark" data-lightbox="lb_<?= $cat->cat_id; ?>" data-title="<?= $cat->cat_name; ?>" title="View Category Icon">
                        <i class="fa fa-eye" aria-hidden="true"></i>
                      </a>
                    </td>

                    <td>
                      <a href="<?= PATH_FILES_UPLOADS_ADMIN, "categories/$cat->cat_slug/$cat->cat_thumbnail" ?>" class="text-dark" data-lightbox="lb_<?= $cat->cat_id; ?>" data-title="<?= $cat->cat_name; ?>" title="View Category Thumbnail">
                        <i class="fa fa-eye" aria-hidden="true"></i>
                      </a>
                    </td>

                    <td>
                      <h4 class="text-center m-0" title="Active">
                        <?php if ($cat->cat_show_on_homepage == 1) : ?>
                          <i class="fas fa-check text-success"></i>
                        <?php else : ?>
                          <i class="fas fa-times text-danger"></i>
                        <?php endif; ?>
                        <!-- <span class="badge badge-pill badge-<? //= ($cat->cat_show_on_homepage == 1) ? 'success' : 'danger' 
                                                                  ?>">&nbsp;</span>-->
                      </h4>
                    </td>

                    <td>
                      <h4 class="text-center m-0" title="Active">
                        <span class="badge badge-pill badge-<?= ($cat->status == 1) ? 'success' : 'danger' ?>">&nbsp;</span>
                      </h4>
                    </td>

                    <td><?= $cat->created_at ?></td>

                    <td><?= is_null($cat->updated_at) ? '-' : $cat->updated_at ?></td>

                    <td class="text-center m-0">
                      <a href="<?= base_url("admin/category/$cat->cat_id/edit"); ?>" target="_self" role="button" class="btn btn-dark btn-sm" title="Edit category">
                        <i class="fa fa-edit"></i>
                      </a>

                      <a href="<?= base_url("admin/category/$cat->cat_id/edit-product-display-order"); ?>" role="button" class="btn btn-info btn-sm" title="Edit product display order">
                        <i class="fa fa-sort"></i>
                      </a>

                      <a href="javascript:void(0)" role="button" class="btn btn-sm btn-danger category_delete_btn" id="category_delete_btn_<?= $cat->cat_id ?>" data-toggle="modal" data-target="#category_confirm_delete" data-record-id="<?= $cat->cat_id ?>" data-record-title="<?= $cat->cat_slug ?>" title="Delete category">
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
<div class="modal fade" id="category_confirm_delete" tabindex="-1" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-dark">
        <h4 class="modal-title" id="category_confirm_delete_label">Delete Banner</h4>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>

      <div class="modal-body">
        <ul>
          <li>Are you sure you want to delete <span class="text-bold title"></span> product feature category.</li>

          <li>Please note, <span class="text-danger text-bold">this will delete all the products falling under this category.</span></li>

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