<div class="col-12 m-auto">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <h4>Add User</h4>
                    <hr>
                </div>
            </div>
            <div class="row">
        <div class="col-md-12">
    <?php 

        if (isset( $_POST['add_user'] )) {
            
            $a_username = str_replace(' ', '', strtolower($_POST['username']));
            $a_firstname = $_POST['firstname'];
            $a_lastname = $_POST['lastname'];
            $a_email = strtolower($_POST['email']);
            $a_number = $_POST['contact_number'];
            $a_password = str_replace(' ', '', strtolower($_POST['password']) );
            $a_user_role = $_POST['user_role'];


                        
            if ( !empty($a_username) ||  !empty($a_firstname) || !empty($a_lastname) || !empty($a_email) || !empty($a_number) || !empty($a_user_role) ) {


                $sql = "SELECT * FROM users";
                $sql_query = mysqli_query($con, $sql);
                
                while ( $rows = mysqli_fetch_assoc($sql_query) ) {

                    $username = $rows['username'];
                    $user_number = $rows['user_number'];
                    $email = $rows['user_email'];

                } 

                if ( $a_email ==  $email || $a_username == $username || $a_number == $user_number ) {

                    echo "<p class='text-danger'>User already taken</p>";
                    exit();

                }

                if ( !filter_var($a_email, FILTER_VALIDATE_EMAIL) ) {
                    $msg = "<div class='alert alert-danger my-3'>Please Enter a valid email
                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                    <span aria-hidden='true'>&times;</span>
                    </button>
                    </div>";
                    echo $msg;
                    exit();
                    

                } else {

                    $a_username = mysqli_real_escape_string($con, $a_username);
                    $a_firstname = mysqli_real_escape_string($con, $a_firstname);
                    $a_lastname = mysqli_real_escape_string($con, $a_lastname);
                    $a_email = mysqli_real_escape_string($con, $a_email);
                    $a_number = mysqli_real_escape_string($con, $a_number);
                    $a_password = mysqli_real_escape_string($con, $a_password);
                    
                    $a_password_hash = password_hash($a_password, PASSWORD_DEFAULT);

                    $a_query = "INSERT INTO users (username, user_firstname, user_lastname, user_pwd, user_number, user_email, user_role, user_date) VALUES ('$a_username', '$a_firstname', '$a_lastname', '$a_password_hash' ,'$a_number' , '$a_email', '$a_user_role', now())";
                    
                    $a_query_sql = mysqli_query($con, $a_query);
                    if (!$a_query_sql) {

                        die( 'Error' . mysqli_error($con) );
                    
                    }
        
                    $msg = "<div class='alert alert-success my-3'>User Created
                                <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                                <span aria-hidden='true'>&times;</span>
                                </button>
                            </div>";
                    echo $msg;
                    
                }

              
            } else {
                $msg_error = "<div class='alert alert-danger my-3'>Please Fill all the                  fields
                        <button type='button' class='close' data-dismiss='alert'        aria-label='Close'>
                        <span aria-hidden='true'>&times;</span>
                        </button>
                    </div>";
                echo $msg_error;
            }

        }
    
    ?>

                    <form action="" method="post">
                        <div class="form-group row">
                        <label for="username" class="col-4 col-form-label">User Name*</label> 
                        <div class="col-8">
                            <input id="username" name="username" placeholder="Username" class="form-control here"  type="text">
                        </div>
                        </div>
                        <div class="form-group row">
                        <label for="firstname" class="col-4 col-form-label">First Name</label> 
                        <div class="col-8">
                            <input id="firstname" name="firstname" placeholder="First Name" class="form-control here" type="text">
                        </div>
                        </div>
                        <div class="form-group row">
                        <label for="lastname" class="col-4 col-form-label">Last Name</label> 
                        <div class="col-8">
                            <input id="lastname" name="lastname" placeholder="Last Name" class="form-control here" type="text">
                        </div>
                        </div>

                        <div class="form-group row">
                        <label for="email" class="col-4 col-form-label">Email*</label> 
                        <div class="col-8">
                            <input id="email" name="email" placeholder="Email" class="form-control here"  type="email">
                        </div>
                        </div>

                        <div class="form-group row">
                            <label for="contactNumber" class="col-4 col-form-label">Number +91</label> 
                            <div class="col-8">
                            <input id="contactNumber" name="contact_number" placeholder="contact no" class="form-control here"  type="text" maxlength="10" minlength="10" onkeypress="if(event.keyCode<48 || event.keyCode>57)event.returnValue=false;">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-4 col-form-label">Password</label> 
                            <div class="col-8">
                            <input id="password" name="password" placeholder="password" class="form-control here"  type="text">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="userRole" class="col-4 col-form-label">User Identity</label> 
                            <div class="col-8">
                                <select name="user_role" id="userRole" class="form-control">
                                    <option value="">Assign an Identity</option>
                                    <option value="admin">Admin</option>
                                    <option value="retailer">Retailer</option>
                                    <option value="distributor">Distributor</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                        <div class="offset-4 col-8">
                            <button name="add_user" type="submit" class="btn btn-primary">Add User</button>
                        </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>