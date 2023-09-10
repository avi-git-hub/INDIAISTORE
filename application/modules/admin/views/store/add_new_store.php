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
                <h1>Store</h1>
            </div>


            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Store</a></li>
                    <li class="breadcrumb-item active"><?= isset($store) ? 'Edit Store' : 'Add New Store'; ?>
                    </li>
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
                        <h3 class="card-title"><?= isset($store) ? 'Edit Store' : 'Add New Store'; ?>
                        </h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form role="form" method="post" enctype="multipart/form-data" id="add_new_store_form">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="field_name">Store Name</label>
                                        <input type="text" maxlength="255" autocomplete="field_name" name="field_name" value="<?= isset($store['name']) ? set_value("field_name", $store['name']) : set_value("field_name"); ?>" class="form-control" id="field_name" placeholder="Enter store name">
                                        <?= form_error('field_name', '<span class="error text-danger"><small>', '</small></span>'); ?>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="field_type" class="form-control-label">Store Type</label>
                                        <select id="field_type" name="field_type" class="form-control">
                                            <option value="">Select store type</option>
                                            <option value="apr" <?= isset($store['type']) ? ((strtolower($store['type']) == 'apr') ? 'selected' : '') : ((set_value('field_type') == 'apr') ? 'selected' : ''); ?>>APR
                                            </option>
                                            <option value="aar" <?= isset($store['type']) ? ((strtolower($store['type']) == 'aar') ? 'selected' : '') : ((set_value('field_type') == 'aar') ? 'selected' : ''); ?>>AAR
                                            </option>
                                            <option value="gt aar" <?= isset($store['type']) ? ((strtolower($store['type']) == 'gt aar') ? 'selected' : '') : ((set_value('field_type') == 'gt aar') ? 'selected' : ''); ?>>GT
                                                AAR</option>
                                            <option value="mono aar" <?= isset($store['type']) ? ((strtolower($store['type']) == 'mono aar') ? 'selected' : '') : ((set_value('field_type') == 'mono aar') ? 'selected' : ''); ?>>MONO
                                                AAR</option>
                                            <option value="lfr" <?= isset($store['type']) ? ((strtolower($store['type']) == 'lfr') ? 'selected' : '') : ((set_value('field_type') == 'lfr') ? 'selected' : ''); ?>>LFR</option>
                                            <option value="swc" <?= isset($store['type']) ? ((strtolower($store['type']) == 'swc') ? 'selected' : '') : ((set_value('field_type') == 'swc') ? 'selected' : ''); ?>>SWC</option>
                                            <option value="multi brand" <?= isset($store['type']) ? ((strtolower($store['type']) == 'multi brand') ? 'selected' : '') : ((set_value('field_type') == 'multi brand') ? 'selected' : ''); ?>>MULTI
                                                BRAND</option>
                                        </select>
                                        <?= form_error('field_type', '<span class="error text-danger"><small>', '</small></span>'); ?>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="field_logo">Logo Upload</label>

                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="field_logo" id="field_logo" value="" accept="image/jpeg, image/png">
                                            <label class="custom-file-label" for="field_logo">Choose file</label>
                                        </div>
                                        <small class="form-text text-muted">image dimensions should be (53 x
                                            53)</small>
                                        <?= form_error('field_logo', '<span class="error text-danger"><small>', '</small></span>'); ?>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="field_email">Email</label>
                                        <input type="text" maxlength="50" autocomplete="field_email" name="field_email" value="<?= isset($store['email']) ? set_value("field_email", $store['email']) : set_value("field_email"); ?>" class="form-control" id="field_email" placeholder="Enter email address">
                                        <?= form_error('field_email', '<span class="error text-danger"><small>', '</small></span>'); ?>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="field_phone" class="form-control-label">Phone</label>
                                        <input type="text" maxlength="50" autocomplete="field_phone" name="field_phone" value="<?= isset($store['phone']) ? set_value("field_phone", $store['phone']) : set_value("field_phone"); ?>" class="form-control" id="field_phone" placeholder="Enter phone number">
                                        <?= form_error('field_phone', '<span class="error text-danger"><small>', '</small></span>'); ?>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="field_website">Website</label>
                                        <input type="text" maxlength="100" autocomplete="field_website" name="field_website" value="<?= isset($store['website']) ? set_value("field_website", $store['website']) : set_value("field_website"); ?>" class="form-control" id="field_website" placeholder="Enter website">
                                        <?= form_error('field_website', '<span class="error text-danger"><small>', '</small></span>'); ?>
                                    </div>
                                </div>
                            </div>

                            <div class="row">

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="field_state" class="form-control-label">State</label>
                                        <select id="field_state" name="field_state" class="form-control">
                                            <option value="">Select State</option>
                                            <?php foreach ($state_options as $s) : ?>
                                                <option value="<?= $s->id ?>" <?= isset($store['state_id']) ? (($store['state_id'] == $s->id) ? 'selected' : '') : ((set_value('field_state') == $s->id) ? 'selected' : ''); ?>><?= $s->name ?>
                                                </option>
                                            <?php endforeach; ?>
                                        </select>
                                        <!-- <input type="text" maxlength="50" autocomplete="field_state" name="field_state" value="<? // isset($store['state']) ? set_value("field_state", $store['state']) : set_value("field_state"); 
                                                                                                                                    ?>" class="form-control"  id="field_state" placeholder="Enter state"> -->
                                        <?= form_error('field_state', '<span class="error text-danger"><small>', '</small></span>'); ?>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="field_city">City</label>
                                        <select id="field_city" name="field_city" class="form-control">
                                            <?php
                                            if (isset($store['city_id'])) :
                                                echo "<option value='" . set_value('field_city', $store['city_id']) . "' selected>Select City</option>";
                                            else :
                                                echo "<option value='" . set_value('field_city') . "' selected>Select City</option>";
                                            endif;
                                            ?>
                                        </select>
                                        <!-- <input type="text" maxlength="100" autocomplete="field_city" name="field_city" value="<? // isset($store['city']) ? set_value("field_city", $store['city']) : set_value("field_city"); 
                                                                                                                                    ?>" class="form-control" id="field_city" placeholder="Enter city"> -->
                                        <?= form_error('field_city', '<span class="error text-danger"><small>', '</small></span>'); ?>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="field_pincode" class="form-control-label">Pincode</label>
                                        <input type="text" minlength="6" maxlength="6" autocomplete="field_pincode" name="field_pincode" value="<?= isset($store['pincode']) ? set_value("field_pincode", $store['pincode']) : set_value("field_pincode"); ?>" class="form-control" id="field_pincode" placeholder="Enter pincode">
                                        <?= form_error('field_pincode', '<span class="error text-danger"><small>', '</small></span>'); ?>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-8">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="field_lat">Latitude</label>
                                                <input type="text" maxlength="45" autocomplete="field_lat" name="field_lat" value="<?= isset($store['lat']) ? set_value("field_lat", $store['lat']) : set_value("field_lat"); ?>" class="form-control" id="field_lat" placeholder="Enter latitude">
                                                <?= form_error('field_lat', '<span class="error text-danger"><small>', '</small></span>'); ?>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="field_lng" class="form-control-label">Longitude</label>
                                                <input type="text" maxlength="45" autocomplete="field_lng" name="field_lng" value="<?= isset($store['lng']) ? set_value("field_lng", $store['lng']) : set_value("field_lng"); ?>" class="form-control" id="field_lng" placeholder="Enter longitude">
                                                <?= form_error('field_lng', '<span class="error text-danger"><small>', '</small></span>'); ?>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label for="field_address">Address</label>
                                                <textarea maxlength="1000" class="form-control" name="field_address" id="field_address" rows="4" placeholder="Enter full address"><?= isset($store['address']) ? set_value("field_address", $store['address']) : set_value("field_address"); ?></textarea>
                                                <?= form_error('field_address', '<span class="error text-danger"><small>', '</small></span>'); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 text-center text-sm-left">
                                    <div class="form-group d-inline-block">
                                        <label for="field_is_open" class="form-control-label">Is Open</label>

                                        <div>
                                            <input type="checkbox" name="field_is_open" data-bootstrap-switch data-size="large" data-on-color="success" data-off-color="danger" data-on-text="Yes" data-off-text="No" value="1" <?= set_checkbox('field_is_open', '1', true) ?>>
                                        </div>

                                        <?= form_error('field_is_open', '<span class="error text-danger"><small>', '</small></span>'); ?>
                                    </div>

                                    <div class="form-group ml-3 d-inline-block">
                                        <label for="field_is_delivering" class="form-control-label">Is Delivering</label>

                                        <div>
                                            <input type="checkbox" name="field_is_delivering" data-bootstrap-switch data-size="large" data-on-color="success" data-off-color="danger" data-on-text="Yes" data-off-text="No" value="1" <?= set_checkbox('field_is_delivering', '1', true) ?>>
                                        </div>

                                        <?= form_error('field_is_delivering', '<span class="error text-danger"><small>', '</small></span>'); ?>
                                    </div>


                                    <div class="form-group ml-3 d-inline-block">
                                        <label for="field_status" class="form-control-label">Status</label>

                                        <div>
                                            <input type="checkbox" name="field_status" data-bootstrap-switch data-size="large" data-on-color="success" data-off-color="danger" data-on-text="Active" data-off-text="Inactive" value="1" <?= set_checkbox('field_status', '1', true) ?>>
                                        </div>

                                        <?= form_error('field_status', '<span class="error text-danger"><small>', '</small></span>'); ?>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary" id="add_new_store_submit" name="add_new_store_submit" value="1">Submit</button>
                        </div>
                    </form>
                </div>
                <!-- /.card -->

            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
</section>