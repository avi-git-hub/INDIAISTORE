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

          <li class="breadcrumb-item"><a href="<?= base_url('admin/stories') ?>">Stories</a></li>

          <li class="breadcrumb-item active">Add New</li>
        </ol>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-12">
        <h1>Stories</h1>
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
            <h3 class="card-title">Add New</h3>
          </div>
          <!-- /.card-header -->

          <!-- form start -->
          <form role="form" method="post" enctype="multipart/form-data" autocomplete="off">
            <div class="card-body">
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="banner_position_name">Story Name</label>

                    <input type="text" required maxlength="100" class="form-control" name="story_name" id="story_name" value="<?= set_value('story_name'); ?>" maxlength="100" minlength="1" placeholder="Enter unique story name" required />

                    <?= form_error('banner_position_name', '<span class="error text-danger"><small>', '</small></span>'); ?>
                  </div>
                </div>

                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="story_slug">Story Slug</label>

                    <input type="text" required maxlength="100" class="form-control" name="story_slug" id="story_slug" value="<?= set_value('story_slug'); ?>" placeholder="Banner Slug" readonly />

                    <?= form_error('story_slug', '<span class="error text-danger"><small>', '</small></span>'); ?>
                  </div>
                </div>
              </div>

              <hr>

              <div class="row">

              
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="story_image">Story Image</label>

                    <div class="custom-file">
                      <input required type="file" class="custom-file-input" name="story_image" id="story_image" value="<?= set_value('story_image') ?>" accept="image/jpeg, image/png, image/gif">

                      <label class="custom-file-label" for="story_image">Choose file</label>

                      <small class="form-text text-muted">image dimensions should be (100 x 200)</small>

                      <?= form_error('story_image', '<span class="error text-danger"><small>', '</small></span>'); ?>
                    </div>
                  </div>
                </div>

                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="story_status">Select Status</label>

                    <!-- <select class="form-control" id="banner_position_status" name="banner_position_status" required>
                      <option value="1" <?//= set_select('banner_position_status', '1'); ?> >Active</option>
                      <option value="0" <?//= set_select('banner_position_status', '0'); ?> >Inactive</option>
                    </select>-->

                    <div>
                      <input type="checkbox" name="story_status" data-bootstrap-switch data-size="large" data-on-color="success" data-off-color="danger" data-on-text="Active" data-off-text="Inactive" value="1" <?= set_checkbox('story_status', '1', true) ?>>
                    </div>

                    <?= form_error('banner_position_status', '<span class="error text-danger"><small>', '</small></span>'); ?>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
              <button type="submit" class="btn btn-primary" name="story_submit" id="story_submit" value="1">Submit</button>
            </div>
          </form>
        </div>
        <!-- /.card -->
      </div>
      <!-- /.row -->
    </div>
  </div>
  <!-- /.container-fluid -->
</section>