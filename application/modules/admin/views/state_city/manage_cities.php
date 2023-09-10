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
                <h1>Cities</h1>
            </div>


            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?= base_url('admin/dashboard') ?>">Dashboard</a></li>
                    <li class="breadcrumb-item active">Manage Cities</li>
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
                        <h3 class="card-title">Manage Cities</h3>

                        <div class="float-right">
                            <a href="<?= base_url('admin/state-city/city/add-new') ?>" role="button" class="btn btn-success btn-sm mr-2" id="add_new_city">
                                <i class="fa fa-sort"></i> Add New City
                            </a>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form role="form" method="post" enctype="multipart/form-data" id="city_form">
                        <div class="alert with-close alert-dismissible fade show d-none mt-2">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                        </div>
                        <div class="card-body">
                            <div class="card-body">
                                <div class="row mt-3">
                                    <div class="col-12">
                                        <table class="table table-bordered table-striped table-hover text-center" id="cities_table">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>City Name</th>
                                                    <th>State Name</th>
                                                    <th>latitude</th>
                                                    <th>longitude</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php if (!empty($cities)) :
                                                    foreach ($cities as $c) : ?>
                                                        <tr>
                                                            <td><?= $c->id ?>
                                                            </td>
                                                            <td><?= $c->name ?>
                                                            </td>
                                                            <td><?= $c->state_name ?>
                                                            </td>
                                                            <td><?= $c->lat ?>
                                                            </td>
                                                            <td><?= $c->lng ?>
                                                            </td>
                                                            <td>
                                                                <h4 class="text-center m-0" title="Active">
                                                                    <span class="badge badge-pill badge-<?= ($c->status == 1) ? 'success' : 'danger' ?>">&nbsp;</span>
                                                                </h4>
                                                            </td>
                                                            <td>
                                                                <a href="<?= base_url("admin/state-city/city/$c->id/edit") ?>" role="button" class="edit_state btn btn-dark">
                                                                    <i class="fa fa-edit"></i>
                                                                </a>
                                                            </td>
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