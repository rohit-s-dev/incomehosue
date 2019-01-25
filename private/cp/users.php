<?php include "inc/header.php"; ?>
<?php include "inc/top-bar.php"; ?>
<?php include "inc/side-nav.php" ?>

<article class="content py-5 px-1 my-5 text-center">
    <?php 
    
        if (isset($_GET['source'])) {

            $source = $_GET['source'];
 
        } else {
            $source = '';
        }

        switch ( $source ) {

            case 'edit_user';
            include "inc/edit_user.php";
            break;

            case 'add_user';
            include "inc/add_user.php";
            break;

            default;
            include "inc/all_users.php";
            break;
        }

    ?>

</article>

<?php include "inc/footer.php" ?>

