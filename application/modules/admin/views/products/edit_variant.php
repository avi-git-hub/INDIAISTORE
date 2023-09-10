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

          <li class="breadcrumb-item"><a href="<?= base_url('admin/products') ?>">Products</a></li>

          <li class="breadcrumb-item"><a href="<?= base_url("admin/product/$product->prod_id/variants") ?>"><?= $product->prod_name ?> Variants</a></li>

          <li class="breadcrumb-item active">Edit Product Variant</li>
        </ol>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-12">
        <h1>Edit Product Variant</h1>
      </div>
    </div>
  </div>
  <!-- /.container-fluid -->
</section>

<section class="content">
  <div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col">
        <!-- general form elements -->
        <div class="card">
          <div class="card-header bg-dark">
            <h3 class="card-title">Edit</h3>
          </div>
          <!-- /.card-header -->

          <!-- form start -->
          <form role="form" method="post" enctype="multipart/form-data" autocomplete="off">
            <input type="hidden" name="product_id" value="<?= $product_variant->prod_id ?>" />

            <div class="card-body">
              <div class="row">
                <div class="col-sm-4">
                  <div class="form-group">
                    <label for="product">Product</label>

                    <input type="text" class="form-control" name="product" id="product" value="<?= set_value('product', $product->prod_name) ?>" placeholder="Parent Product" readonly />

                    <?= form_error('product', '<span class="error text-danger"><small>', '</small></span>') ?>
                  </div>
                </div>

                <?php if (isset($selected_features_data['product-color'])) : ?>
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label for="product_color">Product Color</label>

                      <select class="form-control for_slug" name="product_color" id="product_color">
                        <option value="">Select Product Color</option>
                        <?php
                        foreach ($selected_features_data['product-color'] as $color) :
                          echo "<option value='$color->feat_slug'", set_select('product_color', $color->feat_slug, (($color->feat_slug == $product_variant->prod_color) ? true : false)), ">$color->feat_title</option>";
                        endforeach
                        ?>
                      </select>

                      <?= form_error('product_color', '<span class="error text-danger"><small>', '</small></span>') ?>
                    </div>
                  </div>
                <?php endif ?>

                <?php if (isset($selected_features_data['storage-space'])) : ?>
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label for="product_storage">Product Storage</label>

                      <select class="form-control for_slug" name="product_storage" id="product_storage">
                        <option value="">Select Product Storage</option>
                        <?php
                        foreach ($selected_features_data['storage-space'] as $storage_space) :
                          echo "<option value='$storage_space->feat_slug'", set_select('product_storage', $storage_space->feat_slug, (($storage_space->feat_slug == $product_variant->prod_storage) ? true : false)), ">$storage_space->feat_title</option>";
                        endforeach
                        ?>
                      </select>

                      <?= form_error('product_storage', '<span class="error text-danger"><small>', '</small></span>') ?>
                    </div>
                  </div>
                <?php endif ?>

                <?php if (isset($selected_features_data['screen-size'])) : ?>
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label for="product_screen_size">Product Screen Size</label>

                      <select class="form-control for_slug" name="product_screen_size" id="product_screen_size">
                        <option value="">Select Screen Size</option>
                        <?php
                        foreach ($selected_features_data['screen-size'] as $screen_size) :
                          echo "<option value='$screen_size->feat_slug'", set_select('product_screen_size', $storage_space->feat_slug, (($storage_space->feat_slug == $product_variant->prod_screen_size) ? true : false)), ">$screen_size->feat_title</option>";
                        endforeach
                        ?>
                      </select>

                      <?= form_error('product_screen_size', '<span class="error text-danger"><small>', '</small></span>') ?>
                    </div>
                  </div>
                <?php endif ?>

                <?php if (isset($selected_features_data['processor'])) : ?>
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label for="product_processor">Product Processor</label>

                      <select class="form-control for_slug" name="product_processor" id="product_processor">
                        <option value="">Select Product Processor</option>
                        <?php
                        foreach ($selected_features_data['processor'] as $processor) :
                          echo "<option value='$processor->feat_slug'", set_select('product_processor', $processor->feat_slug, (($processor->feat_slug == $product_variant->prod_processor) ? true : false)), ">$processor->feat_title</option>";
                        endforeach
                        ?>
                      </select>

                      <?= form_error('product_processor', '<span class="error text-danger"><small>', '</small></span>') ?>
                    </div>
                  </div>
                <?php endif ?>
              </div>

              <div class="row">
                <div class="col-sm-8">
                  <div class="form-group">
                    <label for="product_slug">Variant Slug</label>

                    <input type="text" class="form-control" name="product_variant_slug" id="product_variant_slug" value="<?= set_value('product_variant_slug', $product_variant->prod_variant_slug) ?>" placeholder="Variant Slug" readonly />

                    <?= form_error('product_variant_slug', '<span class="error text-danger"><small>', '</small></span>') ?>
                  </div>
                </div>

                <div class="col-sm-4">
                  <div class="form-group">
                    <label for="product_variant_status">Status</label>

                    <div>
                      <input type="checkbox" name="product_variant_status" data-bootstrap-switch data-size="large" data-on-color="success" data-off-color="danger" data-on-text="Active" data-off-text="Inactive" value="<?= set_value('product_status', $product_variant->status); ?>" <?= set_checkbox('product_status', set_value('product_status', $product_variant->status), ($product_variant->status == '1') ? true : false) ?>>
                    </div>

                    <?= form_error('product_variant_status', '<span class="error text-danger"><small>', '</small></span>') ?>
                  </div>
                </div>
              </div>

              <hr>

              <div class="row">
                <div class="col-sm-4">
                  <div class="form-group">
                    <label for="product_mrp">MRP</label>

                    <input type="number" class="form-control" name="product_mrp" id="product_mrp" value="<?= set_value('product_mrp', $product_variant->prod_mrp) ?>" placeholder="MRP" />

                    <?= form_error('product_mrp', '<span class="error text-danger"><small>', '</small></span>') ?>
                  </div>
                </div>

                <div class="col-sm-4">
                  <div class="form-group">
                    <label for="product_effective_price">Effective Price(Bank Offer Net Effective Price)</label>

                    <input type="number" class="form-control" name="product_effective_price" id="product_effective_price" value="<?= set_value('product_effective_price', $product_variant->prod_effective_price) ?>" placeholder="Effective Price" />

                    <?= form_error('product_effective_price', '<span class="error text-danger"><small>', '</small></span>') ?>
                  </div>
                </div>

                <div class="col-sm-4">
                  <div class="form-group">
                    <label for="product_exchange_effective_price">Exchange Effective Price</label>

                    <input type="number" class="form-control" name="product_exchange_effective_price" id="product_exchange_effective_price" value="<?= set_value('product_exchange_effective_price', $product_variant->prod_exchange_effective_price) ?>" placeholder="Exchange Effective Price" />

                    <?= form_error('product_exchange_effective_price', '<span class="error text-danger"><small>', '</small></span>') ?>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-sm-4">
                  <div class="form-group">
                    <label for="product_store_discount">Instant Store Discount</label>

                    <input type="number" class="form-control" name="product_store_discount" id="product_store_discount" value="<?= set_value('product_store_discount', $product_variant->prod_store_discount) ?>" placeholder="Store Discount" />

                    <?= form_error('product_store_discount', '<span class="error text-danger"><small>', '</small></span>') ?>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label for="product_store_discount">EMI Per Month</label>

                    <input type="text" class="form-control" name="product_emi" id="product_emi" value="<?= set_value('product_emi', $product_variant->product_emi) ?>" placeholder="EMI Per Month" />

                    <?= form_error('product_emi', '<span class="error text-danger"><small>', '</small></span>') ?>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label for="product_exchange_effective_emi">Exchange Effective EMI</label>
                    <input type="text" class="form-control" name="product_exchange_effective_emi" id="product_exchange_effective_emi" value="<?= set_value('product_exchange_effective_emi', $product_variant->prod_exchange_effective_emi); ?>" placeholder="Product Exchange Effective EMI" />

                    <?= form_error('product_exchange_effective_emi', '<span class="error text-danger"><small>', '</small></span>') ?>
                  </div>
                </div>
              </div>

              
            <div class="row">

<div class="col-sm-4">
  <div class="form-group">
    <label for="product_net_effective_price">Loan offer net Effective Price</label>

    <input type="number" class="form-control" name="product_net_effective_price" id="product_net_effective_price" value="<?= set_value('product_net_effective_price', $product_variant->prod_net_effective_price) ?>" placeholder="Net Effective Price" />

    <?= form_error('product_net_effective_price', '<span class="error text-danger"><small>', '</small></span>') ?>
  </div>
</div>
<div class="col-sm-4">
  <div class="form-group">
    <label for="product_exchange_price">Exchange Value</label>

    <input type="text" class="form-control" name="product_exchange_price" id="product_exchange_price" value="<?= set_value('product_exchange_price', $product_variant->prod_exchange_price) ?>" placeholder="Exchange Price" />

    <?= form_error('product_exchange_price', '<span class="error text-danger"><small>', '</small></span>') ?>
  </div>
</div>
      <div class="col-sm-4">
  <div class="form-group">
    <label for="product_exchange_bonus">Exchange Bonus</label>
    <input type="text" class="form-control" name="product_exchange_bonus" id="product_exchange_bonus" value="<?= set_value('product_exchange_bonus', $product_variant->prod_exchange_bonus); ?>" placeholder="Exchange Bonus" />

    <?= form_error('product_exchange_bonus', '<span class="error text-danger"><small>', '</small></span>') ?>
  </div>
</div>
</div>

<div class="row">

<div class="col-sm-4">
  <div class="form-group">
    <label for="product_cashback">Cashback</label>

    <input type="number" class="form-control" name="product_cashback" id="product_cashback" value="<?= set_value('product_cashback', $product_variant->prod_cashback) ?>" placeholder="Cashback" />

    <?= form_error('product_cashback', '<span class="error text-danger"><small>', '</small></span>') ?>
  </div>
</div>

    
</div>


</div>

              <div class="row">
                <div class="col-sm-12">
                  <div class="form-group">
                    <label for="product_store_discount">EMI Options</label>
                    <textarea class="form-control wysiwyg" name="product_emi_options" id="product_emi_options" placeholder="Product EMI Options" ><?= set_value('product_emi_options',$product_variant->product_emi_options); ?></textarea>
                    
                    
                    <?= form_error('product_store_discount', '<span class="error text-danger"><small>', '</small></span>') ?>
                  </div>
                </div>
              </div>

              <div class="row">
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label for="product_store_discount">Benefit Amount</label>

                      <input type="number" class="form-control" name="product_benefit_amount" id="product_benefit_amount" value="<?= set_value('product_benefit_amount',$product_variant->product_benefit_amount) ?>" placeholder="Benefit Amount" />

                      <?= form_error('product_benefit_amount', '<span class="error text-danger"><small>', '</small></span>') ?>
                    </div>
                  </div>
              </div>

              <div class="row">
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label for="product_store_discount">Product Benefit Details</label>
                      <textarea class="form-control wysiwyg" name="product_benefit_details" id="product_benefit_details" placeholder="Product Benefit details" ><?= set_value('product_benefit_details',$product_variant->product_benefit_details); ?></textarea>

                      <?= form_error('product_benefit_details', '<span class="error text-danger"><small>', '</small></span>') ?>
                    </div>
                  </div>
               </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                  <div class="form-group">
                    <label for="product_effective_emi">Effective EMI</label>
                    <input type="text" class="form-control" name="product_effective_emi" id="product_effective_emi" placeholder="Product Effective EMI" value="<?= set_value('product_effective_emi',$product_variant->prod_effective_emi); ?>" />

                    <?= form_error('product_effective_emi', '<span class="error text-danger"><small>', '</small></span>') ?>
                  </div>
                </div>
            
              </div>

              <div class="row">
                <div class="col-sm-12">
                  <div class="form-group">
                    <label for="product_effective_emi_description">Product Effective EMI Description</label>
                    <textarea class="form-control wysiwyg" name="product_effective_emi_description" id="product_effective_emi_description" placeholder="Product Effective EMI Description" ><?= set_value('product_effective_emi_description', $product_variant->prod_effective_emi_text); ?></textarea>

                    <?= form_error('product_effective_emi_description', '<span class="error text-danger"><small>', '</small></span>') ?>
                  </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                  <div class="form-group">
                    <label for="product_exchange_effective_emi_description">Product Exchange Effective EMI Description</label>
                    <textarea class="form-control wysiwyg" name="product_exchange_effective_emi_description" id="product_exchange_effective_emi_description" placeholder="Product Exchange Effective EMI Description" ><?= set_value('product_exchange_effective_emi_description', $product_variant->prod_exchange_effective_emi_text); ?></textarea>

                    <?= form_error('product_exchange_effective_emi_description', '<span class="error text-danger"><small>', '</small></span>') ?>
                  </div>
                </div>
            </div>


            <div class="card-footer">
              <button type="submit" class="btn btn-primary" name="product_variant_submit" id="product_variant_submit" value="1">Submit</button>
            </div>
            <!-- /.card-body -->
          </form>
        </div>
      </div>
      <!-- /.card -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container-fluid -->
</section>