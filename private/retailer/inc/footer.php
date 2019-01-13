<div class="sidebar-overlay" id="sidebar-overlay"></div>
    <div class="sidebar-mobile-menu-handle" id="sidebar-mobile-menu-handle"></div>
        <div class="mobile-menu-handle"></div>
        <div class="modal fade" id="modal-media">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Media Library</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            <span class="sr-only">Close</span>
                        </button>
                    </div>
                    <div class="modal-body modal-tab-container">
                        <ul class="nav nav-tabs modal-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link" href="#gallery" data-toggle="tab" role="tab">Gallery</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="#upload" data-toggle="tab" role="tab">Upload</a>
                            </li>
                        </ul>
                        <div class="tab-content modal-tab-content">
                            <div class="tab-pane fade" id="gallery" role="tabpanel">
                                <div class="images-container">
                                    <div class="row"> </div>
                                </div>
                            </div>
                            <div class="tab-pane fade active in" id="upload" role="tabpanel">
                                <div class="upload-container">
                                    <div id="dropzone">
                                        <form action="/" method="POST" enctype="multipart/form-data" class="dropzone needsclick dz-clickable" id="demo-upload">
                                            <div class="dz-message-block">
                                                <div class="dz-message needsclick"> Drop files here or click to upload. </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Insert Selected</button>
                    </div>
                </div>
                <!-- /.modal-content -->
                </div>
                 <!-- /.modal-dialog -->
                </div>
                <!-- /.modal -->
                <div class="modal fade" id="confirm-modal">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">
                                    <i class="fa fa-warning"></i> Alert</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>Are you sure want to do this?</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary" data-dismiss="modal">Yes</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                <!-- /.modal -->
            </div>
        </div>

        <!-- Reference block for JS -->
        <?php    
            if(isset($_POST['b-contact-quick-send'])) {

                $q_c_username = h($_POST['q_c_name']);
                $q_c_message = h($_POST['q_c_message']);

                if(is_blank($q_c_username) || is_blank($q_c_message)) {
                    echo "<script type='text/javascript'>
                    alert('Fields cannot be empty ');
                    </script>";
                } else {
                    $to = sendto();
                    $subject = 'New Customer Support mail';
    
                    $header = "From : " . 'incomehouse customer support' .  "\r\n". "<br>";
                    $header .= "Reply To : " .'do not reply'. "\r\n". "<br>";
    
                    $message = "Username : " . $username . "\r\n". "<br>";
                    $message .= "Message : " . $message . "\r\n". "<br>";
    
                    $q_c_send = mail($to, $subject , $header, $message);
                    if($q_c_send) {
                        echo "<script type='text/javascript'>
                        alert('We will contact as soon as possible');
                        </script>";
                    } else {
                        echo "<script type='text/javascript'>
                        alert('Something Went Wrong');
                        </script>";
                    }
                }
            }
        ?>
        <div class="ref" id="ref">
            <div class="color-primary"></div>
            <div class="chart">
                <div class="color-primary"></div>
                <div class="color-secondary"></div>
            </div>
        </div>
        <!-- contact form -->
        <section class="b-contact-quick">
            <div class="card-title b-contact-quick-title py-3 text-white px-3 mb-0">
                Customer Care 
                <!-- <p class=''>or Contact us at: 9162372324, 9128499426</p> -->
            </div>
            <div class="card px-3 py-3 mb-0">
                <form action="" method="post">
                    <div class="form-group mb-4">
                        <label for="name">Your name</label>
                        <input type="text" name="q_c_name" placeholder="your name" id="name" class="form-control">
                    </div>

                    <div class="form-group mb-4">
                        <label for="message">Your message</label>
                        <textarea name="q_c_message" id="message" cols="30" rows="3" class="form-control"></textarea>
                    </div>

                    <input type="submit" value="send" name="b-contact-quick-send" class="btn px-5 py-2 bg-success text-white  m-auto d-block">
                </form>
            </div>
        </section>

        <!-- End of contact form -->
        <script src="js/vendor.js"></script>
        <script src="js/jquery.marquee.min.js"></script>
        <script src="js/app.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>