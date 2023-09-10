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
                <h1>Edit Route</h1>
            </div>


            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?= base_url('admin/dashboard') ?>">Admin</a></li>
                    <li class="breadcrumb-item"><a href="<?= base_url("admin/routes") ?>">Manage Routes</a></li>
                    <li class="breadcrumb-item active">Edit Route</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>


<section class="content">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col">
                <!-- general form elements -->
                <div class="card card-secondary">
                    <div class="card-header">
                        <h3 class="card-title">Edit</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form role="form" method="post" id="add_new_nav_section_form">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="route_name">Route Name</label>

                                        <input type="text" maxlength="100" class="form-control" name="route_name" id="route_name" value="<?= set_value('route_name', $route->name); ?>" placeholder="Enter unique route name" />

                                        <?= form_error('route_name', '<span class="error text-danger"><small>', '</small></span>'); ?>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="route_slug">Route Slug</label>

                                        <input type="text" maxlength="100" class="form-control" name="route_slug" id="route_slug" value="<?= set_value('route_slug', $route->slug); ?>" placeholder="Router slug">

                                        <?= form_error('route_slug', '<span class="error text-danger"><small>', '</small></span>'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="route_controller">Route Controller Name</label>

                                        <input type="text" maxlength="100" class="form-control" name="route_controller" id="route_controller" value="<?= set_value('route_controller', $route->controller); ?>" placeholder="Enter controller name">

                                        <?= form_error('route_controller', '<span class="error text-danger"><small>', '</small></span>'); ?>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="route_status">Select Status</label>
                                        <div>
                                            <input type="checkbox" name="route_status" data-bootstrap-switch data-size="large" data-on-color="success" data-off-color="danger" data-on-text="Active" data-off-text="Inactive" value="<?= set_value('route_status', $route->status); ?>" <?= set_checkbox('route_status', set_value('route_status', $route->status), ($route->status == '1') ? true : false) ?>>
                                        </div>
                                        <?= form_error('route_status', '<span class="error text-danger"><small>', '</small></span>'); ?>
                                    </div>
                                </div>
                            </div>

                            <hr>

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="route_title">Page Title</label>

                                        <input type="text" class="form-control" placeholder="Enter page title" name="route_title" id="route_title" value="<?= set_value('route_title', $route->page_title); ?>">

                                        <?= form_error('route_title', '<span class="error text-danger"><small>', '</small></span>'); ?>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="route_keywords">Page Meta Keywords</label>
                                        <div>
                                            <input type="text" class="form-control" name="route_keywords" id="route_keywords" value="<?= set_value('route_keywords', $route->page_meta_keywords); ?>" placeholder="Enter comma separated keywords">
                                        </div>
                                        <?= form_error('route_keywords', '<span class="error text-danger"><small>', '</small></span>'); ?>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="route_description">Page Meta Description</label>
                                        <textarea class="form-control" name="route_description" id="route_description" rows="5" placeholder="Enter page meta description"><?= isset($route->page_meta_description) ? set_value("route_description", $route->page_meta_description) : set_value("route_description"); ?></textarea>
                                        <?= form_error('route_description', '<span class="error text-danger"><small>', '</small></span>'); ?>
                                    </div>
                                </div>
                            </div>

                            <hr>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="route_header_gtag">GTag Script (Header)</label>

                                        <textarea class="form-control wysiwyg" rows="5" name="route_header_gtag" id="route_header_gtag" placeholder="Enter the custom script for gtag in header"><?= isset($route->gtags_header) ? set_value("route_header_gtag", base64_decode($route->gtags_header)) : set_value("route_header_gtag"); ?></textarea>

                                        <?= form_error('route_header_gtag', '<span class="error text-danger"><small>', '</small></span>') ?>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="route_body_start_gtag">GTag Script (After Body Start)</label>

                                        <textarea class="form-control wysiwyg" rows="5" name="route_body_start_gtag" id="route_body_start_gtag" placeholder="Enter the custom script for gtag after body start"><?= isset($route->gtags_body_start) ? set_value("route_body_start_gtag", base64_decode($route->gtags_body_start)) : set_value("route_body_start_gtag"); ?></textarea>

                                        <?= form_error('route_body_start_gtag', '<span class="error text-danger"><small>', '</small></span>') ?>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="route_body_end_gtag">GTag Script (Before Body End)</label>

                                        <textarea class="form-control wysiwyg" rows="5" name="route_body_end_gtag" id="route_body_end_gtag" placeholder="Enter the custom script for gtag before body end"><?= isset($route->gtags_body_end) ? set_value("route_body_end_gtag", base64_decode($route->gtags_body_end)) : set_value("route_body_end_gtag"); ?></textarea>

                                        <?= form_error('route_body_end_gtag', '<span class="error text-danger"><small>', '</small></span>') ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary" id="add_new_route_submit">Submit</button>
                        </div>
                    </form>
                </div>
                <!-- /.card -->

            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
</section>