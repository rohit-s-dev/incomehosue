<?php include "inc/header.php"; ?>
<?php include "inc/top-bar.php"; ?>
<?php include "inc/side-nav.php"; ?>
<?php session_start(); ?>

<div class="container-fluid my-5 py-5">
    <div class="col-12 text-white p-2 mb-3" style=" background: #3a4651; ">
        <h4 class="text-center text-uppercase">Proprietorship Registration</h4>
    </div>

    
<?php 
    if(isset($_SESSION['username'])) {
        $username = $_SESSION['username'];
        $sql_s = "SELECT * FROM users WHERE username = $username";
    } 
?>

    <?php 
        if (isset($_POST['p_submit'])) {

            // Input Variables -----------------------------------------------------
            // Firm Name
            $_part_firm_name = h(escape($con, $_POST['part_firm_name']));

            // part_proprietorship_name
            $_part_proprietorship_name = h(escape($con, $_POST['part_proprietorship_name']));
            
            // part_aadhar_number
            $_part_aadhar_number = h(escape($con, $_POST['part_aadhar_number']));
            
            // part_pan_number
            $_part_pan_number = h(escape($con, $_POST['part_pan_number']));

            // part_ward_no
            $_part_ward_no = h(escape($con, $_POST['part_ward_no']));

            // part_circle_no
            $_part_circle_no = h(escape($con, $_POST['part_circle_no']));

            // part_holiding_no
            $_part_holiding_no = h(escape($con, $_POST['part_holiding_no']));

            // part_mobile_no
            $_part_mobile_no = h(escape($con, $_POST['part_mobile_no']));

            // part_email_id
            $_part_email_id = h(escape($con, $_POST['part_email_id']));

            // part_aadhar_file
            $_part_aadhar_file = $_FILES['part_aadhar_file']['name'];
            $_part_aadhar_file_temp = $_FILES['part_aadhar_file']['tmp_name'];
            
            // move uploaded files
            prop_m_u_f($_part_aadhar_file_temp, $_part_aadhar_file);
            

            // part_pan_card_file
            $_part_pan_card_file = $_FILES['part_pan_card_file']['name'];
            $_part_pan_card_file_temp = $_FILES['part_pan_card_file']['tmp_name'];

            // move uploaded files
            prop_m_u_f($_part_pan_card_file_temp, $_part_pan_card_file);
            
            // part_shop_banner
            $_part_shop_banner = $_FILES['part_shop_banner']['name'];
            $_part_shop_banner_temp = $_FILES['part_shop_banner']['tmp_name'];

            // part_rent_agreement
            $_part_rent_agreement = $_FILES['part_rent_agreement']['name'];
            $_part_rent_agreement_temp = $_FILES['part_rent_agreement']['tmp_name'];

            // move uploaded files
            prop_m_u_f($_part_rent_agreement_temp, $_part_rent_agreement);
            

           if (empty($_part_firm_name) || empty($_part_proprietorship_name) || empty($_part_aadhar_number) || empty($_part_pan_number) || empty($_part_ward_no) || empty($_part_circle_no) || empty($_part_holiding_no) || empty($_part_mobile_no)) {

            echo "<div class='text-danger my-3'>All Fields must be filled before submitting</div>";

           } else {
            // Sql 
            $_sql = "INSERT INTO proprietorship_form (prop_reatiler_name, prop_firm_name, prop_proprietorship_name, prop_aadhar_number, prop_pan_number, prop_ward_no, prop_circle_no, prop_holiding_no, prop_mobile_no, prop_email_id, prop_aadhar_file, prop_pan_card_file, prop_rent_agreement, prop_shop_banner) VALUES('$username', '$_part_firm_name', '$_part_proprietorship_name', '$_part_aadhar_number', '$_part_pan_number', '$_part_ward_no', '$_part_circle_no', '$_part_holiding_no', '$_part_mobile_no', '$_part_email_id', '$_part_aadhar_file', '$_part_pan_card_file', '$_part_shop_banner', '$_part_rent_agreement')";
            
            // sql_query  
            $_sql_query = mysqli_query($con, $_sql);
            
            if ($_sql_query)
                $to = sendto();
                $senderMail = ''; 
                $senderName = $username;
                $subject = "New Proprietorship Reg Form Submitted";

                $header = "From : ". 'incomehouse' . "\r\n";
                $header .= "Reply To : ".'do not reply'. "\r\n";

                $message = "Submitted By : " . "\r\n". "<br>";
                $message .= "Firm Name : " . $_part_firm_name . "\r\n". "<br>";
                $message .= "Proprietorship Name : " . $_part_proprietorship_name . "\r\n". "<br>";

                $message .= "Aadhar Number : ". $_part_aadhar_number . "\r\n". "<br>";
                $message .= "Pan Number : " . $_part_pan_number. "\r\n". "<br>";
                $message .= "Ward Number : " . $_part_ward_no . "\r\n". "<br>";
                $message .= "Circle Number : " . $_part_circle_no . "\r\n". "<br>";
                $message .= "Mobile Number : " . $_part_mobile_no . "\r\n". "<br>";
                $message .= "Eamil ID : " . $_part_email_id  . "\r\n". "<br>";
                $message .= " Aadharfile Name : " . $_part_aadhar_file  . "\r\n". "<br>";
                $message .= " Pan Card file Name : " . $_part_pan_card_file  . "\r\n". "<br>";
                $message .= " Rentagreement FileName : " . $_part_rent_agreement  . "\r\n". "<br>";
                $message .= " ShopBanner FileName : " . $_part_shop_banner  . "\r\n". "<br>";

                $files = array('images/uploads/proprietorship_doc/'.$_part_aadhar_file, 'images/uploads/proprietorship_doc/'.$_part_pan_card_file,'images/uploads/proprietorship_doc/'.$_part_rent_agreement, 'images/uploads/proprietorship_doc/'.$_part_shop_banner);

                $prop_send = multi_attach_mail($to, $subject, $message, $senderMail, $senderName, $files);
                
                // Mail sent
                if($prop_send) {
                    echo "<div class='text-success my-3'>Form submited</div>";
                } else {
                    echo "<div class='text-danger my-3'>Something Went Wrong</div>";
                }
            }
        }
    ?>

    <form action="" method="post" enctype="multipart/form-data" > 
    <!-- Firm name -->
       <div class="row">
        <div class="col-md-3">
            <div class="form-group">
            <label for="part_firm_name">1 : Firm Name<span class="text-danger">*</span></label>
            </div>
        </div>

        <div class="col-md-9">
           <div class="form-group">
           <input type="text" class="form-control" id="part_firm_name" name="part_firm_name" placeholder="firm name" >
           </div>
        </div>

       </div><!-- End of Firm name -->

        <!-- Proprietorship Name -->
       <div class="row">
        <div class="col-md-3">
            <div class="form-group">
            <label for="part_proprietorship_name">2 : Proprietorship Name<span class="text-danger">*</span></label>
            </div>
        </div>

        <div class="col-md-9">
            <div class="form-group">
            <input type="text" class="form-control" id="part_proprietorship_name" name="part_proprietorship_name" placeholder="proprietorship name" >
            </div>
        </div>

       </div><!-- End of Proprietorship Name -->

       <!-- Aadhar Number / Pan Number -->
       <div class="row">
        <div class="col-md-3">
            <div class="form-group">
            <label for="part_aadhar_number">3 : Aadhar Number<span class="text-danger">*</span></label>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
            <input type="text" class="form-control" id="part_aadhar_number" name="part_aadhar_number" placeholder="aadhar number" >
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
            <label for="part_pan_number">4 : Pan Number<span class="text-danger">*</span></label>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
            <input type="text" class="form-control" id="part_pan_number" name="part_pan_number" placeholder="pan number" >
            </div>
        </div>
       </div><!-- Aadhar Number / Pan Number -->

       <!-- Ward No / Circle No -->
       <div class="row">
        <div class="col-md-3">
            <div class="form-group">
            <label for="part_ward_no">5 : Ward No<span class="text-danger">*</span></label>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
            <input type="text" class="form-control" id="part_ward_no" name="part_ward_no" placeholder="ward no" >
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
            <label for="part_circle_no">6 : Circle No<span class="text-danger">*</span></label>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
            <input type="text" class="form-control" id="part_circle_no" name="part_circle_no" placeholder="circle no" >
            </div>
        </div>
       </div><!-- Ward No / Circle No -->

       <!-- Holding No / Mobile No -->
       <div class="row">
        <div class="col-md-3">
            <div class="form-group">
            <label for="part_holiding_no">7 : Holding No :<span class="text-danger">*</span></label>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
            <input type="text" class="form-control" id="part_holiding_no" name="part_holiding_no" placeholder="holiding no" >
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
            <label for="part_mobile_no">8 : Mobile No<span class="text-danger">*</span></label>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
            <input type="text" class="form-control" id="part_mobile_no" name="part_mobile_no" placeholder="mobile_no" >
            </div>
        </div>
       </div><!-- Ward No / Circle No -->

       <!-- Email Id -->
       <div class="row">
        <div class="col-md-3">
            <div class="form-group">
            <label for="part_email_id">9 : Email Id :<span class="text-danger">*</span></label>
            </div>
        </div>
        <div class="col-md-9">
            <div class="form-group">
            <input type="email" class="form-control" id="part_email_id" name="part_email_id" placeholder="email id" >
            </div>
        </div>
       </div><!-- Email Id -->

       <!-- Nature Of Business -->
       <div class="row">
        <div class="col-12 text-white p-2 mb-3" style=" background: #3a4651; ">
            <h6 class="text-uppercase">6 : Documents</h6>
        </div>

        <div class="col-12">
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="part_aadhar_file">Aadhar Card</label>
                        <input type="file" name="part_aadhar_file" id="part_aadhar_file"  class="form-control up_img">
                        <img src="" width="70" class="img-fluid up_img_tag" />
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="part_pan_card_file">Pan Card</label>
                        <input type="file" name="part_pan_card_file" id="part_pan_card_file"  class="form-control up_img">
                        <img src="" width="70" class="img-fluid up_img_tag" />
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="part_shop_banner">Shop photo with banner</label>
                        <input type="file" name="part_shop_banner" id="part_shop_banner"  class="form-control up_img">
                        <img src="" width="70" class="img-fluid up_img_tag" />
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="part_rent_agreement">Rent Agreement</label>
                        <input type="file" name="part_rent_agreement" id="part_rent_agreement"  class="form-control up_img">
                    </div>
                </div>
            </div>
        </div>
       </div>
       <!-- End Of Nature Of Business -->
       <input type="submit" value="Submit" name="p_submit" class="btn px-5 py-2 bg-success text-white  m-auto d-block">
    </form>

</div>
<?php include "inc/footer.php"; ?>