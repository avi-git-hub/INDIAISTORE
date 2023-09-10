<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">

    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Partner</h1>
      </div>


      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="<?= base_url('admin/dashboard') ?>">Admin</a></li>
          <li class="breadcrumb-item"><a href="<?= base_url('admin/partners') ?>">Partners</a></li>
          <li class="breadcrumb-item active">Edit Partner</li>
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
            <h3 class="card-title">Edit Partner</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form role="form" method="post" enctype="multipart/form-data" id="partner_form">
            <div class="alert with-close alert-dismissible fade show d-none mt-2">
              <button type="button" class="close" data-dismiss="alert">×</button>
            </div>
            <div class="card-body">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="partner_name">Partner Name</label>
                      <input type="hidden" name="partner_id" id="partner_id" value="<?= $partner->id ?>">
                      <input type="text" required maxlength="100" minlength="1" autocomplete="off" name="partner_name" value="<?= set_value('partner_name', $partner->name) ?>" class="form-control" id="partner_name" placeholder="Enter partner name">
                      <div class="error-div"></div>
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="partner_reseller" class="form-control-label">Store Type</label>
                      <?php
                      $partner_type_list = [
                        '' => 'Select Store Type',
                        'apr' => 'APR',
                        'lfr' => 'LFR',
                        'swc' => 'SWC',
                        'aar' => 'AAR',
                        'online' => 'ONLINE',
                        'gt aar' => 'GT AAR'
                      ];
                      echo form_dropdown('partner_reseller', $partner_type_list, set_value('partner_type', $partner->reseller), ['class' => 'form-control', 'id' => 'partner_reseller']);
                      ?>
                      <div class="error-div"></div>
                    </div>
                  </div>
                </div>

                <div class="row">

                  <div class="col-md-6">
                    <div class="form-group">

                      <?php
                      $image_present = false;
                      if (in_array($partner->logo, ['', null])) :
                        echo '<a href="javascript:void(0)" class="float-right text-danger"><strong>File Not Found!</strong></a>';
                      else :
                        echo '<a href="', base_url("files/uploads/partners/$partner->logo"), '" target="_blank" class="float-right text-success" download><strong>Download/Backup</strong></a>';
                        $image_present = true;
                      endif;
                      ?>
                      <label for="partner_logo">Logo Upload (Circular)</label>

                      <div class="custom-file">
                        <input type="file" class="custom-file-input" name="partner_logo" id="partner_logo" value="" accept="image/jpeg, image/png" value="" <?= ($image_present) ? '' : ' required'; ?>>
                        <label class="custom-file-label" for="partner_logo">Choose file</label>
                      </div>
                      <small class="form-text text-muted">image dimensions should be (53 x
                        53)</small>
                      <div class="error-div"></div>
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group">

                      <?php
                      //if (!empty($partner->is_premium)) :
                      if (in_array($partner->logo_rectangular, ['', null])) :
                        echo '<a href="javascript:void(0)" class="float-right text-danger"><strong>File Not Found!</strong></a>';
                      else :
                        echo '<a href="', base_url("files/uploads/partners/$partner->logo_rectangular"), '" target="_blank" class="float-right text-success" download><strong>Download/Backup</strong></a>';
                      endif;
                      //endif;
                      ?>

                      <label for="partner_logo_rec">Logo Upload (Rectangular)</label>

                      <div class="custom-file">
                        <input type="file" class="custom-file-input" name="partner_logo_rec" id="partner_logo_rec" value="" accept="image/jpeg, image/png">
                        <label class="custom-file-label" for="partner_logo_rec">Choose file</label>
                      </div>
                      <small class="form-text text-muted">image dimensions should be (53 x 53)</small>
                      <div class="error-div"></div>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="partner_website" class="form-control-label">Website</label>
                      <input type="text" id="partner_website" name="partner_website" class="form-control" value="<?= set_value('partner_website', $partner->website) ?>" placeholder="Enter website" />
                      <div class="error-div"></div>
                    </div>
                  </div>


                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="partner_phone" class="form-control-label">Phone</label>
                      <input type="text" id="partner_phone" name="partner_phone" class="form-control" value="<?= set_value('partner_phone', $partner->phone) ?>" placeholder="Enter contact number" />
                      <div class="error-div"></div>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="partner_status" class="form-control-label">Status</label>

                      <div>
                        <input type="checkbox" name="partner_status" id="partner_status" data-bootstrap-switch data-size="large" data-on-color="success" data-off-color="danger" data-on-text="Active" data-off-text="InActive" value="<?= set_value('partner_status', $partner->status); ?>" <?= set_checkbox('partner_status', set_value('partner_status', $partner->status), ($partner->status == '1') ? true : false) ?>>
                      </div>

                      <div class="error-div"></div>

                    </div>
                  </div>

                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="partner_is_premium" class="form-control-label">Is Premium Reseller</label>

                      <div>
                        <input type="checkbox" name="partner_is_premium" id="partner_is_premium" data-bootstrap-switch data-size="large" data-on-text="Yes" data-off-text="No" value="<?= set_value('partner_is_premium', $partner->is_premium); ?>" <?= set_checkbox('partner_is_premium', $partner->is_premium, ($partner->is_premium == 1) ? true : false) ?>>
                      </div>

                      <div class="error-div"></div>

                    </div>
                  </div>

                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="partner_is_online" class="form-control-label">Is Online Store</label>

                      <div>
                        <input type="checkbox" name="partner_is_online" id="partner_is_online" data-bootstrap-switch data-size="large" data-on-text="Yes" data-off-text="No" value="<?= set_value('partner_is_online', $partner->is_online); ?>" <?= set_checkbox('partner_is_online', $partner->is_online, ($partner->is_online == 1) ? true : false) ?>>
                      </div>

                      <div class="error-div"></div>

                    </div>
                  </div>

                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="partner_is_pan_india" class="form-control-label">Is Pan India</label>

                      <div>
                        <input type="checkbox" name="partner_is_pan_india" id="partner_is_pan_india" data-bootstrap-switch data-size="large" data-on-text="Yes" data-off-text="No" value="<?= set_value('partner_is_pan_india', ($partner->available_in == 'all') ? 1 : 0); ?>" <?= set_checkbox('partner_is_pan_india', set_value('partner_is_pan_india', ($partner->available_in == 'all' ? 1 : 0)), ($partner->available_in == 'all') ? true : false) ?>>
                      </div>

                      <div class="error-div"></div>

                    </div>
                  </div>
                </div>

                <div id="state_city_row" class="row mt-4" <?= ($partner->available_in == 'all') ? 'style="display:none;"' : '' ?>>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="partner_states">Available In States</label>
                      <select class="form-control select2bs4" name="partner_states[]" id="partner_states" multiple="multiple" data-placeholder="Select states">
                        <?php
                        foreach ($states as $state) :
                          echo "<option value='$state->id' " . (in_array($state->id, $s_states) ? 'selected' : '') . ">$state->name</option>";
                        endforeach;
                        ?>
                      </select>
                      <div class="error-div"></div>

                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="partner_cities">Available In Cities</label>
                      <select class="form-control select2bs4" name="partner_cities[]" id="partner_cities" multiple="multiple" data-placeholder="Select cities">
                        <?php
                        foreach ($cities as $city) :
                          echo "<option value='$city->id' " . (in_array($city->id, $s_cities) ? 'selected' : '') . ">$city->name</option>";
                        endforeach;
                        ?>
                      </select>
                      <div class="error-div"></div>

                    </div>
                  </div>
                </div>

                <hr>

                <div class="row">
                  <div class="col">
                    <h5>Adding Products for Partners with Links</h5>
                  </div>
                </div>
                <div class="row justify-content-around">
                  <div class="col-md-5">
                    <div class="form-group">
                      <!-- <label for="partner_product">Select Product</label> -->
                      <select class="form-control select2bs4" id="partner_product" name="partner_product" data-placeholder="Select product">
                        <option value=''>Select product</option>
                        <?php
                        foreach ($products as $product) :
                          echo "<option value='$product->prod_id'>$product->prod_name</option>";
                        endforeach;
                        ?>
                      </select>
                      <div class="error-div"></div>
                    </div>
                  </div>
                  <div class="col-10 col-md-5">
                    <div class="form-group">
                      <!-- <label for="partner_product_link">Select Product Link</label> -->
                      <input type="text" maxlength="255" id="partner_product_link" placeholder="Enter Product Link" class="form-control">
                    </div>
                  </div>
                  <div class="col-2">
                    <button class="add-row btn btn-primary w-100">Add
                      New</button>
                  </div>
                </div>
                <div class="row mt-3">
                  <div class="col-12">
                    <table class="table table-bordered table-striped table-hover">
                      <thead>
                        <tr>
                          <th>Id</th>
                          <th>Product Name</th>
                          <th>Landing Page</th>
                          <th>Delete</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php foreach ($partner_products as $pp) : ?>
                          <tr>
                            <td><?= $pp->product_id ?>
                            </td>
                            <td><?= $pp->p_name ?>
                            </td>
                            <td><?= $pp->landing_page ?>
                            </td>
                            <td><a href="javascript:void(0)" role="button" data-record-id="<?= $pp->product_id ?>" class="text-danger delete-row">
                                <i class="fa fa-trash"></i>
                              </a></td>
                          </tr>
                        <?php endforeach; ?>
                      </tbody>
                    </table>
                  </div>

                </div>
              </div>

            </div>
            <!-- /.card-body -->

            <div class="card-footer">
              <button type="submit" class="btn btn-primary" id="partner_submit" name="partner_submit" value="1">Submit</button>
            </div>
          </form>
        </div>
        <!-- /.card -->

      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
</section>