
<?php include "inc/header2.php"; ?>
        <div class="auth">
            <div class="auth-container">
                <div class="card">
                    <header class="auth-header">
                        <h1 class="auth-title">
                            Log In 
                        </h1>
                        <?php 
                            
                            if ( isset($_GET['error']) ) {

                                $error = $_GET['error'];

                                if ($error == 'invalid') {

                                    echo "<p class='text-danger'>invalid id or passowrd</p>";
                                
                                } 
                            }   
                        
                        ?>
                    </header>

                    <div class="auth-content">

                        <p class="text-center">LOGIN TO CONTINUE</p>

                        <form action="inc/login_process.php" method="post">
                            <div class="form-group">
                                <label for="number">Mobile Number</label>
                                <input type="text" id="mobileNumberCheck" placeholder="+91 Your Mobile Number" name="number" required class="form-control" maxlength="10"  onkeypress="if(event.keyCode<48 || event.keyCode>57)event.returnValue=false;">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" placeholder="Your Password" name="password" required class="form-control">
                            </div>
                            <button type="submit" class="btn btn-block btn-primary" name="login">Login</button>
                        </form>
                        <a href="signup.php">Register</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="ref" id="ref">
            <div class="color-primary"></div>
            <div class="chart">
                <div class="color-primary"></div>
                <div class="color-secondary"></div>
            </div>
        </div>
        <script src="js/vendor.js"></script>
        <script src="js/app.js"></script>
    </body>
</html>