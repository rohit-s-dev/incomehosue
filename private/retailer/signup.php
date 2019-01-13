<?php include "inc/header2.php"; ?>

<div class="auth">
        <div class="auth-container">
            <div class="card">
                <header class="auth-header">
                    <h1 class="auth-title">
                       Register </h1>
                </header>
                <div class="auth-content">
                    <?php 
                        err_msg('error', '<div class="text-danger my-2">Fields can\'t be empty</div>');
                        err_msg('error_numb', '<div class="text-danger my-2">Number Should be 10 digit (without +91)</div>');
                        err_msg('pass_error', '<div class="text-danger my-2">Password can\'t be less than 6 characters</div>');
                        err_msg('error_email', '<div class="text-danger my-2">Please type valid email address</div>');
                        err_msg('numb_error', '<div class="text-danger my-2">Phone number can\'t be less than 10 and greather than 10</div>');
                        err_msg('error_not_Sent', '<div class="text-danger my-2">Something Went Wrong</div>');

                        // Registration Process
                        if(is_post_request()) {
                            // Fields Input
                            $first_name = $_POST['firstname'];  
                            $last_name = $_POST['lastname'];
                            $number = $_POST['number'];
                            $email = $_POST['email'];

                            // special charecters
                            
                            // $check_box = $_POST['agree'];
                            // Form Validation
                            // empty Validation
                            if (is_blank($first_name) || is_blank($last_name) || is_blank($number) || is_blank($email)) {
                            echo msg_show('signup.php?error');

                            } elseif( !preg_match("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^",$email) ) {
                                echo msg_show('signup.php?error_email'); 

                            } elseif(strlen($number) > "10" || strlen($number) < "10") {
                                echo msg_show('signup.php?numb_error'); 
                            } else {
                                sendto();
                                $subject = "New User Registration";

                                $header = "From : " . 'Incomehouse Portal' . "\r\n";
                                $header.= "Reply To : " . $email . "\r\n" ;

                                $message = "First Name : " . $first_name . "\r\n";
                                $message.= "Last Name : " . $last_name . "\r\n";
                                $message.= "Email : " . $email . "\r\n";
                                $message.= "Mobile Number : " . $number . "\r\n";

                                $reg_send = mail(sendto(), $subject, $message, $header);

                                if($reg_send) {
                                    echo "<div class='text-success'>Form has been submited we'll contact you as soon as possible</div>";
                                } 
                            }
                        }
                    ?>
                    <form id="signup-form" action="" method="post" novalidate="">
                        <div class="form-group">
                            <label for="firstname">Name</label>
                            <div class="row">
                                <div class="col-sm-6">
                                    <input type="text" class="form-control underlined" name="firstname" id="firstname" placeholder="Enter firstname" required=""> </div>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control underlined" name="lastname" id="lastname" placeholder="Enter lastname" required=""> </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control underlined" name="email" id="email" placeholder="Enter email address" required=""> 
                        </div>
                        <div class="form-group">
                            <label for="number">Your Number</label>
                            <input type="text" class="form-control underlined" name="number" id="number" placeholder="+91 Your Contact No" required="" maxlength="10"  onkeypress="if(event.keyCode<48 || event.keyCode>57)event.returnValue=false;"> 
                        </div>
                        <div class="form-group">
                            <label for="agree">
                                <input class="checkbox" name="agree" id="agree" type="checkbox" required="">
                                <span>Agree the terms and
                                    <a href="#">policy</a>
                                </span>
                            </label>
                        </div>
                        <div class="form-group">
                            <button type="submit" name="r_signup" class="btn btn-block btn-primary">Sign Up</button>
                        </div>
                        <div class="form-group">
                            <p class="text-muted text-center">Already registered?
                                <a href="login.php">Login!</a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>