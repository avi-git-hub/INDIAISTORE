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

                    <li class="breadcrumb-item active">Navigation Sections</li>
                </ol>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <h1>Navigation Sections</h1>
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
                        <a href="<?= base_url('admin/navigation/section/add-new') ?>" role="button" class="btn btn-success btn-sm">
                            <i class="fa fa-plus"></i> Add New
                        </a>
                    </div>
                </div>
                <!-- /.card-header -->

                <div class="card-body">
                    <table id="nav_section_table" class="table table-bordered table-striped text-center">
                        <thead>
                            <tr>
                                <th>Section Name</th>

                                <th>Section Slug</th>

                                <th>Status</th>

                                <!-- <th>Created</th>

                                <th>Updated</th> -->

                                <th><i class="fa fa-cog"></i></th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php if (!empty($nav_sections)) : ?>
                                <?php foreach ($nav_sections as $nav_section) : ?>
                                    <tr>
                                        <td><?= $nav_section->name ?></td>

                                        <td><?= $nav_section->slug ?></td>

                                        <td>
                                            <h4 class="text-center m-0" title="Active">
                                                <span class="badge badge-pill badge-<?= ($nav_section->status == 1) ? 'success' : 'danger' ?>">&nbsp;</span>
                                            </h4>
                                        </td>

                                        <!-- <td><?= $nav_section->created_at ?></td> -->

                                        <!-- <td><?= is_null($nav_section->updated_at) ? '-' : $nav_section->updated_at ?></td> -->

                                        <td class="text-center m-0">
                                            <a href="<?= base_url("admin/navigation/section/$nav_section->id/edit"); ?>" target="_self" role="button" class="btn btn-dark btn-sm" title="Edit navigation section">
                                                <i class="fa fa-edit"></i>
                                            </a>

                                            <a href="<?= base_url("admin/navigation/section/$nav_section->id"); ?>" target="_self" role="button" class="btn btn-outline-dark btn-sm" title="List navigation items for this section">
                                                <i class="fa fa-list"></i>
                                            </a>

                                            <a href="javascript:void(0)" role="button" class="btn btn-sm btn-danger nav_section_delete_btn" id="nav_section_delete_btn_<?= $nav_section->id ?>" data-record-id="<?= $nav_section->id ?>" data-record-title="<?= $nav_section->slug ?>" data-toggle="modal" data-target="#nav_section_confirm_delete" title="Delete this Navigation section">
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
<div class="modal fade" id="nav_section_confirm_delete" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-dark">
                <h4 class="modal-title" id="nav_section_confirm_delete_label">Delete Navigation Section</h4>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>

            <div class="modal-body">
                <ul>
                    <li>Are you sure you want to delete <span class="text-bold title"></span> navigation section.</li>

                    <li>Please note, <span class="text-danger text-bold">this will delete all the navigation items under this section.</span></li>

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