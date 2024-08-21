<?php echo view('Admin/header'); ?>
<style>
.form-group>label {
    font-weight: 600;
    color: #0a0a0a;
    font-size: 18px;
    letter-spacing: 0.5px;
}
</style>
<div class="main-content">
    <section class="section">
        <div class="section-body">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- jquery validation -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Add Employee<small></small></h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="<?= base_url('Add_Employee') ?>" method="post" id="add_employee"
                            enctype="multipart/form-data">
                            <div class="row card-body">
                                <div class="col-lg-4 col-md-4 col-12 form-group">
                                    <label for="name">First Name</label>
                                    <input type="text" name="frist_name" class="form-control" id="name"
                                        placeholder="Enter first name">
                                </div>
                                <div class="col-lg-4 col-md-4 col-12 form-group">
                                    <label for="last_name">Last Name</label>
                                    <input type="text" name="last_name" class="form-control" id="last_name"
                                        placeholder="Enter last name">
                                </div>
                                <div class="col-lg-4 col-md-4 col-12 form-group">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" class="form-control" id="email"
                                        placeholder="Enter email">
                                </div>
                                <div class="col-lg-4 col-md-4 col-12 form-group">
                                    <label for="mobile">Mobile No.</label>
                                    <input type="text" name="mobile" class="form-control" id="mobile"
                                        placeholder="Enter mobile number">
                                </div>
                                <div class="col-lg-4 col-md-4 col-12 form-group">
                                    <label for="pf_no">PF No</label>
                                    <input type="text" name="pf_no" class="form-control" id="pf_no"
                                        placeholder="Enter PF number">
                                </div>
                                <div class="col-lg-4 col-md-4 col-12 form-group">
                                    <label for="esi_no">ESI No</label>
                                    <input type="text" name="esi_no" class="form-control" id="esi_no"
                                        placeholder="Enter ESI number">
                                </div>
                                <div class="col-lg-4 col-md-4 col-12 form-group">
                                    <label for="account_number">Account Number</label>
                                    <input type="text" name="account_number" class="form-control" id="account_number"
                                        placeholder="Enter account number">
                                </div>
                                <div class="col-lg-4 col-md-4 col-12 form-group">
                                    <label for="ifsc_code">IFSC Code</label>
                                    <input type="text" name="ifsc_code" class="form-control" id="ifsc_code"
                                        placeholder="Enter IFSC code">
                                </div>
                                <div class="col-lg-4 col-md-4 col-12 form-group">
                                    <label for="aadhaar_number">Aadhaar Number</label>
                                    <input type="text" name="aadhaar_number" class="form-control" id="aadhaar_number"
                                        placeholder="Enter Aadhaar number">
                                </div>
                                <div class="col-lg-4 col-md-4 col-12 form-group">
                                    <label for="aadhaar_photo">Aadhaar Card Photo</label>
                                    <input type="file" name="aadhaar_photo" class="form-control" id="aadhaar_photo">
                                </div>
                                <div class="col-lg-4 col-md-4 col-12 form-group">
                                    <label for="passbook_photo">Account Passbook Photo</label>
                                    <input type="file" name="passbook_photo" class="form-control" id="passbook_photo">
                                </div>
                                <div class="col-lg-4 col-md-4 col-12 form-group">
                                    <label for="employee_photo">Employee Photo</label>
                                    <input type="file" name="employee_photo" class="form-control" id="employee_photo">
                                </div>
                                <div class="col-lg-4 col-md-4 col-12 form-group">
                                    <label for="gross_salary">Gross Salary</label>
                                    <input type="text" name="gross_salary" class="form-control" id="gross_salary"
                                        placeholder="Enter gross salary">
                                </div>
                                <div class="col-lg-4 col-md-4 col-12 form-group">
                                    <label for="company_name">Company Name</label>
                                    <input type="text" name="company_name" class="form-control" id="company_name"
                                        placeholder="Enter company name">
                                </div>
                                <div class="col-lg-4 col-md-4 col-12 form-group">
                                    <label for="department">Department</label>
                                    <input type="text" name="department" class="form-control" id="department"
                                        placeholder="Enter department">
                                </div>
                                <div class="col-lg-6 col-md-6 col-12 form-group">
                                    <label for="password">Password</label>
                                    <input type="password" name="password" class="form-control" id="password"
                                        placeholder="Enter password" required>
                                </div>
                           
                                <div class="col-lg-6 col-md-6 col-12 form-group">
                                    <label for="present_address">Present Address</label>
                                    <input type="text" name="present_address" class="form-control" id="present_address"
                                        placeholder="Enter present address">
                                </div>
                                <div class="col-lg-6 col-md-6 col-12 form-group">
                                    <label for="permanent_address">Permanent Address</label>
                                    <input type="text" name="permanent_address" class="form-control"
                                        id="permanent_address" placeholder="Enter permanent address">
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer text-right">
                                <button type="submit" name="submit" id="submit"
                                    class="btn btn-primary submitButton">Submit</button>
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