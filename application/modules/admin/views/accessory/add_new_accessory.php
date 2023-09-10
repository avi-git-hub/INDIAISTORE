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
                <h1>Accessories</h1>
            </div>


            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?= base_url('admin/dashboard') ?>">Admin</a></li>
                    <li class="breadcrumb-item"><a href="<?= base_url('admin/accessories') ?>">Manage Accessories</a></li>
                    <li class="breadcrumb-item active">Add New Accessories</li>
                </ol>
            </div>
        </div>
    </div>
</section>


<section class="content">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col">

                <div class="card card-secondary">
                    <div class="card-header">
                        <h3 class="card-title">Add New Accessories</h3>
                    </div>
                </div>

                <form role="form" method="post" enctype="multipart/form-data" autocomplete="off" id="acc_form">
                    <div class="card-body">

                        <section class="section-1">
                            <div class="row">
                                <div class="col">
                                    <h5 class="mb-4">Accessory details</h5>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="acc_name">Accessory Name</label>
                                        <input type="text" maxlength="255" class="form-control" name="acc_name" id="acc_name" value="<?= set_value('acc_name') ?>" placeholder="Enter accessory name">
                                        <div class="error-div"></div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="acc_slug">Accessory Slug</label>
                                        <input type="text" maxlength="255" class="form-control" name="acc_slug" id="acc_slug" value="<?= set_value('acc_slug') ?>" placeholder="Accessory slug">
                                        <div class="error-div"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="acc_name">Accessory Category <small class="text-muted">(Select a category to auto populate attribute)</small></label>
                                        <select class="form-control" name="acc_category" id="acc_category">
                                            <option value="">Select Accessory Category</option>
                                            <?php
                                            foreach ($categories as $category) :
                                                echo "<option value='$category->cat_id'", set_select('acc_category', $category->cat_id), ">$category->cat_name</option>";
                                            endforeach
                                            ?>
                                        </select>
                                        <div class="error-div"></div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="acc_html_classes">Accessory HTML classes</label>
                                        <input type="text" maxlength="100" class="form-control" name="acc_html_classes" id="acc_html_classes" value="<?= set_value('acc_html_classes') ?>" placeholder="Enter comma sperated classes">
                                        <div class="error-div"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="acc_status" class="form-control-label">Status</label>
                                        <div>
                                            <input type="checkbox" name="acc_status" data-bootstrap-switch data-size="large" data-on-color="success" data-off-color="danger" data-on-text="Active" data-off-text="Inactive" value="1" <?= set_checkbox('acc_status', '1', true) ?>>
                                        </div>
                                        <div class="error-div"></div>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="acc_is_new" class="form-control-label">Is New Status</label>
                                        <div>
                                            <input type="checkbox" name="acc_is_new" data-bootstrap-switch data-size="large" data-on-color="success" data-off-color="danger" data-on-text="Yes" data-off-text="No" value="0" <?= set_checkbox('acc_is_new', '1', false) ?>>
                                        </div>
                                        <div class="error-div"></div>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <hr>

                        <section class="section-2">

                            <div class="row section-2-heading">
                                <div class="col">
                                    <h5 class="mb-4">Add colors for accessory with images</h5>
                                </div>
                            </div>

                            <section class="add_color_image_section">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="acc_color_name[1]">Color Name</label>
                                            <input type="text" maxlength="50" name="acc_color_name[1]" placeholder="Enter color name" class="acc_color_name form-control">
                                            <div class="error-div"></div>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="acc_color_hex[1]">Color Hex Code</label>
                                            <input type="text" maxlength="50" name="acc_color_hex[1]" placeholder="Enter hex code for color" class="acc_color_hex form-control">
                                            <div class="error-div"></div>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="acc_color_image[1]">Accessory Color-Image</label>
                                            <div class="custom-file">
                                                <label class="custom-file-label" for="acc_color_image">Choose file</label>
                                                <input type="file" class="acc_color_image custom-file-input" name="acc_color_image_1" value="" accept="image/jpeg, image/png">
                                                <div class="error-div"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="">Status</label>
                                            <div class="form-inline">
                                                <div class="form-group mr-2">
                                                    <input type="checkbox" name="acc_color_status[1]" data-bootstrap-switch data-size="large" data-on-color="success" data-off-color="danger" data-on-text="Active" data-off-text="Inactive" value="1" checked="checked">
                                                    <div class="error-div"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </section>

                        <div class="row">
                            <div class="col">
                                <button class="add-row btn btn-secondary" id="add_new_color"><i class="fa fa-plus"></i> Add New Color</button>
                            </div>
                        </div>


                        <hr>

                        <section class="section-3">

                            <div class="row section-3-heading">
                                <div class="col">
                                    <h5 class="mb-4">Add Attributes</h5>
                                </div>
                            </div>

                            <section class="add_attribute_section">
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="acc_attr_name[1]">Attribute Name</label>
                                            <input type="text" maxlength="50" id="acc_attr_model_name" name="acc_attr_name[1]" placeholder="Enter attribute name" class="acc_attr_name form-control">
                                            <div class="error-div"></div>
                                        </div>
                                    </div>

                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="acc_attr_value[1][]">Attribute Values <small class="text-muted">(Type attribute name and press Enter)</small></label>
                                            <select class="form-control" name="acc_attr_value[1][]" id="acc_attr_model_value" multiple></select>
                                            <div class="error-div"></div>
                                        </div>

                                    </div>
                                </div>
                            </section>
                        </section>

                        <div class="row">
                            <div class="col">
                                <button class="add-attr-row btn btn-secondary" id="add_new_attribute"><i class="fa fa-plus"></i> Add New Attribute</button>
                            </div>
                        </div>


                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary" id="acc_submit" name="acc_submit" value="1">Submit</button>
                    </div>
                </form>

            </div>
        </div>
</section>