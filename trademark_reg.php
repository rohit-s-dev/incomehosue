<?php include "inc/header.php"; ?>
<?php include "inc/top-bar.php"; ?>
<?php include "inc/side-nav.php"; ?>

<div class="container-fluid my-5 py-5">
    <div class="col-12 text-white p-2 mb-3" style=" background: #3a4651; ">
        <h6 class="">TRADEMARK REGISTRAITON</h6>
    </div>

    <?php 
        if(isset($_SESSION['username'])) {
            $username = $_SESSION['username'];
            $sql_s = "SELECT * FROM users WHERE username = $username";
        } 
    ?>

    <form action="" method="post" enctype="multipart/form-data">
        <?php 
        // Comapany Trademark Registration
        if(is_post_request()) {

            $t_company_certificate = $_FILES['t_company_certificate']['name'];
            $t_company_certificate_tmp = $_FILES['t_company_certificate']['tmp_name'];

            $t_company_pan = $_FILES['t_company_pan']['name'];
            $t_company_pan_temp = $_FILES['t_company_pan']['tmp_name'];

            $t_company_m_number = h(escape($con, $_POST['t_company_m_number']));
            $t_company_email = h(escape($_POST['t_company_email']));

            $t_company_logo = $_FILES['t_company_logo']['name'];
            $t_company_logo_tmp = $_FILES['t_company_logo']['tmp_name'];

            if(is_blank($t_company_certificate) || is_blank($t_company_pan) ||is_blank($t_company_m_number) ||is_blank($t_company_email) ||is_blank($t_company_logo)) {
                echo "<div class='text-danger'>Fields can't be empty</div>";
            } elseif (e_valid($t_company_email) === false) {
                echo "<div class='text-danger'>Invalid Email</div>";
            } elseif (m_numb($t_company_m_number) === false) {
                echo "<div class='text-danger'>Invalid Number</div>";
            } else {
                
                $sql = "SELECT * FROM trademark_comp_reg (ret_name, company_cert, mobile_no, email_id, logo_file, fill_date) VALUES('$username', '$t_company_certificate', '$t_company_m_number', '$t_company_email', '$t_company_logo', now()) ";

                $result = mysqli_query($con, $sql);

                if($result) {

                    $files = trad_m_u_f($t_company_certificate_tmp, $t_company_certificate);
                    $files .= trad_m_u_f($t_company_pan_temp, $t_company_pan);
                    $files .= trad_m_u_f($t_company_logo_tmp, $t_company_logo);

                    $to = sendto();

                    $subject = "New Tradmark For Company Reg Form Submitted";

                    $header = "From : " . 'incomehouse' .  "\r\n";
                    $header .= "Reply To : " .'do not reply'. "\r\n";

                    $message = "Submitted By : " . $username . "\r\n";
                    $message .= "Company Certificate : " . $t_company_certificate . "\r\n";
                    $message .= "Company Mobile Number : " . $t_company_m_number . "\r\n";

                    $message .= "Company Email : ". $t_company_email . "\r\n";
                    $message .= "Comapny Logo : " . $t_company_logo . "\r\n";

                    
                    $trade_comp_send = multi_attach_mail($to, $subject, $message, $files);
                    
                    if ($trade_comp_send) {
                        echo "<div class='text-succes'>Form has been submitted</div>";
                    } else {
                        echo "<div class='text-danger'>Something Went Wrong</div>";
                    }
                }


            }
            
        }

        ?>

        <?php 
            // Individual Trademark Registration
            if(is_post_request()) {

                $t_i_aadhar = $_POST['t_i_aadhar'];
                $t_i_pan = $_POST['t_i_pan'];
                $t_i_mobile = $_POST['t_i_mobile'];
                $t_i_email = $_POST['t_i_email'];

                $t_i_logo = $_FILES['t_i_logo']['name'];
                $t_i_logo_tmp = $_FILES['t_i_logo']['tmp_name'];

                if(is_blank($t_i_aadhar) || is_blank($t_i_pan) ||is_blank($t_i_mobile) ||is_blank($t_i_email) ||is_blank($t_i_logo)) {
                    echo "<div class='text-danger'>Fields can't be empty</div>";
                } elseif (e_valid($t_i_email) === false) {
                    echo "<div class='text-danger'>Invalid Email</div>";
                } elseif (m_numb($t_i_mobile) === false) {
                    echo "<div class='text-danger'>Invalid Number</div>";
                } else {
                    
                    $sql = "SELECT * FROM trademark_indi_reg (ret_name, aadhar_number, pan_number, email_id, logo_file_ind, fill_date) VALUES('$username', '$t_i_aadhar', '$t_i_pan', '$t_i_email', '$t_i_logo', now()) ";

                    $result = mysqli_query($con, $sql);

                    if($result) {

                        trad_m_u_f($t_i_logo_tmp, $t_i_logo);

                        $send_to = sendto();

                        $subject = "New Trademark Individual Reg Form Submitted";

                        $header = "From : " . 'incomehouse' .  "\r\n";
                        $header .= "Reply To : " .'do not reply'. "\r\n";

                        $message = "Submitted By : " . $username . "\r\n";
                        $message .= "Aadhar Number : " . $t_i_aadhar . "\r\n";
                        $message .= "Company Mobile Number : " . $t_i_mobile . "\r\n";

                        $message .= "Company Email : ". $t_i_email . "\r\n";
                        $message .= "Comapny Logo : " . $t_i_logo . "\r\n";

                        $indi_comp_send = mail($send_to, $subject ,$header, $message);
                        
                        if ($indi_comp_send) {
                            echo "<div class='text-succes'>Form has been submitted</div>";
                        } else {
                            echo "<div class='text-danger'>Something Went Wrong</div>";
                        }
                    }

                }
                
            }
        
        ?>
        
        <div class="row">
            <div class="col-md-6">
                <div class="text-white p-2 mb-3" style=" background: #3a4651; ">
                    <h6 class="text-center">*Company*</h6>
                </div>

                <!-- Company Certificate -->
                <div class="row">
                    <div class="col-md-4">
                       <div class="form-group">
                       <label for="t_company_certificate">Company Certificate<span class="text-danger">*</span></label>
                       </div>
                    </div>

                    <div class="col-md-8">
                        <div class="form-group">
                        <input type="file" name="t_company_certificate" id="t_company_certificate" class="form-control" >
                        </div>
                    </div>
                </div>
                <!-- Company Certificate -->

                <!-- Company Pan -->
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                        <label for="t_company_pan">Company Pan<span class="text-danger">*</span></label>
                        </div>
                    </div>

                    <div class="col-md-8">
                       <div class="form-group">
                       <input type="file" name="t_company_pan" id="t_company_pan" class="form-control" >
                       </div>
                    </div>
                </div><!-- Company Pan -->


                <!-- Company Mobile Number -->
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                        <label for="t_company_m_number">Mobile No<span class="text-danger">*</span></label>
                        </div>
                    </div>

                    <div class="col-md-8">
                       <div class="form-group">
                       <input type="text" name="t_company_m_number" id="t_company_m_number" class="form-control" placeholder="+91" >
                       </div>
                    </div>
                </div><!-- Company Mobile Number -->

                <!-- Company Email ID -->
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                        <label for="t_company_email">Email ID<span class="text-danger">*</span></label>
                        </div>
                    </div>

                    <div class="col-md-8">
                        <div class="form-group">
                        <input type="text" name="t_company_email" id="t_company_email" class="form-control" placeholder="email" >
                        </div>
                    </div>
                </div><!-- Company Email ID -->

                <!-- Company Logo -->
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                        <label for="t_company_logo">LOGO file(Logo should be in png file)<span class="text-danger">*</span></label>
                        </div>
                    </div>

                    <div class="col-md-8">
                        <div class="form-group">
                        <input type="file" name="t_company_logo" id="t_company_logo" class="form-control" >
                        </div>
                    </div>
                </div><!-- Company Logo -->
                <input type="submit" value="Submit" name="t_submit" class="btn px-5 py-2 bg-success text-white  m-auto d-block">
            </div>
        </form> <!-- end of company trademark-->

        <!-- Indvidual trademark -->
        
        <div class="col-md-6">
            <div class="text-white p-2 mb-3" style=" background: #3a4651; ">
                <h6 class="text-center">*Individual*</h6>
            </div>

            <form action="" method="post">
                <!-- aadhar card -->
             <div class="row">
                 <div class="col-md-3">
                    <div class="form-group">
                        <label for="t_i_aadhar">Aadhar Number<span class="text-danger">*</span></label>
                    </div>
                 </div>
                 <div class="col-md-9">
                    <div class="form-group">
                        <input type="text" name="t_i_aadhar" id="t_i_aadhar" class="form-control">
                    </div>
                 </div>
             </div> <!-- end of aadhar card -->  

             <!-- Pan card -->
             <div class="row">
                 <div class="col-md-3">
                    <div class="form-group">
                        <label for="t_i_pan">Pan Number<span class="text-danger">*</span></label>
                    </div>
                 </div>
                 <div class="col-md-9">
                    <div class="form-group">
                        <input type="text" name="t_i_pan" id="t_i_pan" class="form-control">
                    </div>
                 </div>
             </div>  <!--End  of pan card --> 

             <!-- Mobile number -->
             <div class="row">
                 <div class="col-md-3">
                    <div class="form-group">
                        <label for="t_i_mobile">Mobile Number<span class="text-danger">*</span></label>
                    </div>
                 </div>
                 <div class="col-md-9">
                    <div class="form-group">
                        <input type="text" name="t_i_mobile" id="t_i_mobile" class="form-control">
                    </div>
                 </div>
             </div>  <!--End  of mobile number --> 

             <!-- Mobile number -->
             <div class="row">
                 <div class="col-md-3">
                    <div class="form-group">
                        <label for="t_i_email">Email ID :<span class="text-danger">*</span></label>
                    </div>
                 </div>
                 <div class="col-md-9">
                    <div class="form-group">
                        <input type="text" name="t_i_email" id="t_i_email" class="form-control">
                    </div>
                 </div>
             </div>  <!--End  of mobile number --> 

              <!--  Logo -->
              <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                        <label for="t_i_logo">LOGO file(Logo should be in png file)<span class="text-danger">*</span></label>
                        </div>
                    </div>

                    <div class="col-md-8">
                        <div class="form-group">
                        <input type="file" name="t_i_logo" id="t_i_logo" class="form-control" required>
                        </div>
                    </div>
                </div><!-- Logo -->

                <input type="submit" value="Submit" name="t_i_submit" class="btn px-5 py-2 bg-success text-white  m-auto d-block">
            </form>
        </div>

        <!--  End Of Indvidual trademark -->
        </div>
</div>
<?php include "inc/footer.php"; ?>

