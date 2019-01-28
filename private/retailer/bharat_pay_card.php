<?php include "inc/header.php"; ?>
<?php include "inc/top-bar.php"; ?>
<?php include "inc/side-nav.php"; ?>

<div class="container-fluid my-5 py-5">
   <div class="col-12 text-white p-2 mb-3" style=" background: #3a4651; ">
      <h6 class="">BHARAT PAY CARD<span class="text-muted ml-3">Every field is Required</span></h6>
   </div>

   <?php 
    if(isset($_SESSION['username'])) {
        $username = $_SESSION['username'];
        $sql_s = "SELECT * FROM users WHERE username = $username";
    } 
?>

   <?php 


    //Bharat Pay 
  if(is_post_request()) {

    // Escaping Inputs  
    $name = escape($con, h($_POST['name']));
    $pan_no = escape($con, h($_POST['pan_no']));
    $aadhar_no = escape($con, h($_POST['aadhar_no']));

    $d_o_b = escape($con, h($_POST['aadhar_no']));
    $mob_no = escape($con, h($_POST['mob_no']));

    $email_id = escape($con, h($_POST['email_id']));
    $ac_number = escape($con, h($_POST['ac_number']));
    $ifsc_code = escape($con, h($_POST['ifsc_code']));
    $bank_name = escape($con, h($_POST['bank_name']));
    $branch_name = escape($con, h($_POST['branch_name']));
    
    // $pan_card doc
    $pan_card_doc =  $_FILES['pan_card_doc']['name'];
    $pan_card_doc_tmp = $_FILES['pan_card_doc']['tmp_name'];

    // $aadhar_card
    $aadhar_card_doc = $_FILES['aadhar_card']['name'];
    $aadhar_card_tmp = $_FILES['aadhar_card']['tmp_name'];

    // $bank_pass_doc
    $bank_pass_doc = $_FILES['bank_pass_doc']['name'];
    $bank_pass_doc_tmp = $_FILES['bank_pass_doc']['tmp_name'];
    
    if(is_blank($name) || is_blank($pan_no) || is_blank($aadhar_no) || is_blank($d_o_b) || is_blank($mob_no) || is_blank($email_id) || is_blank($ac_number) || is_blank($ifsc_code) || is_blank($bank_name) || is_blank($branch_name) || is_blank($pan_card_doc) || is_blank($aadhar_card_doc) || is_blank($bank_pass_doc) ) {

        echo "<div class='text-danger'>Fields Can't be empty .</div>";

    }  elseif (less_than($name , 3) && less_than($pan_no , 3) && less_than($aadhar_no , 3) && less_than($mob_no , 3) && less_than($ac_number , 3) && less_than($ifsc_code , 3) && less_than($bank_nam , 3) && less_than($branch_name , 3)) {
        echo "<div class='text-danger'>Characters must be graeater than 3 </div>";
    } elseif (!str($mob_no)) {
        
        echo "<div class='text-danger'>Invalid Mobile Number .</div>";

    } elseif (e_valid($email_id) === false) {
        echo "<div class='text-danger'>Invalid Email ID .</div>";
    }  else {

        $sql = "INSERT INTO bharat_pay(submit_by, b_name, pan_no, aadhar_no, d_o_b, mob_number, email_id, acc_numb, ifsc_code, bank_name, branch_name, pan_card_doc, aadhar_card_doc, bank_pass_w_st, s_date) ";
        $sql .= " VALUES('$username' ,'$name', '$pan_no', '$aadhar_no', '$d_o_b', '$mob_no', '$email_id', '$ac_number', '$ifsc_code', '$bank_name', '$branch_name', '$pan_card_doc', '$aadhar_card_doc', '$bank_pass_doc', now() ) ";
        $sql_query = mysqli_query($con, $sql);

        if($sql_query) {
             
            //moving uploade files
            $pathname = 'bharat_pay';
            m_u_f($pan_card_doc_tmp, $pathname, $pan_card_doc);
            m_u_f($aadhar_card_tmp, $pathname, $aadhar_card_doc);
            m_u_f($bank_pass_doc_tmp, $pathname, $bank_pass_doc);
            
                $to = sendto();
                $subject = "New Bharat Reg Form Submitted";
                $senderMail = 'test'; 
                $senderName = 'test';

                $header = "From : " . 'incomehouse' .  "\r\n". "<br>";
                $header .= "Reply To : " .'do not reply'. "\r\n". "<br>";

                $message = "Submitted By : " . $username . "\r\n". "<br>";
                $message .= "Name : " . $name . "\r\n". "<br>";
                $message .= "Pan Number : " . $pan_no . "\r\n". "<br>";
                $message .= "Date Of Birth : " . $d_o_b . "\r\n". "<br>";

                $message .= "Mobile Number : ". $mob_no . "\r\n". "<br>";
                $message .= "Aadhar Number : " . $aadhar_no . "\r\n". "<br>";
                $message .= "Account Number : " . $ac_number . "\r\n". "<br>";
                $message .= "IFSC Code : " . $ifsc_code . "\r\n". "<br>";
                $message .= "Bank Name : " . $bank_name  . "\r\n". "<br>";
                $message .= "Branch Name : " . $branch_name  . "\r\n". "<br>";
                $message .= "Pan Card file : " . $pan_card_doc  . "\r\n". "<br>";
                $message .= "Aadhar Card File : " . $aadhar_card_doc  . "\r\n". "<br>";
                $message .= "Bank Passbook With Statement : " . $bank_pass_doc  . "\r\n". "<br>";
                
                $files = array('images/uploads/bharat_pay/'.$aadhar_card_doc,'images/uploads/bharat_pay/'.$pan_card_doc,'images/uploads/bharat_pay/'.$bank_pass_doc);
                
                // Mail Send
                $bharat_send = multi_attach_mail($to, $subject, $message, $senderMail, $senderName, $files);

            if($bharat_send) {
                echo "<div class='text-success'>Form Submitted !</div>";
            } else {
                echo "<div class='text-danger'>Something Went Wrong !</div>";
            }
        }
    }
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
                        <input type="date" name="d_o_b" id="d_o_b" class="form-control">
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