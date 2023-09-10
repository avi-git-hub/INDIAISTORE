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
                    <li class="breadcrumb-item active">Manage Accessories</li>
                </ol>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <h1>Accessories</h1>
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

                        <a href="<?= base_url("admin/accessory/add-new"); ?>" role="button" class="btn btn-info btn-sm" title="Edit display order of the accesories">
                            <i class="fa fa-sort"></i> Add New
                        </a>
                    </div>
                </div>
                <!-- /.card-header -->

                <div class="card-body">
                    <table id="acc_table" class="table table-bordered table-striped text-center">
                        <thead>
                            <tr>
                                <th>Category Name</th>
                                <th>Accessory Name</th>
                                <th>Accessory Slug</th>
                                <th>Status</th>
                                <th><i class="fa fa-cog"></i></th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php if (!empty($accessories)) : ?>
                                <?php foreach ($accessories as $acc) : ?>
                                    <tr>
                                        <td><?= $acc->cat_name ?></td>
                                        <td><?= $acc->name ?></td>
                                        <td><?= $acc->slug ?></td>
                                        <td>
                                            <h4 class="text-center m-0" title="Active">
                                                <span class="badge badge-pill badge-<?= ($acc->status == 1) ? 'success' : 'danger' ?>">&nbsp;</span>
                                            </h4>
                                        </td>


                                        <td class="text-center m-0">
                                            <a href="<?= base_url("admin/accessory/$acc->id/edit"); ?>" target="_self" role="button" class="btn btn-dark btn-sm" title="Edit Accessory">
                                                <i class="fa fa-edit"></i>
                                            </a>

                                            <a href="javascript:void(0)" role="button" class="btn btn-sm btn-danger acc_delete_btn" id="acc_delete_btn_<?= $acc->id ?>" data-record-id="<?= $acc->id ?>" data-toggle="modal" data-target="#acc_confirm_delete" title="Delete this Accessory">
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
<div class="modal fade" id="acc_confirm_delete" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-dark">
                <h4 class="modal-title" id="acc_confirm_delete_label">Delete Accessory</h4>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>

            <div class="modal-body">
                <ul>
                    <li>Are you sure you want to delete <span class="text-bold title"></span>this accessory.</li>
                    <li>Please note, <span class="text-danger text-bold">this will delete all the variations related to this accessory.</span></li>
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