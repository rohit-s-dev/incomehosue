<?php 
if (isset($_GET['e_id'])) {

    $edit_user_id = $_GET['e_id'];
    $sql = "SELECT * FROM users WHERE user_id = $edit_user_id";
    $sql_query = mysqli_query($con, $sql);
    while ( $rows= mysqli_fetch_assoc($sql_query) ) {

        $username = $rows['username'];
        $user_firstname = $rows['user_firstname'];
        $user_lastname = $rows['user_lastname'];
        $user_role = $rows['user_role'];
        $user_password = $rows['user_pwd'];

        $user_number = $rows['user_number'];
        $user_email = $rows['user_email'];

        // $sql_randsalt = "SELECT randSalt FROM users";
        // $sql_randSalt_query = mysqli_query($con , $sql_randsalt);
    
        // $row = mysqli_fetch_assoc($sql_randSalt_query);
        // $salt = $row['randSalt'];
        // $a_password_hash = password_hash($a_password, PASSWORD_DEFAULT);

    }

}

// Updating User

if (isset($_POST['update_user'])){

    $username = str_replace(' ', '', strtolower($_POST['username']));
    $user_firstname = $_POST['firstname'];
    $user_lastname = $_POST['lastname'];
    $user_role = $_POST['user_role'];
    $user_password = $_POST['pwd'];
    $user_number = $_POST['number'];
    $user_email = $_POST['email'];   

    $a_password_hash = password_hash($user_password, PASSWORD_DEFAULT);
    
    
    $sql_add_edited_user = "UPDATE users SET username = '$username', user_firstname = '$user_firstname', user_lastname = '$user_lastname', user_role = '$user_role', user_pwd = '$a_password_hash', user_number = '$user_number', user_email = '$user_email' WHERE user_id = $edit_user_id";

    $sql_add_edited_user_query = mysqli_query($con, $sql_add_edited_user);

    $msg = "<div class='alert alert-success my-3'>User Information Updated
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
        <span aria-hidden='true'>&times;</span>
        </button>
        </div>";
    echo $msg;
}

?>

<div class="col-12 m-auto">
		    <div class="card">
		        <div class="card-body">
		            <div class="row">
		                <div class="col-md-12">
		                    <h4>Edit User</h4>
		                    <hr>
		                </div>
		            </div>
		            <div class="row">
		                <div class="col-md-12">
		                    <form action="" method="post">
                              <div class="form-group row">
                                <label for="username" class="col-4 col-form-label">User Name*</label> 
                                <div class="col-8">
                                  <input id="username" name="username" placeholder="Username" class="form-control here" required="required" type="text" value="<?php echo $username; ?>">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="firstname" class="col-4 col-form-label">First Name</label> 
                                <div class="col-8">
                                  <input id="firstname" name="firstname" placeholder="First Name" class="form-control here" type="text" value="<?php echo $user_firstname; ?>">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="lastname" class="col-4 col-form-label">Last Name</label> 
                                <div class="col-8">
                                  <input id="lastname" name="lastname" placeholder="Last Name" class="form-control here" type="text" value="<?php echo $user_lastname; ?>">
                                </div>
                              </div>

                              <div class="form-group row">
                                <label for="email" class="col-4 col-form-label">Email*</label> 
                                <div class="col-8">
                                  <input id="email" name="email" placeholder="Email" class="form-control here" required="required" type="text" value="<?php echo $user_email; ?>">
                                </div>
                              </div>

                              <div class="form-group row">
                                <label for="number" class="col-4 col-form-label">Number +91</label> 
                                <div class="col-8">
                                  <input id="number" name="number" placeholder="+91 Your mobile number" class="form-control here" required="required" type="text" value="<?php echo $user_number; ?>">
                                </div>
                              </div>

                              <div class="form-group row">
                                <label for="pwd" class="col-4 col-form-label">Password</label> 
                                <div class="col-8">
                                  <input id="pwd" name="pwd" placeholder="password" class="form-control here" required="required" type="text" value="<?php echo $user_password; ?>">
                                </div>
                              </div>

                              <div class="form-group row">
                                <label for="userRole" class="col-4 col-form-label">User Identity</label> 
                                <div class="col-8">
                                   <select name="user_role" id="userRole" class="form-control">
                                    <option value='admin'>Admin</option>
                                    <option value='retailer'>Retailer</option>
                                    <option value='distributor'>Distributor</option>
                                </select>
                                </div>
                              </div>

                              <div class="form-group row">
                                <div class="offset-4 col-8">
                                  <button name="update_user" type="submit" class="btn btn-primary">Update My Profile</button>
                                </div>
                              </div>
                            </form>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>