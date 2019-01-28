<?php include "inc/header.php"; ?>
<?php include "inc/top-bar.php"; ?>
<?php include "inc/side-nav.php"; ?>

<div class="container-fluid my-5 py-5">
   <div class="col-12 text-white p-2 mb-3" style=" background: #3a4651; ">
      <h6 class="">BHARAT PAY CARD<span class="text-muted ml-3">Every field is Required</span></h6>
   </div>

   <?php 
  
  if(is_post_request()) {
    
  }
   
   
   ?>

        <div class="col-md-10 m-auto">
        <form action="" method="post" enctype="multipart/form-data">
           <!-- Bharat Pay Card -->
            <div class="form-group">
                <div class="row">
                    <div class="col-md-6">
                        <label for="name">Name :-</label>
                        <input type="text" name="name" id="name" class="form-control" placeholder="name">
                    </div>
                    <div class="col-md-6">
                        <label for="pan_no">Pan No :-</label>
                        <input type="text" name="pan_no" id="pan_no" class="form-control" placeholder="pan number">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-6">
                        <label for="aadhar_no">Aadhar No :-</label>
                        <input placeholder="Aadhar number" type="text" name="aadhar_no" id="aadhar_no" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label for="d_o_b">D-O-B :-</label>
                        <input type="text" name="d_o_b" id="d_o_b" class="form-control">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="mob_no">Mobile Number :-</label>
                <input type="text" name="mob_no" id="mob_no" class="form-control" placeholder="mobile number">
            </div>
            
            <div class="form-group">
                <label for="email_id">Email ID :-</label>
                <input type="text" name="email_id" placeholder="email id" id="email_id" class="form-control">
            </div>

            <h5>Bank Details :-</h5>

            <div class="form-group">
                <div class="row">
                    <div class="col-md-6">
                        <label for="ac_number">A/C No :-</label>
                        <input type="text" name="ac_number" id="ac_number" class="form-control" placeholder="account number">
                    </div>
                    <div class="col-md-6">
                        <label for="ifsc_code">IFSC Code :-</label>
                        <input type="text" placeholder="IFSC code" name="ifsc_code" id="ifsc_code" class="form-control">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col-md-6">
                        <label for="bank_name">Bank Name :-</label>
                        <input type="text" placeholder="bank name" name="bank_name" id="bank_name" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label for="branch_name">Branch Name :-</label>
                        <input type="text" name="branch_name" placeholder="branch name" id="branch_name" class="form-control">
                    </div>
                </div>
            </div>

            <h5>Documents :-</h5>
            
            <div class="form-group">
                <div class="row">
                    <div class="col-md-6">
                        <label for="pan_card_doc">Pan Card :-</label>
                        <input type="file" name="pan_card_doc" id="pan_card_doc" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label for="aadhar_card">Aadhar Card :-</label>
                        <input type="file" name="aadhar_card" id="aadhar_card" class="form-control">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="bank_pass_doc">Bank Passbook With Statement :-</label>
                <input type="file" name="bank_pass_doc" id="bank_pass_doc" class="form-control">
            </div>

            <div class="form-group">
                <input type="submit" value="Submit" name="bharat_pay_submit" class="btn px-5 py-2 bg-success text-white  m-auto d-inline-block">
            </div>
         </form>
        </div>
   
</div>
<?php include "inc/footer.php"; ?>