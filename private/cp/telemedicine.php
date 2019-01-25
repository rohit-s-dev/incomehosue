<?php include "inc/header.php"; ?>
<?php include "inc/top-bar.php"; ?>
<?php include "inc/side-nav.php"; ?>
<?php session_start(); ?>

<div class="container-fluid my-5 py-5">
    <div class="col-12 text-white p-2 mb-3" style=" background: #3a4651; ">
        <h4 class="text-center text-uppercase">Telemedicine (Consultant)</h4>
    </div>

    
<?php 
    if(isset($_SESSION['username'])) {
        $username = $_SESSION['username'];
        $sql_s = "SELECT * FROM users WHERE username = $username";
    } 
?>


<?php 

if(is_post_request()) {

    // escaped inputs values
    $name = escape($con, h($_POST['name']));
    $age  = escape($con, h($_POST['age']));
    $guardian_name  = escape($con, h($_POST['guardian_name']));
    $address  = escape($con, h($_POST['address']));
    $date  = escape($con, h($_POST['date']));
    $disease  = escape($con, h($_POST['guardian_name']));
    $branch_code  = escape($con, h($_POST['branch_code']));
    $branch_add  = escape($con, h($_POST['branch_add']));
    $branch_cont  = escape($con, h($_POST['guardian_name']));

    // Validation
    if( is_blank($name) || is_blank($age) || is_blank($guardian_name) || is_blank($address) || is_blank($date) || is_blank($disease) || is_blank($branch_code)|| is_blank($branch_add) || is_blank($branch_cont) ) {
        echo "<div class='text-danger'>Fields Can't be empty .</div>";
        
    } elseif (less_than($name , 3) && less_than($guardian_name , 3) && less_than($address , 3) && less_than($name , 5) && less_than($branch_add , 3)) {
        echo "<div class='text-danger'>Characters Must be greater than 3</div>";
    
    } elseif (str($name) && str($guardian_name) && str($name) && str($name) ) {
        echo "<div class='text-danger'>Invalid Inputs</div>";
    } elseif (m_numb($branch_cont) === false) {
        echo "<div class='text-danger'>Invalid Number</div>";

    }  else {

        // database
        $sql = "INSERT INTO tele_medicine(sub_by, tele_name, tele_age, tele_guard_name, tele_add, tele_date, tele_disease, tele_branch_code, tele_branch_addr, tele_brancs_cont_no, fill_date) VALUES('$username', '$name', '$age' , '$guardian_name', '$address', '$date', '$disease', '$branch_code', '$branch_add', '$branch_cont', now() )";

        $sql_query = mysqli_query($con, $sql);

        if($sql_query) {
            // mail
            $to = sendto();
            $subject = "New Telemedicine Reg Form Submitted";
            $senderMail = 'test'; 
            $senderName = 'test';

            $header = "From : " . 'incomehouse' .   "<br>";
            $header .= "Reply To : " .'do not reply'.  "<br>";

            $message = "Submitted By : " . $username .  "<br>";
            $message .= "Name : " . $name .  "<br>";
            $message .= "Age : " . $age .  "<br>";

            $message .= "Guardian's Name : ". $guardian_name .  "<br>";
            $message .= "Address : " . $address .  "<br>";
            $message .= "Date : " . $date .  "<br>";
            $message .= "Disease : " . $disease .  "<br>";
            $message .= "Branch Code : " . $branch_code  .  "<br>";
            $message .= "Branch Address : " . $branch_add  .  "<br>";
            $message .= "Branch Contact : " . $branch_cont  .  "<br>";
           
            // $msme_send = mail($to, $subject ,$header, $message);
            $tele_send = multi_attach_mail($to, $subject, $message, $senderMail, $senderName, $files);

            if($tele_send) {
                echo "Form Submitted";
            } else {
                echo "<div class='text-danger my-3'>Something Went Wrong</div>";
            }
        }   

    }
    
}


?>

<div class="col-md-10 m-auto">
<form action="" method="post">
    <div class="form-group">
        <div class="row">
            <div class="col-md-4">
            <label for="name">Name :</label>
            </div>
        <div class="col-md-6">
            <input type="text" id="name" name="name" palceholder="your name" require class="form-control">
            </div>
        </div>
    </div>

    <div class="form-group">
        <div class="row">
            <div class="col-md-4">
            <label for="age">Age :</label>
            </div>
        <div class="col-md-6">
            <input type="text" id="age" name="age" palceholder="your age (yr)" require class="form-control">
            </div>
        </div>
    </div>

    <div class="form-group">
        <div class="row">
            <div class="col-md-4">
            <label for="guardian_name">Guardian's Name :</label>
            </div>
        <div class="col-md-6">
            <input type="text" id="guardian_name" name="guardian_name" palceholder="guardian name" require class="form-control">
            </div>
        </div>
    </div>
    
    <div class="form-group">
        <div class="row">
            <div class="col-md-4">
            <label for="address">Address :</label>
            </div>
        <div class="col-md-6">
            
            <textarea name="address" id="address" cols="30" rows="2" class="form-control"></textarea>
            </div>
        </div>
    </div>

    <div class="form-group">
        <div class="row">
            <div class="col-md-4">
            <label for="date">Date :</label>
            </div>
        <div class="col-md-6">
            <input type="date" name="date" id="date" class="form-control" >
            </div>
        </div>
    </div>

    <div class="form-group">
        <div class="row">
            <div class="col-md-4">
            <label for="disease">Disease :</label>
            </div>
        <div class="col-md-6">
            <textarea type="date" name="disease" id="disease" cols="30" rows="2" class="form-control"></textarea>
            </div>
        </div>
    </div>

    <!-- <div class="form-group">
        <div class="row">
            <div class="col-md-4">
            <label for="disease">Disease</label>
            </div>
        <div class="col-md-6">
            <textarea type="date" name="disease" id="disease" cols="30" rows="2" class="form-control"></textarea>
            </div>
        </div>
    </div> -->

    <div class="form-group">
        <div class="row">
            <div class="col-md-4">
            <label for="branch_code">Branch Code :</label>
            </div>
        <div class="col-md-6">
           <input type="text" name="branch_code" id="branch_code" class="form-control">
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col-md-4">
            <label for="branch_add">Branch Address :</label>
            </div>
        <div class="col-md-6">
           <input type="text" name="branch_add" id="branch_add" class="form-control">
            </div>
        </div>
        
    </div>

    <div class="form-group">
        <div class="row">
            <div class="col-md-4">
            <label for="branch_cont">Branch Contact no :</label>
            </div>
        <div class="col-md-6">
           <input type="text" name="branch_cont" id="branch_cont" class="form-control">
            </div>
        </div>
    </div>

    <input type="submit" value="Submit" name="tele_submit" class="btn px-5 py-2 bg-success text-white  m-auto d-block">
</form>
</div>

</div>
<?php include "inc/footer.php"; ?>