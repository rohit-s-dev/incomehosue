
<?php include "inc/header.php"; ?>
<?php include "inc/top-bar.php"; ?>
<?php include "inc/side-nav.php"; ?>

<div class="container-fluid my-5 py-5">
    <div class="col-12 text-white p-2 mb-3" style=" background: #3a4651; ">
        <h4 class="text-center text-uppercase">Partnership Registration</h4>
    </div>

    <form action="" method="post"> 
    <!-- Firm name -->
       <div class="row">

        <div class="col-md-3">
            <div class="form-group">
            <label for="part_firm_name">1 : Firm Name<span class="text-danger">*</span></label>
            </div>
        </div>

        <div class="col-md-9">
           <div class="form-group">
           <input type="text" class="form-control" id="part_firm_name" name="part_firm_name" placeholder="firm name" required>
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
            <input type="text" class="form-control" id="part_proprietorship_name" name="part_proprietorship_name" placeholder="proprietorship name" required>
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
            <input type="text" class="form-control" id="part_aadhar_number" name="part_aadhar_number" placeholder="aadhar number" required>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
            <label for="part_pan_number">4 : Pan Number<span class="text-danger">*</span></label>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
            <input type="text" class="form-control" id="part_pan_number" name="part_pan_number" placeholder="pan number" required>
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
            <input type="text" class="form-control" id="part_ward_no" name="part_ward_no" placeholder="ward no" required>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
            <label for="part_circle_no">6 : Circle No<span class="text-danger">*</span></label>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
            <input type="text" class="form-control" id="part_circle_no" name="part_circle_no" placeholder="circle no" required>
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
            <input type="text" class="form-control" id="part_holiding_no" name="part_holiding_no" placeholder="holiding no" required>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
            <label for="part_mobile_no">8 : Mobile No<span class="text-danger">*</span></label>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
            <input type="text" class="form-control" id="part_mobile_no" name="part_mobile_no" placeholder="mobile_no" required>
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
            <input type="email" class="form-control" id="part_email_id" name="part_email_id" placeholder="email id" required>
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
                        <input type="file" name="part_aadhar_file" id="part_aadhar_file" required class="form-control">
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="part_pan_card_file">Pan Card</label>
                        <input type="file" name="part_pan_card_file" id="part_pan_card_file" required class="form-control">
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="part_shop_banner">Shop photo with banner</label>
                        <input type="file" name="part_shop_banner" id="part_shop_banner" required class="form-control">
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="part_rent_agreement">Rent Agreement</label>
                        <input type="file" name="part_rent_agreement" id="part_rent_agreement" required class="form-control">
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