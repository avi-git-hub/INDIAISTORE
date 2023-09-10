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

    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Partners</h1>
      </div>

      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="<?= base_url('admin/partners') ?>">Partners</a></li>

          <li class="breadcrumb-item active">Manage</li>
        </ol>
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
          <h3 class="card-title">Partner</h3>
          <a href="<?= base_url('admin/partner/add-new') ?>" role="button" class="btn btn-primary btn-sm float-right">
            <i class="fa fa-download"></i> Add New
          </a>
        </div>

        <!-- /.card-header -->
        <div class="card-body">
          <table id="partner_table" class="table table-bordered table-hover table-striped text-center">
            <thead>
              <tr>
                <th>Id</th>

                <th>Reseller</th>

                <th>Name</th>

                <th>Logo</th>

                <th>Phone</th>

                <th>Website</th>

                <th><i class="fa fa-cog"></i></th>
              </tr>
            </thead>

            <tbody>
              <?php if (empty($partners)) : ?>
                <tr>
                  <td colspan="7">No Partners available</td>
                </tr>
              <?php else : ?>
                <?php foreach ($partners as $partner) : ?>
                  <tr>
                    <td><?= $partner->id ?></td>

                    <td><?= $partner->reseller ?></td>

                    <td><?= $partner->name ?></td>

                    <td>
                      <a href="<?= PATH_FILES_UPLOADS_ADMIN, 'partners/', $partner->logo ?>" class="text-dark" data-lightbox="lb_<?= $partner->id; ?>" data-title="<?= $partner->name; ?>" title="View Partner Logo">
                        <i class="fa fa-eye" aria-hidden="true"></i>
                      </a>
                      <?php if (!empty($partner->logo_rectangular)) : ?>
                        / <a href="<?= PATH_FILES_UPLOADS_ADMIN, 'partners/', $partner->logo_rectangular ?>" class="text-dark" data-lightbox="lb_<?= $partner->id; ?>" data-title="<?= $partner->name; ?>" title="View Partner Rectangular Logo">
                          <i class="fa fa-eye" aria-hidden="true"></i>
                        </a>
                      <?php endif; ?>
                    </td>

                    <td><?= $partner->phone ?></td>

                    <td><?= $partner->website ?></td>

                    <td class="text-center m-0">
                      <a href="<?= base_url("admin/partner/$partner->id/edit"); ?>" target="_self" role="button" class="btn btn-dark btn-sm">
                        <i class="fa fa-edit"></i>
                      </a>

                      <a href="#" data-record-id="<?= $partner->id ?>" data-record-title="<?= $partner->name ?>" data-toggle="modal" data-target="#partner_confirm_delete" role="button" class="btn btn-sm btn-dark partner_delete_btn" id="partner_delete_btn_<?= $partner->id ?>">
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
<div class="modal fade" id="partner_confirm_delete" tabindex="-1" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content bg-danger">
      <div class="modal-header">
        <h4 class="modal-title" id="partner_confirm_delete_label">Delete Partner</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <ul>
          <li>Are you sure you want to delete <span class="text-bold title"></span> partner.</li>
          <li>Please note, <span class="text-danger text-bold">this will delete all the product under this partner.</span></li>
          <li>This is an irreversible procedure.</li>
        </ul>
      </div>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-outline-light btn-ok">Delete</button>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- ./modal -->