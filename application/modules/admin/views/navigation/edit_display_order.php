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

          <li class="breadcrumb-item"><a href="<?= base_url("admin/navigation/sections") ?>">Navigation sections</a></li>

          <li class="breadcrumb-item"><a href="<?= base_url("admin/navigation/section/$nav_section_id") ?>"><?= $nav_section->slug ?></a></li>

          <li class="breadcrumb-item active">Edit Display Order</li>
        </ol>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-12">
        <h1>Navigation Item Display Order</h1>
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
          <input type="hidden" id="nav_section_id" value="<?= $nav_section_id ?>">
        </div>
        <!-- /.card-header -->

        <div class="card-body">
          <table class="table table-bordered text-center" id="tbl_display_order">
            <thead>
              <tr>
                <th width="40%">Name</th>
                <th width="40%">slug</th>
                <th width="15%">Move</th>
              </tr>
            </thead>

            <tbody id="display_order">
              <?php
              if (!empty($nav_items)) :
                foreach ($nav_items as $item) :
              ?>
                  <tr class="ui-state-default" id="banner_<?= $item->id; ?>">
                    <td><?= $item->name; ?></td>
                    <td><?= $item->slug; ?></td>
                    <td><i class="fa fa-arrows-alt-v"></i></td>
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
          <?php if (!empty($nav_items)) : ?>
            <button type="button" class="btn btn-primary px-4" id="save_display_order" data-nav-section-id="<?= $nav_section_id ?>">Save</button>
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