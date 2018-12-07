<?php include "inc/header.php"; ?>
<?php include "inc/top-bar.php"; ?>
<?php include "inc/side-nav.php"; ?>
<article class="content">
  <div class="col-12 m-auto">
		    <div class="card">
		        <div class="card-body">
		            <div class="row">
		                <div class="col-md-12">
		                    <h4>Your Profile</h4>
 
		                    <hr>
		                </div>
		            </div>
		            <div class="row">
		                <div class="col-md-12">
		                    <form method='post' action=''>
                              <div class="form-group row">
                                <label for="username" class="col-4 col-form-label">User Name*</label> 
                                <div class="col-8">
                                  <input id="username" name="username" placeholder="Username" class="form-control here" required="required" type="text" value="<?php echo $_SESSION['username']; ?>">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="firstname" class="col-4 col-form-label">First Name</label> 
                                <div class="col-8">
                                  <input id="firstname" name="firstname" placeholder="First Name" class="form-control here" type="text" value="<?php echo $_SESSION['user_firstname']; ?>">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="lastname" class="col-4 col-form-label">Last Name</label> 
                                <div class="col-8">
                                  <input id="lastname" name="lastname" placeholder="Last Name" class="form-control here" type="text" value="<?php echo $_SESSION['user_lastname']; ?>">
                                </div>
                              </div>

                              <div class="form-group row">
                                <label for="email" class="col-4 col-form-label">Email</label> 
                                <div class="col-8">
                                  <input id="email" name="email" placeholder="Email" class="form-control here" required="required" type="email" value="<?php echo $_SESSION['user_email']; ?>">
                                </div>
                              </div>

                              <div class="form-group row">
                                <div class="offset-4 col-8">
                                  <button name="submit" type="submit" class="btn btn-primary">Update My Profile</button>
                                </div>
                              </div>
                            </form>
		                </div>
		            </div>
		            
		        </div>
		    </div>
		</div>
</article>
<?php include "inc/footer.php" ?>

