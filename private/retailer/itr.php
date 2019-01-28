<?php include "inc/header.php"; ?>
<?php include "inc/top-bar.php"; ?>
<?php include "inc/side-nav.php"; ?>

<div class="container-fluid my-5 py-5">
    <div class="col-12 text-white p-2 mb-3" style=" background: #3a4651; ">
        <h6 class="">ITR FORM(PAN APPLICATION FORM)<span class="text-muted ml-3">Every field is Required</span></h6>
    </div>
<?php 
    if(isset($_SESSION['username'])) {
        $username = $_SESSION['username'];
        $sql_s = "SELECT * FROM users WHERE username = $username";
    } 
?>

    <div class="row">        
        <div class="col-12">
            <form action="" method="post">
                <!-- pan/dob detail -->
            <?php 
                if (is_post_request()) {

                    // Escaping - - - - -
                    $itr_pan_number = h(escape($con, $_POST['itr_pan_number']));
                    $itr_dob = h(escape($con, $_POST['itr_dob']));
                    $itr_first_name = h(escape($con, $_POST['itr_first_name']));
                    $itr_middle_name = h(escape($con, $_POST['itr_middle_name']));
                    $itr_last_name = h(escape($con, $_POST['itr_last_name']));
                    $itr_pan_number_fill = h(escape($con, $_POST['itr_pan_number_fill']));
                    $itr_vill_build = h(escape($con, $_POST['itr_vill_build']));
                    $itr_area_locality = h(escape($con, $_POST['itr_area_locality']));
                    $itr_state = h(escape($con, $_POST['itr_state']));
                    $itr_city_district = h(escape($con, $_POST['itr_city_district']));
                    $itr_country = h(escape($con, $_POST['itr_country']));
                    $itr_email = h(escape($con, $_POST['itr_email']));
                    $itr_mobile_number = h(escape($con, $_POST['itr_mobile_number']));
                    $itr_aadhar = h(escape($con, $_POST['itr_aadhar']));
                    $itr_deductions = h(escape($con, $_POST['itr_deductions']));
                    $itr_acc_numb = h(escape($con, $_POST['itr_acc_numb']));
                    $itr_acc_branch = h(escape($con, $_POST['itr_acc_branch']));
                    $itr_acc_ifsc = h(escape($con, $_POST['itr_acc_ifsc']));
                    $itr_bank_name = h(escape($con, $_POST['itr_bank_name']));
                    $itr_category = h(escape($con, $_POST['itr_category']));
                    
                    if(is_blank($itr_pan_number) || is_blank($itr_dob) || is_blank($itr_first_name) || is_blank($itr_middle_name) || is_blank($itr_last_name) || is_blank($itr_pan_number_fill) || is_blank($itr_vill_build) || is_blank($itr_area_locality) || is_blank($itr_city_district) || is_blank($itr_country) || is_blank($itr_email) || is_blank($itr_mobile_number) || is_blank($itr_aadhar) || is_blank($itr_deductions) || is_blank($itr_acc_numb)|| is_blank($itr_acc_branch) || is_blank($itr_acc_ifsc) || is_blank($itr_bank_name) || is_blank($itr_category)) {
                        
                        echo "<p class='text-danger'>Fields Can't be empty</p>";

                    } elseif (m_numb($itr_mobile_number) === false) {

                        echo "<p class='text-danger'>Invalid Phone Number or Do not add +91 or 0  </p>";

                    } else {
                        $sql = "INSERT INTO itr_reg (itr_retailer_name, itr_pan_number, itr_dob, itr_first_name, itr_middle_name, itr_last_name, itr_pan_number_fill, itr_vill_building, itr_area_locality, itr_city_district, itr_state, itr_country, itr_email, itr_mobile_number, itr_aadhar, itr_deduction, itr_acc_number, itr_branch, itr_ifsc, itr_bank_name, itr_category, itr_filling_date ) VALUES('$username', '$itr_pan_number', '$itr_dob', '$itr_first_name', '$itr_middle_name', '$itr_last_name', '$itr_pan_number_fill', '$itr_vill_build', '$itr_area_locality', '$itr_city_district', '$itr_state', '$itr_country', '$itr_email', '$itr_mobile_number', '$itr_aadhar', '$itr_deductions', '$itr_acc_numb', '$itr_acc_branch', '$itr_acc_ifsc', '$itr_bank_name', '$itr_category', now() )";

                        $result = mysqli_query($con, $sql);

                        if($result) {

                            $send_to = sendto();
                            $subject = "New ITR Reg Form Submitted";

                            $header = "From : ". 'incomehouse' . "\r\n";
                            $header .= "Reply To : ".'do not reply'. "\r\n";

                            $message = "Submitted By : " . $username . "\r\n";
                            $message .= "Pan Number : " . $itr_pan_number . "\r\n";
                            $message .= "D-O-B : " . $itr_dob . "\r\n";

                            $message .= "First Name : ". $itr_first_name . "\r\n";
                            $message .= "Middle Name : " . $itr_middle_name. "\r\n";
                            $message .= "Last Name : " . $itr_last_name . "\r\n";
                            $message .= "Pan Number : " . $itr_pan_number_fill . "\r\n";
                            $message .= "Vill Building : " . $itr_vill_build . "\r\n";
                            $message .= "Area Locality : " . $itr_area_locality  . "\r\n";
                            $message .= "City District : " . $itr_city_district  . "\r\n";
                            $message .= "State : " . $itr_state . "\r\n";
                            $message .= "Country : " . $itr_country  . "\r\n";
                            $message .= "Email : " . $itr_email  . "\r\n";
                            $message .= "Mobile Number : " . $itr_mobile_number  . "\r\n";
                            $message .= "Aadhar Number : " . $itr_aadhar  . "\r\n";
                            $message .= "ITR Deduction : " . $itr_deductions . "\r\n";
                            $message .= "ACC Number : " . $itr_acc_numb  . "\r\n";
                            $message .= "ACC Branch : " . $itr_acc_branch  . "\r\n";
                            $message .= "ACC IFSC : " . $itr_acc_ifsc  . "\r\n";
                            $message .= "ACC Bank Name : " . $itr_bank_name . "\r\n";
                            $message .= "ITR Category : " . $itr_category . "\r\n";

                            $itr_send = mail($send_to, $subject, $message, $header);

                        }
                        if($itr_send) {
                            echo "<div class='text-success'> Form has been submitted </div>";
                        } else {
                            echo "<div class='text-danger'> Something Went Wrong </div>";
                        }
                    }
                }
            ?>
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

