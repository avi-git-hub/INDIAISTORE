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

          <li class="breadcrumb-item active">Edit <?= $banner->name ?> Banner</li>
        </ol>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-12">
        <h1>Edit Banner</h1>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

<section class="content">
  <div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col">
        <div class="card">
          <div class="card-header bg-dark">
            <h3 class="card-title">Edit</h3>
          </div>
          <!-- /.card-header -->

          <!-- form start -->
          <form role="form" method="post" enctype="multipart/form-data" autocomplete="off">
            <div class="card-body">
              <input type="hidden" value="<?= $banner->banner_position_id ?>" name="banner_position_id_old">

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="banner_name">Banner Name</label>

                    <input type="text" required maxlength="100" class="form-control" name="banner_name" id="banner_name" value="<?= set_value('banner_name', $banner->name) ?>" placeholder="Enter unique banner name" required>

                    <?= form_error('banner_name', '<span class="error text-danger"><small>', '</small></span>'); ?>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label for="banner_position">Banner Position</label>

                    <select class="form-control" name="banner_position" id="banner_position" required>
                      <option value="">Select Banner Position</option>
                      <?php
                      foreach ($banner_positions as $banner_p) :
                        echo '<option value="', $banner_p->id, '"', (($banner_p->id == $banner_position_id) ? ' selected>' : '>'), $banner_p->position_slug . '</option>';
                      endforeach;
                      ?>
                    </select>

                    <?= form_error('banner_position', '<span class="error text-danger"><small>', '</small></span>'); ?>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-3">
                  <div class="form-group">
                    <label for="banner_image_mobile" class="form-control-label">Mobile Banner Image</label>

                    <?php
                    $imagePresent = false;

                    if (!in_array($banner->mobile_image, ['', null])) :
                      $file_path = "banners/$banner_position->position_slug/" . $banner->mobile_image;

                      if (is_file(ABS_PATH_FILES_UPLOADS . $file_path)) :
                        echo '<a href="', PATH_FILES_UPLOADS_ADMIN, $file_path, '" target="_blank" class="float-right text-success" download><strong>Download/Backup</strong></a>';

                        $imagePresent = true;
                      else :
                        echo '<a href="javascript:void(0)" class="float-right text-danger"><strong>File Not Found!</strong></a>';
                      endif;
                    endif;
                    ?>

                    <div class="custom-file">
                      <input type="file" class="custom-file-input" name="banner_image_mobile" id="banner_image_mobile" value="" accept="image/jpeg, image/png, image/gif" />

                      <label class="custom-file-label" for="banner_image_mobile">Choose new file</label>
                    </div>
                  </div>
                </div>

                <div class="col-md-3">
                  <div class="form-group">
                    <label for="banner_image_desktop" class="form-control-label">Desktop Banner Image</label>

                    <?php
                    $imagePresent = false;

                    if (!in_array($banner->desktop_image, ['', null])) :
                      $file_path = "banners/$banner_position->position_slug/" . $banner->desktop_image;

                      if (is_file(ABS_PATH_FILES_UPLOADS . $file_path)) :
                        echo '<a href="', PATH_FILES_UPLOADS_ADMIN, $file_path, '" target="_blank" download class="float-right text-success"><strong>Download/Backup</strong></a>';

                        $imagePresent = true;
                      else :
                        echo '<a href="javascript:void(0)" class="float-right text-danger"><strong>File Not Found!</strong></a>';
                      endif;
                    endif;
                    ?>

                    <div class="custom-file">
                      <input type="file" class="custom-file-input" name="banner_image_desktop" id="banner_image_desktop" value="" accept="image/jpeg, image/png, image/gif" />

                      <label class="custom-file-label" for="banner_image_desktop">Choose new file</label>
                    </div>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label for="banner_video_url">Banner Video Url</label>

                    <div>&nbsp;</div>

                    <input type="text" maxlength="1000" class="form-control" name="banner_video_url" id="banner_video_url" value="<?= set_value('banner_video_url', $banner->video_url) ?>" placeholder="Enter Video Url">

                    <?= form_error('banner_video_url', '<span class="error text-danger"><small>', '</small></span>'); ?>
                  </div>
                </div>

                <!-- <div class="col-sm-2">
                  <div class="form-group">
                    <label for="banner_type" class="form-control-label">Banner Type (Image/Video)</label>
                    <div>

                      <?php //$url_flag = empty($banner->video_url) ? 1 : 0; ?>

                      <input type="checkbox" id="banner_type" name="banner_type" data-bootstrap-switch data-size="large" data-on-color="success" data-off-color="primary" data-on-text="Image" data-off-text="Video" value="<?= set_value('banner_type', $url_flag) ?>" <?= set_checkbox('banner_type', set_value('banner_type', $url_flag), $url_flag == 1 ? true : false) ?>>
                    </div>
                    <?//= form_error('banner_type', '<span class="error text-danger"><small>', '</small></span>'); ?>
                  </div>
                </div>

                <div class="col-sm-10" id="banner_video_section" <?= $url_flag ? "style = 'display: none;'" : '' ?>>
                  <div class="form-group">
                    <label for="banner_video_url">Banner Video Url</label>

                    <input type="text" maxlength="1000" class="form-control" name="banner_video_url" id="banner_video_url" value="<?= set_value('banner_video_url', $banner->video_url) ?>" placeholder="Enter Video Url">

                    <?= form_error('banner_video_url', '<span class="error text-danger"><small>', '</small></span>'); ?>
                  </div>
                </div>

                <div class="col-sm-10" id="banner_image_section" <?= $url_flag ? '' : "style = 'display: none;'" ?>>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="banner_image_mobile" class="form-control-label">Mobile Banner Image</label>

                        <?php
                        $imagePresent = false;

                        if (!in_array($banner->mobile_image, ['', null])) :
                          $file_path = "banners/$banner_position->position_slug/" . $banner->mobile_image;

                          if (is_file(ABS_PATH_FILES_UPLOADS . $file_path)) :
                            echo '<a href="', PATH_FILES_UPLOADS_ADMIN, $file_path, '" target="_blank" class="float-right text-success" download><strong>Download/Backup</strong></a>';

                            $imagePresent = true;
                          else :
                            echo '<a href="javascript:void(0)" class="float-right text-danger"><strong>File Not Found!</strong></a>';
                          endif;
                        endif;
                        ?>

                        <div class="custom-file">
                          <input type="file" class="custom-file-input" name="banner_image_mobile" id="banner_image_mobile" value="" accept="image/jpeg, image/png, image/gif" />

                          <label class="custom-file-label" for="banner_image_mobile">Choose new file</label>
                        </div>
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="banner_image_desktop" class="form-control-label">Desktop Banner Image</label>

                        <?php
                        $imagePresent = false;

                        if (!in_array($banner->desktop_image, ['', null])) :
                          $file_path = "banners/$banner_position->position_slug/" . $banner->desktop_image;

                          if (is_file(ABS_PATH_FILES_UPLOADS . $file_path)) :
                            echo '<a href="', PATH_FILES_UPLOADS_ADMIN, $file_path, '" target="_blank" download class="float-right text-success"><strong>Download/Backup</strong></a>';

                            $imagePresent = true;
                          else :
                            echo '<a href="javascript:void(0)" class="float-right text-danger"><strong>File Not Found!</strong></a>';
                          endif;
                        endif;
                        ?>

                        <div class="custom-file">
                          <input type="file" class="custom-file-input" name="banner_image_desktop" id="banner_image_desktop" value="" accept="image/jpeg, image/png, image/gif" />

                          <label class="custom-file-label" for="banner_image_desktop">Choose new file</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div> -->
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="banner_start_date" class="form-control-label">Banner Start Display Date</label>

                    <input type="text" class="form-control" name="banner_start_date" id="banner_start_date" value="<?= ($banner->start_date) ? date('Y-m-d H:i:s', strtotime($banner->start_date)) : '' ?>" placeholder="Select a start date (if any)" />

                    <?= form_error('banner_start_date', '<span class="error text-danger"><small>', '</small></span>'); ?>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label for="banner_end_date" class="form-control-label">Banner End Display Date</label>

                    <input type="text" class="form-control" name="banner_end_date" id="banner_end_date" value="<?= ($banner->end_date) ? date('Y-m-d H:i:s', strtotime($banner->end_date)) : '' ?>" placeholder="Select a end date (if any)" />

                    <?= form_error('banner_end_date', '<span class="error text-danger"><small>', '</small></span>'); ?>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="banner_alt_text" required maxlength="100" class="form-control-label">Alternative Text</label>

                    <input type="text" class="form-control" name="banner_alt_text" id="banner_alt_text" value="<?= set_value('banner_alt_text', $banner->alt_text) ?>" placeholder="Alternative text for banner image" required>

                    <?= form_error('banner_alt_text', '<span class="error text-danger"><small>', '</small></span>'); ?>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label for="banner_cta" class="form-control-label mb-0">
                      <span class="mr-4">CTA URL</span>

                      <div class="icheck-primary d-inline">
                        <input type="checkbox" name="banner_is_external_cta" id="banner_is_external_cta" <?= ($banner->is_external_cta == 1) ? ' checked' : '' ?>>

                        <label for="banner_is_external_cta">(Is external URL)</label>
                      </div>
                    </label>

                    <input type="text" class="form-control" name="banner_cta" id="banner_cta" value="<?= set_value('banner_cta', $banner->cta) ?>" placeholder="Full redirect URL (if any)" />

                    <?= form_error('banner_cta', '<span class="error text-danger"><small>', '</small></span>'); ?>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="banner_classes" class="form-control-label">Additional Class</label>

                    <input type="text" class="form-control" name="banner_classes" id="banner_classes" value="<?= set_value('banner_classes', $banner->additional_classes) ?>" placeholder="Space separated class names (if any)" />
                  </div>

                  <?= form_error('banner_classes', '<span class="error text-danger"><small>', '</small></span>'); ?>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label for="banner_target_user" class="form-control-label">Target User</label>
                    <?php $target_user_options = ['all' => 'All', 'android' => 'Android', 'ios' => 'iOS', 'dex_all' => 'Desktop-All', 'dex_win' => 'Desktop-Windows', 'dex_mac' => 'Desktop-MacOS']; ?>
                    <?= form_dropdown(
                      'banner_target_user',
                      $target_user_options,
                      $banner->target_user,
                      ['class' => 'form-control', 'id' => "banner_target_user"]
                    );
                    ?>
                    <?= form_error('banner_target_user', '<span class="error text-danger"><small>', '</small></span>'); ?>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-auto">
                  <div class="form-group">
                    <label for="banner_status" class="form-control-label">Status</label>

                    <div>
                      <input type="checkbox" name="banner_status" data-bootstrap-switch data-size="large" data-on-color="success" data-off-color="danger" data-on-text="Active" data-off-text="Inactive" value="<?= set_value('banner_status', $banner->status); ?>" <?= set_checkbox('banner_status', set_value('banner_status', $banner->status), ($banner->status == '1') ? true : false) ?>>
                    </div>

                    <?= form_error('banner_status', '<span class="error text-danger"><small>', '</small></span>'); ?>
                  </div>
                </div>

                <div class="col-auto">
                  <div class="form-group">
                    <label for="banner_is_regional" class="form-control-label">Is Regional</label>

                    <div>
                      <input type="checkbox" id="banner_is_regional" name="banner_is_regional" data-bootstrap-switch data-size="large" data-on-color="success" data-off-color="danger" data-on-text="Yes" data-off-text="No" value="<?= set_value('banner_is_regional', empty($banner->regions) ? 0 : 1); ?>" <?= set_checkbox('banner_is_regional', set_value('banner_is_regional', empty($banner->regions) ? 0 : 1), empty($banner->regions) ? false : true) ?>>
                    </div>

                    <?= form_error('banner_is_regional', '<span class="error text-danger"><small>', '</small></span>'); ?>
                  </div>
                </div>

                <div class="col">
                  <div class="form-group">
                    <label for="banner_regions" class="form-control-label">Regions</label>

                    <textarea maxlength="1000" class="form-control" name="banner_regions" id="banner_regions" rows="4" placeholder="Enter comma seperated regions"><?= set_value('banner_regions', $banner->regions) ?></textarea>

                    <?= form_error('banner_regions', '<span class="error text-danger"><small>', '</small></span>'); ?>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-12">
                  <div class="form-group">
                    <label for="product_store_discount">Desktop Image Mapping</label>
                    <textarea class="form-control wysiwyg" name="desktop_image_mapping" id="desktop_image_mapping" placeholder="Desktop Image Mapping" ><?= set_value('desktop_image_mapping',  $banner->desktop_image_mapping); ?></textarea>

                    <?= form_error('desktop_image_mapping', '<span class="error text-danger"><small>', '</small></span>') ?>
                  </div>
                </div>
             </div>

             <div class="row">
                <div class="col-sm-12">
                  <div class="form-group">
                    <label for="product_store_discount">Mobile Image Mapping</label>
                    <textarea class="form-control wysiwyg" name="mobile_image_mapping" id="mobile_image_mapping" placeholder="Mobile Image Mapping" ><?= set_value('mobile_image_mapping', $banner->mobile_image_mapping); ?></textarea>

                    <?= form_error('mobile_image_mapping', '<span class="error text-danger"><small>', '</small></span>') ?>
                  </div>
                </div>
             </div>

              <div class="row">
                <div class="col-sm-12">
                  <div class="form-group">
                    <label for="product_store_discount">Ticker Text</label>
                    <textarea class="form-control wysiwyg" name="ticker_text" id="ticker_text" placeholder="Ticker text" ><?= set_value('ticker_text', $banner->ticker_text); ?></textarea>

                    <?= form_error('ticker_text', '<span class="error text-danger"><small>', '</small></span>') ?>
                  </div>
                </div>
             </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
              <button type="submit" class="btn btn-primary" id="banner_submit" name="banner_submit" value="1">Submit</button>
            </div>
          </form>
        </div>
        <!-- /.card -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</section>