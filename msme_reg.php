<?php include "inc/header.php"; ?>
<?php include "inc/top-bar.php"; ?>
<?php include "inc/side-nav.php"; ?>

<div class="container-fluid my-5 py-5">
    <div class="col-12 text-white p-2 mb-3" style=" background: #3a4651; ">
        <h6 class="">MSME REGISTRAITON</h6>
    </div>

    <form action="" method="post"> 
    <!-- Firm name -->
       <div class="row">

        <div class="col-md-3">
            <div class="form-group">
            <label for="msme_firm_name">1 : Firm Name<span class="text-danger">*</span></label>
            </div>
        </div>

        <div class="col-md-9">
           <div class="form-group">
           <input type="text" class="form-control" id="msme_firm_name" name="msme_firm_name" placeholder="firm name" required>
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
            <input type="text" class="form-control" id="msme_applicant_name" name="msme_applicant_name" placeholder="applicant name" required>
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
            <input type="text" class="form-control" id="msme_mobile_number" name="msme_mobile_number" placeholder="mobile number" required>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
            <label for="msme_pan_number">4 : Pan Number<span class="text-danger">*</span></label>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <input type="text" class="form-control" id="msme_pan_number" name="msme_pan_number" placeholder="pan number" required>
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
                <input type="text" class="form-control" id="msme_aadhar_no" name="msme_aadhar_no" placeholder="aadhar no" required>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label for="msme_capital">6 : Capital<span class="text-danger">*</span></label>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <input type="text" class="form-control" id="msme_capital" name="msme_capital" placeholder="Capital" required>
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
                <input type="email" class="form-control" id="msme_email_id" name="msme_email_id" placeholder="email id" required>
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
                    <input type="file" name="msme_aadhar_file" id="msme_aadhar_file" required class="form-control">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="msme_pan_card_file">Pan Card</label>
                    <input type="file" name="msme_pan_card_file" id="msme_pan_card_file" required class="form-control">
                </div>
            </div>

       </div>
       <input type="submit" value="Submit" name="msme_submit" class="btn px-5 py-2 bg-success text-white  m-auto d-block">
    </form>

</div>
<?php include "inc/footer.php"; ?>

