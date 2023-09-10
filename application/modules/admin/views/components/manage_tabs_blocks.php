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
        <h1>Tabs Block</h1>
      </div>

      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="<?= base_url('admin/components/tabs-block') ?>">Tabs Block</a></li>

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
        <div class="card-header bg-dark border-dark">
          <h3 class="card-title">Manage</h3>

          <div class="float-right">
            <a href="<?= base_url('admin/components/tabs-block/add-new') ?>" role="button" class="btn btn-success btn-sm">
              <i class="fa fa-plus"></i> Add New
            </a>


          </div>
        </div>
        <!-- /.card-header -->

        <div class="card-body">
          <table id="tbl_tabs_blocks" class="table table-bordered table-striped text-center">
            <thead>
              <tr>
                <th>Title</th>

                <th>Slug</th>

                <th>For</th>

                <th>Created</th>

                <th>Updated</th>

                <th><i class="fa fa-cog"></i></th>
              </tr>
            </thead>

            <tbody>
              <?php if (!empty($tabs_blocks_data)) : ?>
                <?php foreach ($tabs_blocks_data as $tbd) : ?>
                  <tr>
                    <td><?= $tbd->section_title ?></td>

                    <td><?= $tbd->section_slug ?></td>

                    <td><?= $tbd->section_for, ' (',  (($tbd->section_for == 'Category') ? $tbd->category : $tbd->product), ')' ?></td>

                    <!--<td>
                      <h4 class="text-center m-0" title="Active">
                        <span class="badge badge-pill badge-<?//= ($tbd->status == 1) ? 'success' : 'danger' ?>">&nbsp;</span>
                      </h4>
                    </td>-->

                    <td><?= $tbd->created_at ?></td>

                    <td><?= is_null($tbd->updated_at) ? '-' : $tbd->updated_at ?></td>

                    <td class="text-center m-0">
                      <a href="<?= base_url("admin/components/tabs-block/$tbd->tb_id/edit"); ?>" target="_self" role="button" class="btn btn-dark btn-sm" title="Edit Tabs Block">
                        <i class="fa fa-edit"></i>
                      </a>

                      <a href="javascript:void(0)" role="button" class="btn btn-sm btn-danger tabs_block_delete_btn" id="tabs_block_delete_btn_<?= $tbd->tb_id ?>" data-toggle="modal" data-target="#tabs_block_confirm_delete" data-record-id="<?= $tbd->tb_id ?>" data-record-title="<?= $tbd->section_slug ?>" title="Delete Tabs block">
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
<div class="modal fade" id="tabs_block_confirm_delete" tabindex="-1" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-dark">
        <h4 class="modal-title" id="tabs_block_confirm_delete_label">Delete Banner</h4>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>

      <div class="modal-body">
        <ul>
          <li>Are you sure you want to delete <span class="text-bold title"></span> tabs block.</li>

          <li>Please note, <span class="text-danger text-bold">this will delete all the tabs of this block</span>.</li>

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