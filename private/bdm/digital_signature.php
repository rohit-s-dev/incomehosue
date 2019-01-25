
<?php include "inc/header.php"; ?>
<?php include "inc/top-bar.php"; ?>
<?php include "inc/side-nav.php"; ?>

<div class="container-fluid my-5 py-5">
    <div class="col-12 text-white p-2 mb-3" style=" background: #3a4651; ">
        <h4 class="text-center text-uppercase">Digital Signature</h4>
    </div>

    <div class="download_pdf">
        <h5>Download PDF Form to registration of DIgital Signature</h5>
        <a href="images/d_file/individual-form.pdf" download >Digital Signature PDF Form</a>
    </div>

    
    
    <form method="post" enctype="multipart/form-data" action="">
        <?php 

        if(isset($_SESSION['username'])) {
            $username = $_SESSION['username'];
            $sql_s = "SELECT * FROM users WHERE username = $username";
        } 
        // Uploading digital signature form
        if(is_post_request()) {
            $dsc_filname = $_FILES['upload_file_dsc']['name'];
            $dsc_filname_tmp = $_FILES['upload_file_dsc']['tmp_name'];

            if(is_blank($dsc_filname)) {
                echo "<div class='text-danger'>Please choose a file</div>";
            } else {
                
              $dsc_file = dsc_m_u_f($dsc_filename_tmp, $dsc_filname);
                
              if($dsc_file) {
                $files = 'images/uploads/digital_signature/'.$dsc_filname;

                    $to = sendto();
                    $subject = "New DSC Submitted";
                    $senderMail = 'test'; 
                    $senderName = 'test';

                    $header = "From : " . 'incomehouse' .  "\r\n". "<br>";
                    $header .= "Reply To : " .'do not reply'. "\r\n". "<br>";

                    $message = "Submitted By : " . $username . "\r\n". "<br>";

                $dsc_send = multi_attach_mail($to, $subject, $message, $senderMail, $senderName, $files);

              }
              if($dsc_send) {
                echo "<div class='text-succes'>File uploaded and submitted .</div>";
                } else {
                echo "<div class='text-danger'>Something went wrong .</div>";
                }
            }
        }

        ?>
        <div class="form-group">
            <label for="upload_file_dsc">Upload File</label>
            <input class="form-control" id="upload_file_dsc" name="upload_file_dsc" type="file">
        </div>
        
        <div class="form-group">
            <input class="btn btn-primary" id="upload_file" name="submit_upload_file" type="submit">
        </div>
    </form>
</div>
<?php include "inc/footer.php"; ?>