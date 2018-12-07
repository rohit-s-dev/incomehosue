<?php include "inc/header2.php"; ?>
<div class="auth">
        <div class="auth-container">
            <div class="card">
                <header class="auth-header">
                    <h1 class="auth-title">
                       Register </h1>
                </header>
                <div class="auth-content">
                    <form id="signup-form" action="inc/register.php" method="post" novalidate="">
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
                            <input type="text" class="form-control underlined" name="number" id="number" placeholder="+91 Your Contact No" required=""> 
                        </div>

                        <div class="form-group">
                            <label for="password">Password</label>
                            <div class="row">
                                <div class="col-sm-6">
                                    <input type="password" class="form-control underlined" name="password" id="password" placeholder="Enter password" required=""> </div>
                                <div class="col-sm-6">
                                    <input type="password" class="form-control underlined" name="retype_password" id="retype_password" placeholder="Re-type password" required=""> </div>
                            </div>
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
                            <button type="submit" name="signup" class="btn btn-block btn-primary">Sign Up</button>
                        </div>
                        <div class="form-group">
                            <p class="text-muted text-center">Already have an account?
                                <a href="login.php">Login!</a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>