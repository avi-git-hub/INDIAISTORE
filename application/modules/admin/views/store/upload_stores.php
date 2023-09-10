<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">

    <?php if ($this->session->flashdata('success_msg')): ?>
        <div class="alert with-close alert-success alert-dismissible fade show">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <?=$this->session->flashdata('success_msg') ?>
        </div>
    <?php elseif ($this->session->flashdata('error_msg')): ?>
        <div class="alert with-close alert-danger alert-dismissible fade show">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <?= $this->session->flashdata('error_msg') ?>
        </div>	
    <?php endif; ?>

    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Stores</h1>
      </div>
      

      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Stores</a></li>
          <li class="breadcrumb-item active">Upload</li>
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
                <h3 class="card-title">Upload Stores Data</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="post" enctype="multipart/form-data" id="upload_store_form">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="uploaded_file">Upload Stores Data</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="uploaded_file" name="uploaded_file">
                                    <label class="custom-file-label" for="uploaded_file">Upload the file</label>
                                    <?php echo form_error('uploaded_file','<span class="error text-danger"><small>','</small></span>'); ?>  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" id="upload_store_submit" name="upload_store_submit" value="1">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>