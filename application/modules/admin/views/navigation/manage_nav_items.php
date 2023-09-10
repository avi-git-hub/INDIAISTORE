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

                    <li class="breadcrumb-item"><a href="<?= base_url('admin/navigation/sections') ?>">Navigation sections</a></li>

                    <li class="breadcrumb-item active"><?= $nav_section->slug ?></li>
                </ol>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <h1>Navigation Items</h1>
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

                        <a href="<?= base_url("admin/navigation/section/$nav_section_id/edit-display-order"); ?>" role="button" class="btn btn-info btn-sm" title="Edit display order of the nav items">
                            <i class="fa fa-sort"></i> Edit Order
                        </a>
                    </div>
                </div>
                <!-- /.card-header -->

                <div class="card-body">
                    <table id="nav_items_table" class="table table-bordered table-striped text-center">
                        <thead>
                            <tr>
                                <th>Item Name</th>
                                <th>Item Slug</th>
                                <th>Item Controller</th>
                                <th>Page Title</th>
                                <th>Page Meta Keywords</th>
                                <th>Page Meta Description</th>
                                <th>Status</th>
                                <th><i class="fa fa-cog"></i></th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php if (!empty($nav_items)) : ?>
                                <?php foreach ($nav_items as $item) : ?>
                                    <tr>
                                        <td><?= $item->name ?></td>
                                        <td><?= $item->slug ?></td>
                                        <td><?= $item->controller ?></td>
                                        <td><?= $item->page_title ?></td>
                                        <td><?= $item->page_meta_keywords ?></td>
                                        <td><?= $item->page_meta_description ?></td>

                                        <td>
                                            <h4 class="text-center m-0" title="Active">
                                                <span class="badge badge-pill badge-<?= ($item->status == 1) ? 'success' : 'danger' ?>">&nbsp;</span>
                                            </h4>
                                        </td>


                                        <td class="text-center m-0">
                                            <a href="<?= base_url("admin/navigation/section/$nav_section_id/edit/$item->route_id"); ?>" target="_self" role="button" class="btn btn-dark btn-sm" title="Edit navigation section">
                                                <i class="fa fa-edit"></i>
                                            </a>

                                            <a href="javascript:void(0)" role="button" class="btn btn-sm btn-danger nav_section_delete_btn" id="nav_section_delete_btn_<?= $item->id ?>" data-record-id="<?= $item->id ?>" data-section-id="<?= $nav_section_id ?>" data-record-title="<?= $item->slug ?>" data-toggle="modal" data-target="#nav_item_confirm_delete" title="Delete this Navigation Item">
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
<div class="modal fade" id="nav_item_confirm_delete" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-dark">
                <h4 class="modal-title" id="nav_item_confirm_delete_label">Delete Navigation Item</h4>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>

            <div class="modal-body">
                <ul>
                    <li>Are you sure you want to delete <span class="text-bold title"></span> navigation item.</li>
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