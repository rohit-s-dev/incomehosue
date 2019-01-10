<?php include "inc/header.php"; ?>
<?php include "inc/top-bar.php"; ?>
<?php include "inc/side-nav.php"; ?>

<div class="container-fluid my-5 py-5">
    <div class="col-12 text-white p-2 mb-3" style=" background: #3a4651; ">
        <h6 class="">MSME REGISTRAITON</h6>
    </div>
    <form action="" method="post" enctype="multipart/form-data"> 
    <!-- Firm name -->
    <?php 
        if(isset($_SESSION['username'])) {
            $username = $_SESSION['username'];
            $sql_s = "SELECT * FROM users WHERE username = $username";
        } 

        if(is_post_request()) {

            $firmname = escape($con, $_POST['msme_firm_name']);
            $msme_applicant_name = escape($con, $_POST['msme_applicant_name']);
            $msme_mob_numb = escape($con, $_POST['msme_mobile_number']);
            $msme_pan_number = escape($con, $_POST['msme_pan_number']);
            $msme_aadhar_no = escape($con, $_POST['msme_aadhar_no']);
            $msme_capital = escape($con, $_POST['msme_capital']);
            $msme_email_id = escape($con, $_POST['msme_email_id']);
            $msme_address = escape($con, $_POST['msme_address']);

            $msme_aadhar_file = $_FILES['msme_aadhar_file']['name'];
            $msme_aadhar_file_tmp = $_FILES['msme_aadhar_file']['tmp_name'];

            $msme_pan_card_file = $_FILES['msme_pan_card_file']['name'];
            $msme_pan_card_file_tmp = $_FILES['msme_pan_card_file']['tmp_name'];

            if(is_blank($firmname) || is_blank($msme_applicant_name) || is_blank($msme_mob_numb) || is_blank($msme_pan_number) || is_blank($msme_aadhar_no) || is_blank($msme_capital) || is_blank($msme_email_id) || is_blank($msme_address) || is_blank($msme_aadhar_file) || is_blank($msme_pan_card_file)) {

                echo "<div class='text-danger'>Fields Can't be empty .</div>";

            } elseif (m_numb($msme_mob_numb) === false) {
                
                echo "<div class='text-danger'>Mobile number is invalid</div>";
            
            } else {
                $sql = "INSERT INTO msme_reg (msme_ret_name, msme_firmname, msme_applicant_name, msme_mob_numb, msme_aadhar_numb, msme_pan_card, msme__email_id, msme_address, msme_aadhar_jpeg, msme_pan_jpeg, msme_date_fill, msme_capital) VALUES('$username', '$firmname', '$msme_applicant_name', '$msme_mob_numb', '$msme_aadhar_no', '$msme_pan_number', '$msme_email_id', '$msme_address', '$msme_aadhar_file', '$msme_pan_card_file', now(), '$msme_capital' )";

                $result = mysqli_query($con, $sql);

                if($result) {
                    echo "<div class='text-success'>Form has been submited</div>";
                    msme_m_u_f($msme_aadhar_file_tmp, $msme_aadhar_file);
                    msme_m_u_f($msme_pan_card_file_tmp, $msme_pan_card_file);
                    
                    // mail
                    $to = sendto();
                    $subject = "New MSME Reg Form Submitted";
                    $senderMail = ''; 
                    $senderName = '';

                    $header = "From : " . 'incomehouse' .  "\r\n". "<br>";
                    $header .= "Reply To : " .'do not reply'. "\r\n". "<br>";

                    $message = "Submitted By : " . $username . "\r\n". "<br>";
                    $message .= "Firm Name : " . $firmname . "\r\n". "<br>";
                    $message .= "Applicant Name : " . $msme_applicant_name . "\r\n". "<br>";

                    $message .= "Mobile Number : ". $msme_mob_numb . "\r\n". "<br>";
                    $message .= "Aadhar Number : " . $msme_aadhar_no . "\r\n". "<br>";
                    $message .= "Pan Number : " . $msme_pan_number . "\r\n". "<br>";
                    $message .= "Email ID : " . $msme_email_id . "\r\n". "<br>";
                    $message .= "Address : " . $msme_address  . "\r\n". "<br>";
                    $message .= "Aadhar File : " . $msme_aadhar_file  . "\r\n". "<br>";
                    $message .= "Pan Card file : " . $msme_pan_card_file  . "\r\n". "<br>";
                    $message .= "Capital : " . $msme_capital  . "\r\n". "<br>";
                    
                    $files = array('images/uploads/msme/'.$msme_aadhar_file, 'images/uploads/msme/'.$msme_pan_card_file);
                    
                    // $msme_send = mail($to, $subject ,$header, $message);
                    $msme_send = multi_attach_mail($to, $subject, $message, $senderMail, $senderName, $files);
                } 

                if($msme_send) {
                    
                    echo "<div class='text-success my-3'>Form submited</div>"; 
                    
                }   else {
                    
                    echo "<div class='text-danger my-3'>Something Went Wrong</div>";
                }
            }
            
        }    
    ?>
       <div class="row">
        <div class="col-md-3">
            <div class="form-group">
            <label for="msme_firm_name">1 : Firm Name<span class="text-danger">*</span></label>
            </div>
        </div>
        <div class="col-md-9">
           <div class="form-group">
           <input type="text" class="form-control" id="msme_firm_name" name="msme_firm_name" placeholder="firm name" >
           </div>
        </div>

       </div><!-- End of Firm name -->

        <!-- Proprietorship Name -->
       <div class="row">
        <div class="col-md-3">
            <div class="form-group">
            <label for="msme_applicant_name">2 : Applicant Name<span class="text-danger">*</span></label>
            </div>
        </div>

        <div class="col-md-9">
            <div class="form-group">
            <input type="text" class="form-control" id="msme_applicant_name" name="msme_applicant_name" placeholder="applicant name" >
            </div>
        </div>

       </div><!-- End of Proprietorship Name -->

       <!-- Aadhar Number / Pan Number -->
       <div class="row">
        <div class="col-md-3">
            <div class="form-group">
            <label for="msme_mobile_number">3 : Mobile Number<span class="text-danger">*</span></label>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
            <input type="text" class="form-control" id="msme_mobile_number" name="msme_mobile_number" placeholder="mobile number +91 " >
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
            <label for="msme_pan_number">4 : Pan Number<span class="text-danger">*</span></label>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <input type="text" class="form-control" id="msme_pan_number" name="msme_pan_number" placeholder="pan number" >
            </div>
        </div>
       </div><!-- Aadhar Number / Pan Number -->

       <!-- Ward No / Circle No -->
       <div class="row">
        <div class="col-md-3">
            <div class="form-group">
                <label for="msme_aadhar_no">5 : Aadhar No<span class="text-danger">*</span></label>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <input type="text" class="form-control" id="msme_aadhar_no" name="msme_aadhar_no" placeholder="aadhar no" >
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label for="msme_capital">6 : Capital<span class="text-danger">*</span></label>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <input type="text" class="form-control" id="msme_capital" name="msme_capital" placeholder="Capital" >
            </div>
        </div>
       </div><!-- Ward No / Circle No -->

       <!-- Email Id -->
       <div class="row">
        <div class="col-md-3">
            <div class="form-group">
                <label for="msme_email_id">7 : Email Id :<span class="text-danger">*</span></label>
            </div>
        </div>
        <div class="col-md-9">
            <div class="form-group">
                <input type="email" class="form-control" id="msme_email_id" name="msme_email_id" placeholder="email id" >
            </div>
        </div>
       </div><!-- Email Id -->

       <!-- Address -->
       <div class="row">
            <div class="col-md-3">
                <div class="form-group">
                <label for="msme_address">8 : Address :<span class="text-danger">*</span></label>
                </div>
            </div>
            <div class="col-md-9">
                <div class="form-group">
                    <textarea name="msme_address" id="msme_address" cols="30" rows="4" class="form-control" placeholder="your address"></textarea>
                </div>
            </div>
       </div><!-- Address -->

       <!-- Document -->
       <div class="row">

            <div class="col-12 text-white p-2 mb-3" style=" background: #3a4651; ">
                <h6 class="text-uppercase">9 : Documents</h6>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="msme_aadhar_file">Aadhar Card</label>
                    <input type="file" name="msme_aadhar_file" id="msme_aadhar_file"  class="form-control">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="msme_pan_card_file">Pan Card</label>
                    <input type="file" name="msme_pan_card_file" id="msme_pan_card_file"  class="form-control">
                </div>
            </div>

       </div>
       <input type="submit" value="Submit" name="msme_submit" class="btn px-5 py-2 bg-success text-white  m-auto d-block">
    </form>

</div>
<?php include "inc/footer.php"; ?>