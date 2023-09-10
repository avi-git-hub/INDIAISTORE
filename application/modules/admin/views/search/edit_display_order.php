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
                    <li class="breadcrumb-item"><a href="<?= base_url("admin/dashboard") ?>">Admin</a></li>

                    <li class="breadcrumb-item"><a href="<?= base_url("admin/search/trending") ?>">Trending Searches</a></li>

                    <li class="breadcrumb-item active">Edit Display Order</li>
                </ol>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <h1>Display Order</small></h1>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header bg-dark">
                    <h3 class="card-title">Edit</h3>
                </div>
                <!-- /.card-header -->

                <div class="card-body">
                    <table class="table table-bordered text-center" id="tbl_display_order">
                        <thead>
                            <tr>
                                <th width="40%">Name</th>

                                <th width="15%">Landing Page</th>

                                <th width="15%">Move</th>
                            </tr>
                        </thead>

                        <tbody id="display_order">
                            <?php
                            if (!empty($trend_searches)) :
                                foreach ($trend_searches as $trend_s) :
                            ?>
                                    <tr class="ui-state-default" id="trend_s_<?php echo $trend_s->id; ?>">
                                        <td><?php echo $trend_s->name; ?></td>
                                        <td><?php echo $trend_s->cta; ?></td>

                                        <td><i class="fa fa-arrows-alt-v"></i></td>

                                    </tr>
                                <?php
                                endforeach;
                            else :
                                ?>
                                <tr>
                                    <td colspan="3">No data available.</td>
                                </tr>
                            <?php
                            endif;
                            ?>
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <?php if (!empty($trend_searches)) : ?>
                        <button type="button" class="btn btn-primary px-4" id="save_display_order">Save</button>
                    <?php endif; ?>
                </div>
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</section>
<!-- /.content -->