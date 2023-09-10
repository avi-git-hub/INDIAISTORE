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
                <h1>Edit Navigation Section</h1>
            </div>


            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?= base_url('admin/dashboard') ?>">Admin</a></li>
                    <li class="breadcrumb-item"><a href="<?= base_url('admin/navigation/sections') ?>">Navigation Sections</a></li>
                    <li class="breadcrumb-item active"><?= $nav_section->slug ?></li>
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
                                        <label for="nav_section_name">Nav Section Name</label>

                                        <input type="text" maxlength="100" class="form-control" name="nav_section_name" id="nav_section_name" value="<?= set_value('nav_section_name', $nav_section->name); ?>" placeholder="Enter unique navigation section name" />

                                        <?= form_error('nav_section_name', '<span class="error text-danger"><small>', '</small></span>'); ?>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="nav_section_slug">Nav Section Slug</label>

                                        <input type="text" maxlength="100" class="form-control" name="nav_section_slug" id="nav_section_slug" value="<?= set_value('nav_section_slug', $nav_section->slug); ?>" placeholder="Navigation section slug" readonly />

                                        <?= form_error('nav_section_slug', '<span class="error text-danger"><small>', '</small></span>'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="nav_items">Select Navigation Items</label>
                                        <select class="form-control select2bs4" name="nav_items[]" id="nav_items" multiple="multiple" data-placeholder="Select Navigation Items" required>
                                            <?php
                                            foreach ($routes as $route) :
                                                echo "<option value='$route->id' " . (in_array($route->id, $route_ids) ? 'selected' : '') . ">$route->slug</option>";
                                            endforeach;
                                            ?>
                                        </select>
                                        <?= form_error('nav_items[]', '<span class="error text-danger"><small>', '</small></span>'); ?>

                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="nav_section_status">Select Status</label>
                                        <div>
                                            <input type="checkbox" name="nav_section_status" data-bootstrap-switch data-size="large" data-on-color="success" data-off-color="danger" data-on-text="Active" data-off-text="Inactive" value="<?= set_value('nav_section_status', $nav_section->status); ?>" <?= set_checkbox('nav_section_status', set_value('nav_section_status', $nav_section->status), ($nav_section->status == '1') ? true : false) ?>>
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