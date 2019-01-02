<?php include "inc/header.php"; ?>
<?php include "inc/top-bar.php"; ?>
<?php include "inc/side-nav.php"; ?>

<div class="container-fluid my-5 py-5">
    <div class="col-12 text-white p-2 mb-3" style=" background: #3a4651; ">
        <h6 class="">ITR FORM(PAN APPLICATION FORM)<span class="text-muted ml-3">Every field is  to submit</span></h6>
    </div>

    <div class="row">        
        <div class="col-12">

        <?php 
        if (isset($_POST['itr_form_submit'])) {

            // ITR Forms Datas---------------------------------------------------
            // ITR Pan Number
            $itr_pan_number = $_POST['itr_pan_number'];

            // itr_dob
            $itr_dob =  $_POST['itr_dob'];

            // itr_first_name
            $itr_first_name =  $_POST['itr_first_name'];

            // itr middle name
            $itr_middle_name =  $_POST['itr_middle_name'];

            // itr last name
            $itr_last_name =  $_POST['itr_last_name'];
            
            // itr pan number fill
            $itr_pan_number_fill =  $_POST['itr_pan_number_fill'];

            // itr vill build
            $itr_vill_build =  $_POST['itr_vill_build'];

            // itr area locality
            $itr_area_locality =  $_POST['itr_area_locality'];

            // itr city district
            $itr_city_district =  $_POST['itr_city_district'];

            // itr country
            $itr_state =  $_POST['itr_state'];

            // itr country
            $itr_country =  $_POST['itr_country'];

            // itr email
            $itr_email =  $_POST['itr_email'];

            // itr mobile number
            $itr_mobile_number =  $_POST['itr_mobile_number'];

            // itr aadhar
            $itr_aadhar =  $_POST['itr_aadhar'];

            // itr deductions
            $itr_deductions = $_POST['itr_deductions'];

            // itr acc number
            $itr_acc_numb =  $_POST['itr_acc_numb'];

            // itr acc branch
            $itr_acc_branch =  $_POST['itr_acc_branch'];

            // itr acc ifsc
            $itr_acc_ifsc =  $_POST['itr_acc_ifsc'];

            // itr bank name
            $itr_bank_name =  $_POST['itr_bank_name'];

            // itr category
            $itr_category = $_POST['itr_category'];


            // Form Validation 
            if (empty($itr_pan_number) || empty($itr_dob) || empty($itr_first_name) || empty($itr_middle_name) || empty($itr_last_name) || empty($itr_pan_number_fill) || empty($itr_vill_build) || empty($itr_area_locality) || empty($itr_city_district) || empty($itr_city_district) || empty($itr_state) || empty($itr_country) || empty($itr_email) || empty($itr_mobile_number) || empty($itr_aadhar) || empty($itr_deductions) || empty($itr_acc_numb) || empty($itr_acc_branch) || empty($itr_acc_ifsc) || empty($itr_bank_name) || empty($itr_category)) {

            echo "Some Fields are empty";
        
            // Mobile number validation
            } elseif (strlen($itr_mobile_number) < 10 || strlen($itr_mobile_number) > 10  ) {
                
                echo "Mobile number should be 10 digit";
                
            // Mobile number validation
            } elseif (preg_replace('/\s+/', ' ', $itr_mobile_number)) {

                echo "Mobile number should be 10 digit and no space";
                
            }

        } else {
            
            $a_query = "INSERT INTO itr_reg (itr_retailer_name, itr_pan_number, itr_dob, itr_first_name, itr_middle_name, itr_last_name, itr_pan_number_fill, itr_vill_building, itr_area_locality, itr_city_district, itr_state, itr_country, itr_email, itr_mobile_number, itr_aadhar, itr_deduction, itr_acc_number, itr_branch, itr_ifsc, itr_bank_name, itr_category )";
        }
        
        
        ?>
            <form action="" method="post">
                <!-- pan/dob detail -->
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="itr_pan_number">Pan Number<span class="text-danger">*</span></label>
                            <input type="text" id="itr_pan_number" class="form-control" name="itr_pan_number"  placeholder="your name">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="itr_dob">D-O-B<span class="text-danger">*</span></label>
                            <input type="date" id="itr_dob" class="form-control" name="itr_dob"  placeholder="your name">
                        </div>
                    </div>
                </div>
                <!-- Personal Enquiry -->
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="itr_first_name">First Name<span class="text-danger">*</span></label>
                            <input type="text" id="itr_first_name" class="form-control" name="itr_first_name"  placeholder="your name">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="itr_middle_name">Middle Name<span class="text-danger">*</span></label>
                            <input type="text" id="itr_middle_name" class="form-control" name="itr_middle_name"  placeholder="middle name">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="itr_last_name">Last Name <span class="text-danger">*</span></label>
                            <input type="text" id="itr_last_name" class="form-control" name="itr_last_name"  placeholder="last name">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="itr_pan_number_fill">Pan Number<span class="text-danger">*</span></label>
                            <input type="text" id="itr_pan_number_fill" class="form-control" name="itr_pan_number_fill"  placeholder="pan number">
                        </div>
                    </div>

                    <div class="row px-3">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="itr_vill_build">Vill / Building<span class="text-danger">*</span></label>
                                <textarea class="form-control" name="itr_vill_build" id="itr_vill_build" cols="30" rows="1"  placeholder="vill building"></textarea>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="itr_area_locality">Area / Locality<span class="text-danger">*</span></label>
                                <textarea class="form-control" name="itr_area_locality" id="pitr_area_locality" cols="30" rows="1"  placeholder="area locality"></textarea>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="itr_city_district">City / District<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="itr_city_district" name="itr_city_district"  placeholder="city / district">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="itr_state">State<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="itr_state" name="itr_state"  placeholder="state">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="itr_country">Country<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="itr_country" name="itr_country"  placeholder="country">
                            </div>
                        </div>
                  </div>
                </div>
                <!-- Personal Enquiry -->

                <!-- Contact Enquiry -->
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="itr_email">Email <span class="text-danger">*</span></label>
                            <input type="email"  class="form-control" id="itr_email"  placeholder="email" name="itr_email">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="itr_mobile_number">Mobile Number <span class="text-danger">*</span></label>
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                <div class="input-group-text bg-success text-white">+91</div>
                                </div>
                                <input type="text" name="itr_mobile_number" class="form-control" id="itr_mobile_number" onkeypress="if(event.keyCode<48 || event.keyCode>57)event.returnValue=false;" >
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="itr_aadhar">Aadhar Number <span class="text-danger">*</span></label>
                            <input type="text" name="itr_aadhar" class="form-control" id="itr_aadhar"  placeholder="aadhar number">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="itr_deductions">Deductions <span class="text-danger">*</span></label>
                            <select name="itr_deductions" id="itr_deductions" class="form-control">
                                <option value="null">-----</option>
                                <option value="insurance">Insurance</option>
                                <option value="loan">Loan</option>
                                <option value="tution_fee">Tution Fee</option>
                                <option value="land_purchase">Land Purchase</option>
                            </select>
                        </div>
                    </div>
                </div>

                <!-- Bank Details -->
                <div class="title_Show p-1 text-white mb-3" style=" background: #3a4651;" >
                        <h6>Bank Details</h6>
                </div>

                <div class="row px-2">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="itr_acc_numb">Account Number <span class="text-danger">*</span></label>
                            <input type="text" name="itr_acc_numb"  class="form-control" id="itr_acc_numb"  placeholder="account number">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="itr_acc_branch">Branch<span class="text-danger">*</span></label>
                            <input type="text" name="itr_acc_branch"  class="form-control" id="itr_acc_branch"  placeholder="branch name">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="itr_acc_ifsc">IFSC Code<span class="text-danger">*</span></label>
                            <input type="text" name="itr_acc_ifsc"  class="form-control" id="itr_acc_ifsc"  placeholder="IFSC code">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="itr_bank_name">Bank Name<span class="text-danger">*</span></label>
                            <input type="text" name="itr_bank_name"  class="form-control" id="itr_bank_name"  placeholder="bank name">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="itr_category">Category <span class="text-danger">*</span></label>
                            <select name="itr_category" id="itr_category" class="form-control">
                                <option value="null">-----</option>
                                <option value="business_holder">Business Holder</option>
                                <option value="salary_employee">Salary Employee</option>
                                <option value="commission_agent">Commission Agent</option>
                                <option value="contractor">Contractor</option>
                                <option value="professional">Contractor</option>
                            </select>
                        </div>
                    </div>
                </div>
                <input type="submit" value="Submit" name="itr_form_submit" class="btn px-5 py-2 bg-success text-white  m-auto d-inline-block">
            </form>
        </div>
    </div>
</div>
<?php include "inc/footer.php"; ?>

