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
        <h1>Story Positions</h1>
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
            <a href="<?= base_url("admin/stories/$story_id/add-new") ?>" role="button" class="btn btn-success btn-sm">
              <i class="fa fa-plus"></i> Add New
            </a>
            
            <a href="<?= base_url("admin/stories/edit-display-order/$story_id"); ?>" role="button" class="btn btn-info btn-sm" title="Edit display order of the banners">
              <i class="fa fa-sort"></i> Edit Order
            </a>
          </div>
        </div>
        <!-- /.card-header -->

        <div class="card-body">
          <table id="banner_manage_positions_table" class="table table-bordered table-striped text-center">
            <thead>
              <tr>
                <th>Story Name</th>

                <!-- <th>Story Slug</th> -->

                <th>Story Image</th>

                <th>Status</th>

                <th>Created</th>

                <th>Updated</th>

                <th><i class="fa fa-cog"></i></th>
              </tr>
            </thead>

            <tbody>
              <?php if (!empty($storydetails)) : ?>
                <?php foreach ($storydetails as $story) : ?>
                  <tr>
                    <td><?= $story->story_name ?></td>

                    <!-- <td><?= $story->story_slug ?></td> -->

                    <td>
                      <a href="<?= PATH_FILES_UPLOADS_ADMIN, "stories/", $story->story_image ?>" class="text-dark" data-lightbox="lb_<?= $story->id; ?>" data-title="<?= $story->story_name; ?>" title="View Mobile Banner">
                        <i class="fa fa-mobile" aria-hidden="true"></i>
                      </a>
                      /
                      <a href="<?= PATH_FILES_UPLOADS_ADMIN, "stories/", $story->story_image ?>" class="text-dark" data-lightbox="lb_<?= $story->id; ?>" data-title="<?= $story->story_name; ?>" title="View Desktop Banner">
                        <i class="fa fa-desktop" aria-hidden="true"></i>
                      </a>
                    </td>

                    <td>
                      <h4 class="text-center m-0" title="Active">
                        <span class="badge badge-pill badge-<?= ($story->status == 1) ? 'success' : 'danger' ?>">&nbsp;</span>
                      </h4>
                    </td>

                    <td><?= $story->created_at ?></td>

                    <td><?= is_null($story->updated_at) ? '-' : $story->updated_at ?></td>

                    <td class="text-center m-0">
                    
                      <a href="<?= base_url("admin/stories/$story->story_id/edit/$story->id") ?>" target="_self" role="button" class="btn btn-dark btn-sm" title="Edit banner position">
                        <i class="fa fa-edit"></i>
                      </a>

                      <a href="javascript:void(0)" role="button" class="btn btn-sm btn-danger banner_position_delete_btn" id="story_delete_btn_<?= $story->id ?>" data-position-id="<?=$story_id ?>" data-record-id="<?= $story->id ?>" data-record-title="<?= $story->story_name ?>" data-toggle="modal" data-target="#story_confirm_delete" title="Delete this banner position">
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
<div class="modal fade" id="story_confirm_delete" tabindex="-1" role="dialog">
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
          <li>Are you sure you want to delete <span class="text-bold title"></span> story position.</li>

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