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
                <h1>Search</h1>
            </div>


            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?= base_url('admin/dashboard') ?>">Search</a></li>
                    <li class="breadcrumb-item active">Manage Other Searches</li>
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
                        <h3 class="card-title">Other Searches</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form role="form" method="post" id="other_search_form">
                        <div class="alert with-close alert-dismissible fade show d-none mt-2">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                        </div>
                        <div class="card-body">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <h5 class="mb-4">Add Other Search</h5>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="other_search_name">Other Search Name</label>
                                            <input type="text" maxlength="50" id="other_search_name" placeholder="Enter search name" class="form-control">
                                            <div class="error-div"></div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="other_search_cta">Other Search CTA</label>
                                            <input type="text" maxlength="255" id="other_search_cta" placeholder="Enter Search CTA" class="form-control">
                                            <div class="error-div"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-10">
                                        <div class="form-group">
                                            <label for="other_search_tags">Other Search Tags</label>
                                            <textarea class="form-control" id="other_search_tags" placeholder="Enter comma seperated search tags" aria-label="With textarea"></textarea>
                                            <div class="error-div"></div>
                                        </div>
                                    </div>

                                    <div class="col-md-2">
                                        <label for="other_search_add">Action</label>
                                        <button class="add-row btn btn-primary w-100" id="other_search_add">Add
                                            New</button>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-12">
                                        <table class="table table-bordered table-striped table-hover text-center">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>CTA</th>
                                                    <th>Tags</th>
                                                    <th>Delete</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php if (!empty($other_searches)) :
                                                    foreach ($other_searches as $s) : ?>
                                                        <tr>
                                                            <td><?= $s->name ?>
                                                            </td>
                                                            <td><?= $s->cta ?>
                                                            </td>
                                                            <td><?= $s->tags ?>
                                                            </td>
                                                            <td><a href="<?= base_url("admin/search/other/$s->id/delete"); ?>" role="button" data-record-id="<?= $s->id ?>" class="text-danger delete-row">
                                                                    <i class="fa fa-trash"></i>
                                                                </a></td>
                                                        </tr>
                                                <?php endforeach;
                                                else :
                                                    echo "<tr class='empty_table_class'><td colspan='6' class='text-center'>No data available in this table</td></tr>";
                                                endif; ?>
                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                            </div>

                        </div>
                        <!-- /.card-body -->

                        <!-- <div class="card-footer">
                            <button type="submit" class="btn btn-primary" id="partner_submit" name="partner_submit" value="1">Submit</button>
                        </div> -->
                    </form>
                </div>
                <!-- /.card -->

            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
</section>