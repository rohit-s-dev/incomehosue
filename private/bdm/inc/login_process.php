<?php include "../db.php"; ?>
<?php session_start(); ?>

<?php 
if (isset($_POST['login'])) {

    $number = $_POST['number'];
    $password = $_POST['password'];

    $username = mysqli_real_escape_string($con, $number);
    $password = mysqli_real_escape_string($con, $password);
    
    $query = "SELECT * FROM users WHERE user_number = $number ";

    $select_user_query = mysqli_query($con, $query);
    while ( $row = mysqli_fetch_assoc( $select_user_query ) ) {
        $l_user_id = $row['user_id'];
        $l_username = $row['username'];
        $l_user_pwd = $row['user_pwd'];
        $l_user_role = $row['user_role'];
        $l_user_number = $row['user_number'];
        $l_user_firstname = $row['user_firstname'];
        $l_user_lastname = $row['user_lastname'];
        $l_user_email = $row['user_email'];

        $pwd_check = password_verify($password, $l_user_pwd);
    }


    if ( $number !== $l_user_number && $pwd_check == false ) {
        header("Location: ../login.php?error=invalid");
        exit();
        
    } else if ( $number == $l_user_number && $pwd_check == true ) {

        $_SESSION['userid'] = $l_user_id; 
        $_SESSION['username'] = $l_username; 
        $_SESSION['user_role'] = $l_user_role; 
        $_SESSION['user_number'] = $l_user_number;  
        $_SESSION['user_firstname'] = $l_user_firstname; 
        $_SESSION['user_lastname'] = $l_user_lastname; 
        $_SESSION['user_email'] = $l_user_email;

        header("Location: ../index.php");
    }

}





?>