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

          <li class="breadcrumb-item active">Add New</li>
        </ol>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-12">
        <h1>Products</h1>
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
            <h3 class="card-title">Add New</h3>
          </div>
          <!-- /.card-header -->

          <!-- form start -->
          <form role="form" method="post" enctype="multipart/form-data" autocomplete="off">
            <div class="card-body">
              <div class="card card-dark card-outline card-outline-tabs">
                <div class="card-header p-0 border-bottom-0">
                  <ul class="nav nav-tabs" id="product_info_tabs" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active" id="tab_primary" data-toggle="pill" href="#tab_primary_content" role="tab" aria-controls="custom-tabs-four-home" aria-selected="true">Primary</a>
                    </li>

                    <li class="nav-item">
                      <a class="nav-link" id="tab_t_and_c" data-toggle="pill" href="#tab_t_and_c_content" role="tab" aria-controls="custom-tabs-four-profile" aria-selected="false">T&C</a>
                    </li>

                    <li class="nav-item">
                      <a class="nav-link" id="tab_hero_section" data-toggle="pill" href="#tab_hero_section_content" role="tab" aria-controls="custom-tabs-four-messages" aria-selected="false">Hero Section</a>
                    </li>

                    <li class="nav-item">
                      <a class="nav-link" id="tab_feature_tiles" data-toggle="pill" href="#tab_feature_tiles_content" role="tab" aria-controls="custom-tabs-four-settings" aria-selected="false">Features</a>
                    </li>

                    <li class="nav-item">
                      <a class="nav-link" id="tab_product_video" data-toggle="pill" href="#tab_product_video_content" role="tab" aria-controls="custom-tabs-four-settings" aria-selected="false">Video</a>
                    </li>

                    <li class="nav-item">
                      <a class="nav-link" id="tab_additional" data-toggle="pill" href="#tab_additional_content" role="tab" aria-controls="custom-tabs-four-settings" aria-selected="false">Additional</a>
                    </li>

                    <li class="nav-item applicable_features d-none">
                      <a class="nav-link" id="tab_specifications" data-toggle="pill" href="#tab_specifications_content" role="tab" aria-controls="custom-tabs-four-settings" aria-selected="false">Specifications</a>
                    </li>
                  </ul>
                </div>

                <div class="card-body">
                  <div class="tab-content" id="product_info_tabs_content">
                    <div class="tab-pane fade show active" id="tab_primary_content" role="tabpanel" aria-labelledby="tab_primary">
                      <div class="row">
                        <div class="col-sm-6">
                          <div class="form-group">
                            <label for="product_name">Name</label>

                            <input type="text" class="form-control" name="product_name" id="product_name" value="<?= set_value('product_name') ?>" placeholder="Enter unique name for Product" maxlength="100" minlength="1" />

                            <?= form_error('product_name', '<span class="error text-danger"><small>', '</small></span>') ?>
                          </div>
                        </div>

                        <div class="col-sm-6">
                          <div class="form-group">
                            <label for="product_slug">Slug</label>

                            <input type="text" class="form-control" name="product_slug" id="product_slug" value="<?= set_value('product_slug') ?>" placeholder="Product Slug" readonly />

                            <?= form_error('product_slug', '<span class="error text-danger"><small>', '</small></span>') ?>
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-sm-6">
                          <div class="form-group">
                            <label for="product_category">Category</label>

                            <select class="form-control" name="product_category" id="product_category">
                              <option value="">Select Product Category</option>
                              <?php
                              foreach ($categories as $category) :
                                echo "<option value='$category->cat_id'", set_select('product_category', $category->cat_id), ">$category->cat_name</option>";
                              endforeach
                              ?>
                            </select>

                            <?= form_error('product_category', '<span class="error text-danger"><small>', '</small></span>') ?>
                          </div>
                        </div>

                        <div class="col-sm-6">
                          <div class="form-group">
                            <label for="product_status">Status</label>

                            <div>
                              <input type="checkbox" name="product_status" data-bootstrap-switch data-size="large" data-on-color="success" data-off-color="danger" data-on-text="Active" data-off-text="Inactive" value="1" <?= set_checkbox('product_status', '1', true) ?>>
                            </div>

                            <?= form_error('product_status', '<span class="error text-danger"><small>', '</small></span>') ?>
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-sm-6">
                          <div class="form-group">
                            <label for="product_img_xs">Extra Small Image (EPC Circular Image)</label>

                            <div class="custom-file">
                              <input type="file" class="custom-file-input" name="product_img_xs" id="product_img_xs" value="" accept="image/jpeg, image/png">

                              <label class="custom-file-label">Choose file</label>

                              <small class="form-text text-muted">image dimensions should be (96 x 100)</small>

                              <?= form_error('product_img_xs', '<span class="error text-danger"><small>', '</small></span>') ?>
                            </div>
                          </div>
                        </div>

                        <div class="col-sm-6">
                          <div class="form-group">
                            <label for="product_img_sm">Small Image (Navigation Menu)</label>

                            <div class="custom-file">
                              <input type="file" class="custom-file-input" name="product_img_sm" id="product_img_sm" value="" accept="image/jpeg, image/png">

                              <label class="custom-file-label">Choose file</label>

                              <small class="form-text text-muted">image dimensions should be (150 x 150)</small>

                              <?= form_error('product_img_sm', '<span class="error text-danger"><small>', '</small></span>') ?>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-sm-6">
                          <div class="form-group">
                            <label for="product_img_md">Medium Image (Category Page - Top Cards)</label>

                            <div class="custom-file">
                              <input type="file" class="custom-file-input" name="product_img_md" id="product_img_md" value="" accept="image/jpeg, image/png">

                              <label class="custom-file-label">Choose file</label>

                              <small class="form-text text-muted">image dimensions should be (80 x 110)</small>

                              <?= form_error('product_img_md', '<span class="error text-danger"><small>', '</small></span>') ?>
                            </div>
                          </div>
                        </div>

                        <div class="col-sm-6">
                          <div class="form-group">
                            <label for="product_img_lg">Large Image (Recommended & Compare Section)</label>

                            <div class="custom-file">
                              <input type="file" class="custom-file-input" name="product_img_lg" id="product_img_lg" value="" accept="image/jpeg, image/png">

                              <label class="custom-file-label">Choose file</label>

                              <small class="form-text text-muted">image dimensions should be (235 x 319)</small>

                              <?= form_error('product_img_lg', '<span class="error text-danger"><small>', '</small></span>') ?>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="row">

                        <div class="col-sm-6">
                          <div class="form-group">
                            <label for="product_logo">Logo Upload (Light)</label>

                            <div class="custom-file">
                              <input type="file" class="custom-file-input" name="product_logo" id="product_logo" value="" accept="image/jpeg, image/png">

                              <label class="custom-file-label">Choose file</label>

                              <small class="form-text text-muted">image dimensions should be (235 x 319)</small>

                              <?= form_error('product_logo', '<span class="error text-danger"><small>', '</small></span>') ?>
                            </div>
                          </div>
                        </div>


                        <div class="col-sm-6">
                          <div class="form-group">
                            <label for="product_logo_dark">Logo Upload (Dark)</label>

                            <div class="custom-file">
                              <input type="file" class="custom-file-input" name="product_logo_dark" id="product_logo_dark" value="" accept="image/jpeg, image/png">

                              <label class="custom-file-label">Choose file</label>

                              <small class="form-text text-muted">image dimensions should be (235 x 319)</small>

                              <?= form_error('product_logo_dark', '<span class="error text-danger"><small>', '</small></span>') ?>
                            </div>
                          </div>
                        </div>

                      </div>

                      <div class="row">

                        <div class="col-sm-6">
                          <div class="form-group">
                            <label for="product_card_bg_color">Card Background Color</label>

                            <input type="text" class="form-control" name="product_card_bg_color" id="product_card_bg_color" value="<?= set_value('product_card_bg_color') ?>" placeholder="Enter hexcode for background color (ex. #ff00ff)" maxlength="100" minlength="1" />

                            <?= form_error('product_card_bg_color', '<span class="error text-danger"><small>', '</small></span>') ?>
                          </div>
                        </div>

                        <div class="col-sm-6">
                          <div class="form-group">
                            <label for="product_is_new_status">Is New Product to Catalog?</label>

                            <div>
                              <input type="checkbox" name="product_is_new_status" data-bootstrap-switch data-size="large" data-on-color="success" data-off-color="danger" data-on-text="Yes" data-off-text="No" value="0" <?= set_checkbox('product_is_new_status', '1') ?>>
                            </div>

                            <?= form_error('product_is_new_status', '<span class="error text-danger"><small>', '</small></span>') ?>
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-12">
                          <div class="form-group">
                            <label for="product_store_discount_text">Store Discount Text</label>

                            <textarea class="form-control wysiwyg" name="product_store_discount_text" id="product_store_discount_text" placeholder="Product Effective Price Text"><?= set_value('product_store_discount_text') ?></textarea>

                            <?= form_error('product_store_discount_text', '<span class="error text-danger"><small>', '</small></span>') ?>
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-12">
                          <div class="form-group">
                            <label for="product_effective_text">Effective Price Text</label>

                            <textarea class="form-control wysiwyg" name="product_effective_text" id="product_effective_text" placeholder="Product Effective Price Text"><?= set_value('product_effective_text') ?></textarea>

                            <?= form_error('product_effective_text', '<span class="error text-danger"><small>', '</small></span>') ?>
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-12">
                          <div class="form-group">
                            <label for="product_exchange_text">Exchange Effective Price Text</label>

                            <textarea class="form-control wysiwyg" name="product_exchange_text" id="product_exchange_text" placeholder="Product Exchange Effective Price Text"><?= set_value('product_exchange_text') ?></textarea>

                            <?= form_error('product_exchange_text', '<span class="error text-danger"><small>', '</small></span>') ?>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="tab-pane fade" id="tab_t_and_c_content" role="tabpanel" aria-labelledby="tab_t_and_c">
                      <div class="row">
                        <div class="col-sm-12">
                          <div class="form-group">
                            <label for="product_terms_and_cond">Terms &amp; Conditions</label>

                            <textarea class="form-control wysiwyg" name="product_terms_and_cond" id="product_terms_and_cond" placeholder="Terms and Conditions of Product"><?= set_value('product_terms_and_cond') ?></textarea>

                            <?= form_error('product_terms_and_cond', '<span class="error text-danger"><small>', '</small></span>') ?>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="tab-pane fade" id="tab_hero_section_content" role="tabpanel" aria-labelledby="tab_hero_section">
                      <div class="row">
                        <div class="col-sm-12">
                          <div class="form-group">
                            <label for="product_hero_title">Hero Section Title</label>

                            <input type="text" class="form-control" name="product_hero_title" id="product_hero_title" value="<?= set_value('product_hero_title') ?>" placeholder="Product Hero Section Title" />

                            <?= form_error('product_hero_title', '<span class="error text-danger"><small>', '</small></span>') ?>
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-sm-12">
                          <div class="form-group">
                            <label for="product_hero_desc">Hero Section Description</label>

                            <textarea class="form-control wysiwyg" name="product_hero_desc" id="product_hero_desc" placeholder="Enter the hero section description"><?= set_value('product_hero_desc') ?></textarea>

                            <?= form_error('product_hero_desc', '<span class="error text-danger"><small>', '</small></span>') ?>
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-sm-6">
                          <div class="form-group">
                            <label for="product_hero_mob_img">Hero Mobile Image</label>

                            <div class="custom-file">
                              <input type="file" class="custom-file-input" name="product_hero_mob_img" id="product_hero_mob_img" value="" accept="image/jpeg, image/png">

                              <label class="custom-file-label">Choose file</label>

                              <!-- <small class="form-text text-muted">image dimensions should be (53 x 53)</small> -->

                              <?= form_error('product_hero_mob_img', '<span class="error text-danger"><small>', '</small></span>') ?>
                            </div>
                          </div>
                        </div>

                        <div class="col-sm-6">
                          <div class="form-group">
                            <label for="product_hero_desk_img">Hero Desktop Image</label>

                            <div class="custom-file">
                              <input type="file" class="custom-file-input" name="product_hero_desk_img" id="product_hero_desk_img" value="" accept="image/jpeg, image/png">

                              <label class="custom-file-label">Choose file</label>

                              <!-- <small class="form-text text-muted">image dimensions should be (53 x 53)</small> -->

                              <?= form_error('product_hero_desk_img', '<span class="error text-danger"><small>', '</small></span>') ?>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="tab-pane fade" id="tab_feature_tiles_content" role="tabpanel" aria-labelledby="tab_feature_tiles">
                      <div class="row">
                        <div class="col-sm-12">
                          <div class="form-group">
                            <label for="product_feature_tiles">Product Feature Tiles</label>

                            <textarea class="form-control wysiwyg" name="product_feature_tiles" id="product_feature_tiles" placeholder="Enter the custom HTML for product feature tiles"><?= set_value('product_feature_tiles') ?></textarea>

                            <?= form_error('product_feature_tiles', '<span class="error text-danger"><small>', '</small></span>') ?>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="tab-pane fade" id="tab_product_video_content" role="tabpanel" aria-labelledby="tab_product_video">
                      <div class="row">
                        <div class="col-sm-6">
                          <div class="form-group">
                            <label for="product_vid_id">Video ID</label>

                            <input type="text" class="form-control" name="product_vid_id" id="product_vid_id" value="<?= set_value('product_vid_id') ?>" placeholder="Product Video ID" />

                            <?= form_error('product_vid_id', '<span class="error text-danger"><small>', '</small></span>') ?>
                          </div>
                        </div>

                        <div class="col-sm-6">
                          <div class="form-group">
                            <label for="product_vid_thumbnail">Video Thumbnail</label>

                            <div class="custom-file">
                              <input type="file" class="custom-file-input" name="product_vid_thumbnail" id="product_vid_thumbnail" value="" accept="image/jpeg, image/png">

                              <label class="custom-file-label">Choose file</label>

                              <?= form_error('product_vid_thumbnail', '<span class="error text-danger"><small>', '</small></span>') ?>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="tab-pane fade" id="tab_additional_content" role="tabpanel" aria-labelledby="tab_additional">
                      <div class="product_compare_with d-none">
                        <div class="row">
                          <div class="col-sm-12">
                            <div class="form-group">
                              <label for="product_compare_with">Product to Compare With</label>

                              <select class="form-control select2bs4" name="product_compare_with" id="product_compare_with">
                              </select>

                              <?= form_error('product_compare_with', '<span class="error text-danger"><small>', '</small></span>') ?>
                            </div>
                          </div>
                        </div>

                        <hr />
                      </div>

                      <div class="row">
                        <div class="col-sm-6">
                          <div class="form-group">
                            <label for="product_html_id">HTML ID</label>

                            <input type="text" class="form-control" name="product_html_id" id="product_html_id" value="<?= set_value('product_html_id') ?>" placeholder="Enter unique HTML id" maxlength="100" minlength="1" />

                            <?= form_error('product_html_id', '<span class="error text-danger"><small>', '</small></span>') ?>
                          </div>
                        </div>

                        <div class="col-sm-6">
                          <div class="form-group">
                            <label for="product_html_classes">HTML class(es)</label>

                            <input type="text" class="form-control" name="product_html_classes" id="product_html_classes" value="<?= set_value('product_html_classes') ?>" placeholder="HTML class(es)" />

                            <?= form_error('product_html_classes', '<span class="error text-danger"><small>', '</small></span>') ?>
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-sm-6">
                          <div class="form-group">
                            <label for="product_tags">Product Tags</label>
                            <textarea class="form-control" name="product_tags" id="product_tags" rows="5" placeholder="Enter comma separated list of product tags"><?= set_value("product_tags") ?></textarea> <!-- maxlength="255" -->
                            <?= form_error('product_tags', '<span class="error text-danger"><small>', '</small></span>'); ?>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="tab-pane fade applicable_features d-none" id="tab_specifications_content" role="tabpanel" aria-labelledby="tab_specifications">
                      <div class="row" id="applicable_features"></div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card -->
            </div>
        </div>

        <div class="card-footer">
          <button type="submit" class="btn btn-primary" name="product_submit" id="product_submit" value="1">Submit</button>
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