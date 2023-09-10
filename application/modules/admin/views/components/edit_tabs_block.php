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
        <h1>Edit Tabs Block</h1>
      </div>

      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="<?= base_url('admin/components/tabs-block') ?>">Tabs Block</a></li>

          <li class="breadcrumb-item active">Edit</li>
        </ol>
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
          <form role="form" method="post" enctype="multipart/form-data" autocomplete="off" id="frm_tabs_block">
            <div class="card-body">
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="tb_section_title">Section Title</label>

                    <input type="text" class="form-control" name="tb_section_title" id="tb_section_title" value="<?= set_value('tb_section_title') ?>" placeholder="Enter title for the section" maxlength="100" minlength="1" />
                  </div>
                </div>

                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="tb_section_slug">Section Slug</label>

                    <input type="text" class="form-control" name="tb_section_slug" id="tb_section_slug" value="<?= set_value('tb_section_slug') ?>" placeholder="Section Slug" maxlength="100" minlength="1" readonly />
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-sm-12">
                  <div class="form-group">
                    <label for="tb_section_desc">Section Description</label>

                    <textarea class="form-control" name="tb_section_desc" id="tb_section_desc" placeholder="Enter description for the section"><?= set_value('tb_section_desc') ?></textarea>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="tb_section_for">Section For</label>

                    <select class="form-control" name="tb_section_for" id="tb_section_for">
                      <option value="None">None</option>
                      <option value="Category">Category</option>
                      <option value="Product">Product</option>
                    </select>
                  </div>
                </div>

                <div class="col-sm-6 tb_section_for d-none">
                  <div class="form-group">
                    <label for="tb_section_for_category">Category</label>

                    <select class="form-control" name="tb_section_for_category" id="tb_section_for_category">
                      <option value="">Select Category</option>
                      <?php
                      foreach ($categories as $category) :
                        echo "<option value='$category->cat_id'>$category->cat_name</option>";
                      endforeach
                      ?>
                    </select>
                  </div>
                </div>

                <div class="col-sm-6 tb_section_for d-none">
                  <div class="form-group">
                    <label for="tb_section_for_product">Product</label>

                    <select class="form-control" name="tb_section_for_product" id="tb_section_for_product">
                      <option value="">Select Product</option>
                      <?php
                      foreach ($products as $product) :
                        echo "<option value='$product->prod_id'>$product->prod_name</option>";
                      endforeach
                      ?>
                    </select>

                    <?= form_error('tb_section_for_product', '<span class="error text-danger"><small>', '</small></span>'); ?>
                  </div>
                </div>
              </div>

              <hr />

              <div class="row">
                <div class="col-sm-12" id="tabs"></div>

                <div class="col-sm-12">
                  <button type="button" class="btn btn-dark btn-sm float-right" name="btn_add_new_tab" id="btn_add_new_tab">
                    <i class="fa fa-plus"></i> Add New Tab
                  </button>
                </div>
              </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
              <button type="submit" class="btn btn-primary" name="btn_submit_form" id="btn_submit_form" data-tb-id="<?= $tb_id ?>">Submit</button>
            </div>
          </form>
        </div>
        <!-- /.card -->
      </div>
      <!-- /.row -->
    </div>
  </div>
  <!-- /.container-fluid -->
</section>