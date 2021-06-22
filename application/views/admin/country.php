<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Country Create</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                
                        <li class="nav-item menu-open">
                            <a href="<?php echo base_url(); ?>admin/Dynamic_dependent/country_list" class="nav-link ">
                                <button type="button" class="btn btn-block bg-gradient-info btn-sm">Back</button>

                            </a>
                        </li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-6">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Insert country</h3>
                        </div>
                        <?php
                        if (isset($error)) {
                            echo $error;
                        }
                        ?>

                        <form action="<?php echo base_url() ?>admin/Dynamic_dependent/create_country" method="POST" enctype="multipart/form-data">
                            <div class="card-body">

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Country</label>
                                    <input type="text" class="form-control" name="name" value="<?php echo set_value('name'); ?>" placeholder="Enter country Name">
                                    <?php if (form_error('name')) {
                                        echo "<span style='color:red'>" . form_error('name') . "</span>";
                                    }
                                    ?>
                                </div>

                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>