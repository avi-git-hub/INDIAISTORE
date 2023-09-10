
<?php
    // echo '<pre>';
    // print_r($story_details_data);
    // echo '</pre>';
?>
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

          <li class="breadcrumb-item"><a href="<?= base_url("admin/stories/") ?>">Banner Positions</a></li>

          <li class="breadcrumb-item"><a href="<?= base_url("admin/stories/$story_id") ?>"><?= $story_details_data->story_name ?></a></li>

          <li class="breadcrumb-item active">Add New Story</li>
        </ol>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-12">
        <h1>Add New Story</h1>
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
            <h3 class="card-title">Add New Story</h3>
          </div>
          <!-- /.card-header -->

          <!-- form start -->
          <form role="form" method="post" enctype="multipart/form-data" autocomplete="off">
            <div class="card-body">
              <input type="hidden" name="story_id" id="story_id" value="<?= $story_id ?>" />

            <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="story_name">Story Name</label>

                    <input type="text" required maxlength="100" class="form-control" name="story_name" id="story_name" value="<?= set_value('story_name') ?>" maxlength="100" minlength="1" placeholder="Enter unique story name">

                    <?= form_error('story_name', '<span class="error text-danger"><small>', '</small></span>'); ?>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="story_status">Story Position Name</label>

                        <select class="form-control" name="story_name_1" id="story_name_1">
                        <option selected="selected" required value="">Select Parent Story Name</option>
                        <?php
                        foreach ($snapshots as $snapshot) :
                            echo "<option value='$snapshot->id'", (($snapshot->id == $story_id) ? " selected" : ""), ">$snapshot->story_name</option>";
                        endforeach;
                        ?>
                        </select>

                    <?= form_error('story_name_1', '<span class="error text-danger"><small>', '</small></span>'); ?>
                  </div>
                </div>

            </div>


              <div class="row">
                <div class="col-md-3">
                  <div class="form-group">
                    <label for="story_image_mobile">Story Mobile Image</label>

                    <div class="custom-file">
                      <input required type="file" class="custom-file-input" name="story_image_mobile" id="story_image_mobile" value="<?= set_value('story_image_mobile') ?>" accept="image/jpeg, image/png, image/gif">

                      <label class="custom-file-label" for="story_image_mobile">Choose file</label>

                      <small class="form-text text-muted">image dimensions should be (100 x 200)</small>

                      <?= form_error('story_image_mobile', '<span class="error text-danger"><small>', '</small></span>'); ?>
                    </div>
                  </div>
                </div>

                <div class="col-md-3">
                  <div class="form-group">
                    <label for="story_image_desktop">Story Desktop Image</label>

                    <div class="custom-file">
                      <input required type="file" class="custom-file-input" name="story_image_desktop" id="story_image_desktop" value="<?= set_value('story_image_desktop') ?>" accept="image/jpeg, image/png, image/gif">

                      <label class="custom-file-label" for="story_image_desktop">Choose file</label>

                      <small class="form-text text-muted">image dimensions should be (100 x 50)</small>

                      <?= form_error('story_image_desktop', '<span class="error text-danger"><small>', '</small></span>'); ?>
                    </div>
                  </div>
                </div>

               
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="story_start_date" class="form-control-label">Banner Start Display Date</label>

                    <input type="text" class="form-control" name="story_start_date" id="story_start_date" value="<?= set_value('story_start_date') ?>" placeholder="Select a start date (if any)" />

                    <?= form_error('story_start_date', '<span class="error text-danger"><small>', '</small></span>'); ?>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label for="story_end_date" class="form-control-label">Banner End Display Date</label>

                    <input type="text" class="form-control" name="story_end_date" id="story_end_date" value="<?= set_value('story_end_date') ?>" placeholder="Select a end date (if any)" />

                    <?= form_error('story_end_date', '<span class="error text-danger"><small>', '</small></span>'); ?>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="story_alt_text" class="form-control-label">Alternative Text</label>

                    <input required type="text" maxlength="100" class="form-control" name="story_alt_text" id="story_alt_text" value="<?= set_value('story_alt_text') ?>" placeholder="Alternative text for banner image">

                    <?= form_error('story_alt_text', '<span class="error text-danger"><small>', '</small></span>'); ?>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="story_classes" class="form-control-label">Additional Class</label>

                    <input type="text" class="form-control" name="story_classes" id="story_classes" value="<?= set_value('story_classes') ?>" placeholder="Space separated class names (if any)" />
                  </div>

                  <?= form_error('story_classes', '<span class="error text-danger"><small>', '</small></span>'); ?>
                </div>

              </div>

              <div class="row">
                <div class="col-auto">
                  <div class="form-group">
                    <label for="story_status" class="form-control-label">Status</label>
                    <div>
                      <input type="checkbox" id="story_status" name="story_status" data-bootstrap-switch data-size="large" data-on-color="success" data-off-color="danger" data-on-text="Active" data-off-text="Inactive" value="1" <?= set_checkbox('story_status', '1', true) ?>>
                    </div>
                    <?= form_error('story_status', '<span class="error text-danger"><small>', '</small></span>'); ?>
                  </div>
                </div>

            </div>
            <!-- /.card-body -->

            <div class="card-footer">
              <button type="submit" class="btn btn-primary" id="story_submit" name="story_submit" value="1">Submit</button>
            </div>
          </form>
        </div>
        <!-- /.card -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</section>