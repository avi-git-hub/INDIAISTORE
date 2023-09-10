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

          <li class="breadcrumb-item active">Banner Positions</li>
        </ol>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-12">
        <h1>Banner Positions</h1>
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
          <h3 class="card-title">Manage</h3>

          <div class="float-right">
            <a href="<?= base_url('admin/banner/position/add-new') ?>" role="button" class="btn btn-success btn-sm">
              <i class="fa fa-plus"></i> Add New
            </a>
          </div>
        </div>
        <!-- /.card-header -->

        <div class="card-body">
          <table id="banner_manage_positions_table" class="table table-bordered table-striped text-center">
            <thead>
              <tr>
                <th>Position Name</th>

                <th>Position Slug</th>

                <th>Status</th>

                <th>Created</th>

                <th>Updated</th>

                <th><i class="fa fa-cog"></i></th>
              </tr>
            </thead>

            <tbody>
              <?php if (!empty($banner_positions)) : ?>
                <?php foreach ($banner_positions as $banner_position) : ?>
                  <tr>
                    <td><?= $banner_position->position_name ?></td>

                    <td><?= $banner_position->position_slug ?></td>

                    <td>
                      <h4 class="text-center m-0" title="Active">
                        <span class="badge badge-pill badge-<?= ($banner_position->status == 1) ? 'success' : 'danger' ?>">&nbsp;</span>
                      </h4>
                    </td>

                    <td><?= $banner_position->created_at ?></td>

                    <td><?= is_null($banner_position->updated_at) ? '-' : $banner_position->updated_at ?></td>

                    <td class="text-center m-0">
                      <a href="<?= base_url("admin/banner/position/edit/$banner_position->id"); ?>" target="_self" role="button" class="btn btn-dark btn-sm" title="Edit banner position">
                        <i class="fa fa-edit"></i>
                      </a>

                      <a href="<?= base_url("admin/banner/position/$banner_position->id"); ?>" target="_self" role="button" class="btn btn-outline-dark btn-sm" title="List the banners for this position">
                        <i class="fa fa-list"></i>
                      </a>

                      <a href="javascript:void(0)" role="button" class="btn btn-sm btn-danger banner_position_delete_btn" id="banner_position_delete_btn_<?= $banner_position->id ?>" data-record-id="<?= $banner_position->id ?>" data-record-title="<?= $banner_position->position_slug ?>" data-toggle="modal" data-target="#banner_position_confirm_delete" title="Delete this banner position">
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
<div class="modal fade" id="banner_position_confirm_delete" tabindex="-1" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-dark">
        <h4 class="modal-title" id="banner_position_confirm_delete_label">Delete Banner</h4>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>

      <div class="modal-body">
        <ul>
          <li>Are you sure you want to delete <span class="text-bold title"></span> banner position.</li>

          <li>Please note, <span class="text-danger text-bold">this will delete all the banners with this banner position.</span></li>

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