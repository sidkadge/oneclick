<?php echo view('Admin/header'); ?>

<div class="main-content">
    <section class="section">
        <div class="section-body">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- jquery validation -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Add Company<small></small></h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="<?php echo base_url(); ?>add_company" method="post" id="add_company">
                            <div class="row card-body">

                                <div class="col-lg-12 col-md-3 col-12 form-group">
                                    <label for="company_name">Enter Company Name</label>
                                    <input type="text" name="company_name" class="form-control" id="company_name" placeholder="Enter company name" value="<?php if(!empty($single_data)){ echo $single_data->compony_name; } ?>">
                                </div>
                              
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer text-right">
                                <button type="submit" name="submit" id="submit" class="btn btn-primary submitButton"><?php if(!empty($single_data)){ echo 'Update'; }else{ echo 'Submit';} ?></button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>
</div>

<?php echo view('Admin/footer'); ?>

<!-- jQuery Validation -->
