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

          <li class="breadcrumb-item"><a href="<?= base_url('admin/banner/positions') ?>">Banner Positions</a></li>

          <li class="breadcrumb-item active"><?= $banner_position->position_name ?> Banners</li>
        </ol>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-12">
        <h1>Banners</h1>
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
            <a href="<?= base_url("admin/banner/position/$banner_position_id/add-new") ?>" role="button" class="btn btn-success btn-sm mr-2">
              <i class="fa fa-plus"></i> Add New
            </a>

            <a href="<?= base_url("admin/banner/position/edit-display-order/$banner_position_id"); ?>" role="button" class="btn btn-info btn-sm" title="Edit display order of the banners">
              <i class="fa fa-sort"></i> Edit Order
            </a>
          </div>
        </div>
        <!-- /.card-header -->

        <div class="card-body">
          <table id="banner_manage_table" class="table table-bordered table-striped text-center">
            <thead>
              <tr>
                <th>Name</th>

                <th>Order</th>

                <th>Banner Image</th>

                <th>Duration</th>

                <th>Status</th>

                <th>Created</th>

                <th>Updated</th>

                <th><i class="fa fa-cog"></i></th>
              </tr>
            </thead>

            <tbody>
              <?php if (!empty($banners)) : ?>
                <?php foreach ($banners as $banner) : ?>
                  <tr>
                    <td><?= $banner->name ?></td>

                    <td><?= $banner->display_order ?></td>

                    <td>
                      <a href="<?= PATH_FILES_UPLOADS_ADMIN, "banners/$banner_position->position_slug/", $banner->mobile_image ?>" class="text-dark" data-lightbox="lb_<?= $banner->id; ?>" data-title="<?= $banner->name; ?>" title="View Mobile Banner">
                        <i class="fa fa-mobile" aria-hidden="true"></i>
                      </a>
                      /
                      <a href="<?= PATH_FILES_UPLOADS_ADMIN, "banners/$banner_position->position_slug/", $banner->desktop_image ?>" class="text-dark" data-lightbox="lb_<?= $banner->id; ?>" data-title="<?= $banner->name; ?>" title="View Desktop Banner">
                        <i class="fa fa-desktop" aria-hidden="true"></i>
                      </a>
                    </td>

                    <td>
                      <?php
                      if ((is_null($banner->start_date)) && (is_null($banner->end_date))) :
                        echo '-';
                      else :
                        echo "From<br>$banner->start_date<br>To<br>$banner->end_date";
                      endif;
                      ?>
                    </td>

                    <td>
                      <h4 class="text-center m-0" title="Active">
                        <span class="badge badge-pill badge-<?= ($banner->status == 1) ? 'success' : 'danger' ?>">&nbsp;</span>
                      </h4>
                    </td>

                    <td><?= $banner->created_at ?></td>

                    <td><?= is_null($banner->updated_at) ? '-' : $banner->updated_at ?></td>

                    <td class="text-center m-0">
                      <a href="<?= base_url("admin/banner/position/$banner_position_id/edit/$banner->id") ?>" target="_self" role="button" class="btn btn-sm btn-dark" title="Edit this banner">
                        <i class="fa fa-edit"></i>
                      </a>

                      <a href="javascript:void(0)" role="button" class="btn btn-sm btn-danger banner_delete_btn" id="banner_delete_btn_<?= $banner->id ?>" data-position-id="<?= $banner_position_id ?>" data-record-id="<?= $banner->id ?>" data-record-title="<?= $banner->name ?>" data-toggle="modal" data-target="#banner_confirm_delete" title="Delete this banner">
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
<div class="modal fade" id="banner_confirm_delete" tabindex="-1" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-dark">
        <h4 class="modal-title" id="banner_confirm_delete_label">Delete Banner</h4>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>

      <div class="modal-body">
        <!-- <p>You are about to delete <b><i class="title"></i></b> banner, this procedure is irreversible.</p>
        <p>Do you want to proceed?</p> -->

        <ul class="mb-0">
          <li>Are you sure you want to delete <span class="text-bold title"></span> banner.</li>

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