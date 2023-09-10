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

          <li class="breadcrumb-item"><a href="<?= base_url("admin/banner/positions") ?>">Banner Positions</a></li>

          <li class="breadcrumb-item"><a href="<?= base_url("admin/banner/position/$banner_position_id") ?>"><?= $banner_position->position_name ?></a></li>

          <li class="breadcrumb-item active">Add New Banner</li>
        </ol>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-12">
        <h1>Add New Banner</h1>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>


<section class="content">
  <div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col">
        <!-- general form elements -->
        <div class="card">
          <div class="card-header bg-dark">
            <h3 class="card-title">Add New Banner</h3>
          </div>
          <!-- /.card-header -->

          <!-- form start -->
          <form role="form" method="post" enctype="multipart/form-data" autocomplete="off">
            <div class="card-body">
              <input type="hidden" name="banner_position_id" id="banner_position_id" value="<?= $banner_position_id ?>" />

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="banner_name">Banner Name</label>

                    <input type="text" required maxlength="100" class="form-control" name="banner_name" id="banner_name" value="<?= set_value('banner_name') ?>" maxlength="100" minlength="1" placeholder="Enter unique banner name">

                    <?= form_error('banner_name', '<span class="error text-danger"><small>', '</small></span>'); ?>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label for="banner_status">Banner Position</label>

                    <select class="form-control" name="banner_position" id="banner_position">
                      <option selected="selected" required value="">Select Banner Position</option>
                      <?php
                      foreach ($banner_positions as $banner_position) :
                        echo "<option value='$banner_position->id'", (($banner_position->id == $banner_position_id) ? " selected" : ""), ">$banner_position->position_name</option>";
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
                    <label for="banner_image_mobile">Banner Mobile Image</label>

                    <div class="custom-file">
                      <input required type="file" class="custom-file-input" name="banner_image_mobile" id="banner_image_mobile" value="<?= set_value('banner_image_mobile') ?>" accept="image/jpeg, image/png, image/gif">

                      <label class="custom-file-label" for="banner_image_mobile">Choose file</label>

                      <small class="form-text text-muted">image dimensions should be (100 x 200)</small>

                      <?= form_error('banner_image_mobile', '<span class="error text-danger"><small>', '</small></span>'); ?>
                    </div>
                  </div>
                </div>

                <div class="col-md-3">
                  <div class="form-group">
                    <label for="banner_image_desktop">Banner Desktop Image</label>

                    <div class="custom-file">
                      <input required type="file" class="custom-file-input" name="banner_image_desktop" id="banner_image_desktop" value="<?= set_value('banner_image_desktop') ?>" accept="image/jpeg, image/png, image/gif">

                      <label class="custom-file-label" for="banner_image_desktop">Choose file</label>

                      <small class="form-text text-muted">image dimensions should be (100 x 50)</small>

                      <?= form_error('banner_image_desktop', '<span class="error text-danger"><small>', '</small></span>'); ?>
                    </div>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label for="banner_video_url">Banner Video Url (if any)</label>

                    <input type="text" maxlength="1000" class="form-control" name="banner_video_url" id="banner_video_url" value="" placeholder="Enter Video Url"> <?//= set_value('banner_video_url') ?>

                    <?= form_error('banner_video_url', '<span class="error text-danger"><small>', '</small></span>'); ?>
                  </div>
                </div>

                <!-- <div class="col-sm-2">
                  <div class="form-group">
                    <label for="banner_type" class="form-control-label">Banner Type (Image/Video)</label>
                    <div>
                      <input type="checkbox" id="banner_type" name="banner_type" data-bootstrap-switch data-size="large" data-on-color="success" data-off-color="primary" data-on-text="Image" data-off-text="Video" value="<?= set_value('banner_type') ?>" <?= set_checkbox('banner_status', '1', true) ?>>
                    </div>
                    <?//= form_error('banner_type', '<span class="error text-danger"><small>', '</small></span>'); ?>
                  </div>
                </div>

                <div class="col-sm-10" id="banner_video_section" style="display: none;">
                  <div class="form-group">
                    <label for="banner_video_url">Banner Video Url</label>

                    <input type="text" maxlength="1000" class="form-control" name="banner_video_url" id="banner_video_url" value="<?= set_value('banner_video_url') ?>" placeholder="Enter Video Url">

                    <?//= form_error('banner_video_url', '<span class="error text-danger"><small>', '</small></span>'); ?>
                  </div>
                </div>

                <div class="col-sm-10" id="banner_image_section">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="banner_image_mobile">Banner Mobile Image</label>

                        <div class="custom-file">
                          <input required type="file" class="custom-file-input" name="banner_image_mobile" id="banner_image_mobile" value="" accept="image/jpeg, image/png, image/gif">

                          <label class="custom-file-label" for="banner_image_mobile">Choose file</label>

                          <small class="form-text text-muted">image dimensions should be (100 x 200)</small>

                          <?//= form_error('banner_image_mobile', '<span class="error text-danger"><small>', '</small></span>'); ?>
                        </div>
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="banner_image_desktop">Banner Desktop Image</label>

                        <div class="custom-file">
                          <input required type="file" class="custom-file-input" name="banner_image_desktop" id="banner_image_desktop" value="" accept="image/jpeg, image/png, image/gif">

                          <label class="custom-file-label" for="banner_image_desktop">Choose file</label>

                          <small class="form-text text-muted">image dimensions should be (100 x 50)</small>

                          <?//= form_error('banner_image_desktop', '<span class="error text-danger"><small>', '</small></span>'); ?>
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

                    <input type="text" class="form-control" name="banner_start_date" id="banner_start_date" value="<?= set_value('banner_start_date') ?>" placeholder="Select a start date (if any)" />

                    <?= form_error('banner_start_date', '<span class="error text-danger"><small>', '</small></span>'); ?>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label for="banner_end_date" class="form-control-label">Banner End Display Date</label>

                    <input type="text" class="form-control" name="banner_end_date" id="banner_end_date" value="<?= set_value('banner_end_date') ?>" placeholder="Select a end date (if any)" />

                    <?= form_error('banner_end_date', '<span class="error text-danger"><small>', '</small></span>'); ?>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="banner_alt_text" class="form-control-label">Alternative Text</label>

                    <input required type="text" maxlength="100" class="form-control" name="banner_alt_text" id="banner_alt_text" value="<?= set_value('banner_alt_text') ?>" placeholder="Alternative text for banner image">

                    <?= form_error('banner_alt_text', '<span class="error text-danger"><small>', '</small></span>'); ?>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label for="banner_cta" class="form-control-label mb-0">
                      <span class="mr-4">CTA URL</span>

                      <div class="icheck-primary d-inline">
                        <input type="checkbox" name="banner_is_external_cta" id="banner_is_external_cta" <?= (set_value('banner_is_external_cta') == 'on') ? 'checked' : ''; ?>>

                        <label for="banner_is_external_cta">(Is external URL)</label>
                      </div>
                    </label>

                    <input type="text" class="form-control" name="banner_cta" id="banner_cta" value="<?= set_value('banner_cta') ?>" placeholder="Full redirect URL (if any)" />

                    <?= form_error('banner_cta', '<span class="error text-danger"><small>', '</small></span>'); ?>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="banner_classes" class="form-control-label">Additional Class</label>

                    <input type="text" class="form-control" name="banner_classes" id="banner_classes" value="<?= set_value('banner_classes') ?>" placeholder="Space separated class names (if any)" />
                  </div>

                  <?= form_error('banner_classes', '<span class="error text-danger"><small>', '</small></span>'); ?>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label for="banner_target_user" class="form-control-label">Target User</label>
                    <?php $target_user_options = ['all' => 'All', 'android' => 'Android', 'ios' => 'iOS', 'dex_all' => 'Desktop-All', 'dex_win' => 'Desktop-Windows', 'dex_mac' => 'Desktop-MacOS']; ?>
                    <?= form_dropdown('banner_target_user', $target_user_options, 'all', ['id' => "banner_target_user", "class" => "form-control", 'required' => 'required']); ?>
                    <?= form_error('banner_target_user', '<span class="error text-danger"><small>', '</small></span>'); ?>
                  </div>

                </div>
              </div>

              <div class="row">
                <div class="col-auto">
                  <div class="form-group">
                    <label for="banner_status" class="form-control-label">Status</label>
                    <div>
                      <input type="checkbox" id="banner_status" name="banner_status" data-bootstrap-switch data-size="large" data-on-color="success" data-off-color="danger" data-on-text="Active" data-off-text="Inactive" value="1" <?= set_checkbox('banner_status', '1', true) ?>>
                    </div>
                    <?= form_error('banner_status', '<span class="error text-danger"><small>', '</small></span>'); ?>
                  </div>
                </div>

                <div class="col-auto">
                  <div class="form-group">
                    <label for="banner_is_regional" class="form-control-label">Is Regional</label>
                    <div>
                      <input type="checkbox" id="banner_is_regional" name="banner_is_regional" data-bootstrap-switch data-size="large" data-on-color="success" data-off-color="danger" data-on-text="Yes" data-off-text="No" value="<?= set_value('banner_is_regional') ?: 0 ?>" <?= set_checkbox('banner_is_regional', '1', false) ?>>
                    </div>
                    <?= form_error('banner_is_regional', '<span class="error text-danger"><small>', '</small></span>'); ?>
                  </div>
                </div>

                <div class="col">
                  <div class="form-group">
                    <label for="banner_regions" class="form-control-label">Regions</label>

                    <textarea maxlength="1000" class="form-control" name="banner_regions" id="banner_regions" rows="4" placeholder="Enter comma seperated regions"><?= set_value('banner_regions') ?></textarea>

                    <?= form_error('banner_regions', '<span class="error text-danger"><small>', '</small></span>'); ?>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-sm-12">
                  <div class="form-group">
                    <label for="desktop_image_mapping">Desktop Image Mapping</label>
                    <textarea class="form-control wysiwyg" name="desktop_image_mapping" id="desktop_image_mapping" placeholder="Desktop Image Mapping" ><?= set_value('desktop_image_mapping'); ?></textarea>

                    <?= form_error('desktop_image_mapping', '<span class="error text-danger"><small>', '</small></span>') ?>
                  </div>
                </div>
             </div>

             <div class="row">
                <div class="col-sm-12">
                  <div class="form-group">
                    <label for="mobile_image_mapping">Mobile Image Mapping</label>
                    <textarea class="form-control wysiwyg" name="mobile_image_mapping" id="mobile_image_mapping" placeholder="Mobile Image Mapping" ><?= set_value('mobile_image_mapping'); ?></textarea>

                    <?= form_error('mobile_image_mapping', '<span class="error text-danger"><small>', '</small></span>') ?>
                  </div>
                </div>
             </div>

             <div class="row">
                <div class="col-sm-12">
                  <div class="form-group">
                    <label for="product_store_discount">Ticker Text</label>
                    <textarea class="form-control wysiwyg" name="ticker_text" id="ticker_text" placeholder="Ticker text" ><?= set_value('ticker_text'); ?></textarea>

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