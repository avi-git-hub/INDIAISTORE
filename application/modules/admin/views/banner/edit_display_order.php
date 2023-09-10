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
          <li class="breadcrumb-item"><a href="<?= base_url("admin/dashboard") ?>">Admin</a></li>

          <li class="breadcrumb-item"><a href="<?= base_url("admin/banner/positions") ?>">Banner Positions</a></li>

          <li class="breadcrumb-item"><a href="<?= base_url("admin/banner/position/$banner_position_id") ?>"><?= $banner_position->position_name ?></a></li>

          <li class="breadcrumb-item active">Edit Banner Display Order</li>
        </ol>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-12">
        <h1>Banner Display Order</small></h1>
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
          <h3 class="card-title">Edit</h3>
          <input type="hidden" id="banner_pos_id" value="<?= $banner_position_id ?>">
        </div>
        <!-- /.card-header -->

        <div class="card-body">
          <table class="table table-bordered text-center" id="tbl_display_order">
            <thead>
              <tr>
                <th width="40%">Banner Title</th>

                <th width="15%">Banner Images</th>

                <th width="15%">Status</th>

                <th width="15%">Move</th>

                <th width="15%"><i class="fa fa-cog"></i></th>
              </tr>
            </thead>

            <tbody id="display_order">
              <?php
              if (!empty($banners)) :
                foreach ($banners as $banner) :
              ?>
                  <tr class="ui-state-default" id="banner_<?php echo $banner->id; ?>">
                    <td><?php echo $banner->name; ?></td>

                    <td>
                      <a href="<?= PATH_FILES_UPLOADS_ADMIN . "banners/$banner->mobile_image" ?>" class="text-dark" data-lightbox="lb_<?= $banner->id; ?>" data-title="<?= $banner->name; ?>" title="View Mobile Banner">
                        <i class="fa fa-mobile" aria-hidden="true"></i>
                      </a>
                      /
                      <a href="<?= PATH_FILES_UPLOADS_ADMIN . "banners/$banner->desktop_image" ?>" class="text-dark" data-lightbox="lb_<?= $banner->id; ?>" data-title="<?= $banner->name; ?>" title="View Desktop Banner">
                        <i class="fa fa-desktop" aria-hidden="true"></i>
                      </a>
                    </td>

                    <td>
                      <h4 class="m-0" title="Active">
                        <span class="badge badge-pill badge-<?= ($banner->status == 1) ? 'success' : 'danger' ?>">&nbsp;</span>
                      </h4>
                    </td>

                    <td><i class="fa fa-arrows-alt-v"></i></td>

                    <td>
                      <a href="<?= base_url("/admin/banner/position/$banner_position_id/edit/$banner->id") ?>" target="_self" role="button" class="btn btn-sm btn-dark" title="Edit this banner">
                        <i class="fa fa-edit"></i>
                      </a>
                    </td>
                  </tr>
                <?php
                endforeach;
              else :
                ?>
                <tr>
                  <td colspan="6">No data available.</td>
                </tr>
              <?php
              endif;
              ?>
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
          <?php if (!empty($banners)) : ?>
            <button type="button" class="btn btn-primary px-4" id="save_display_order" data-position-id="<?= $banner_position_id ?>">Save</button>
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