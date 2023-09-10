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
                <h1>Add New Navigation Item</h1>
            </div>


            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?= base_url('admin/dashboard') ?>">Admin</a></li>
                    <li class="breadcrumb-item"><a href="<?= base_url('admin/navigation/sections') ?>">Navigation Sections</a></li>
                    <li class="breadcrumb-item"><a href="<?= base_url("admin/navigation/section/$nav_section_id") ?>"><?= $nav_section->slug ?></a></li>
                    <li class="breadcrumb-item active">Add New</li>
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
                        <h3 class="card-title">Add New</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form role="form" method="post" id="add_new_nav_section_form">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="nav_item_name">Nav Section Name</label>

                                        <input type="text" maxlength="100" class="form-control" name="nav_item_name" id="nav_item_name" value="<?= set_value('nav_item_name'); ?>" placeholder="Enter unique navigation section name" />

                                        <?= form_error('nav_item_name', '<span class="error text-danger"><small>', '</small></span>'); ?>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="nav_item_slug">Nav Section Slug</label>

                                        <input type="text" maxlength="100" class="form-control" name="nav_item_slug" id="nav_item_slug" value="<?= set_value('nav_item_slug'); ?>" placeholder="Navigation section slug" readonly />

                                        <?= form_error('nav_item_slug', '<span class="error text-danger"><small>', '</small></span>'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="row">

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="nav_item_section">Select Navigation Section</label>

                                        <select class="form-control" name="nav_item_section" id="nav_item_section">
                                            <option value="">NONE</option>
                                            <?php foreach ($nav_sections as $section) : ?>
                                                <?= "<option value='$section->id'" . (($section->id == $nav_section_id) ? 'selected' : '') . ">$section->name</option>" ?>
                                            <?php endforeach ?>
                                        </select>
                                        <?= form_error('nav_item_section', '<span class="error text-danger"><small>', '</small></span>'); ?>
                                    </div>
                                </div>

                                <div class="col-sm-6">

                                    <div class="form-group">
                                        <label for="nav_routes">Select Routes</label>
                                        <select class="form-control select2bs4" name="nav_routes[]" id="nav_routes" multiple="multiple" data-placeholder="Select routes">
                                            <?php
                                            foreach ($routes as $route) :
                                                echo "<option value='$route->id'>$route->slug</option>";
                                            endforeach;

                                            ?>
                                        </select>
                                        <div class="error-div"></div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="nav_section_status">Select Status</label>
                                        <div>
                                            <input type="checkbox" name="nav_section_status" data-bootstrap-switch data-size="large" data-on-color="success" data-off-color="danger" data-on-text="Active" data-off-text="Inactive" value="1" <?= set_checkbox('nav_section_status', '1', true) ?>>
                                        </div>
                                        <?= form_error('nav_section_status', '<span class="error text-danger"><small>', '</small></span>'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary" id="add_new_nav_submit">Submit</button>
                        </div>
                    </form>
                </div>
                <!-- /.card -->

            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
</section>