<div class="main-wrapper">
<div class="app" id="app">
<header class="header">
    <div class="header-block header-block-collapse d-lg-none d-xl-none">
        <button class="collapse-btn" id="sidebar-collapse-btn">
            <i class="fa fa-bars"></i>
        </button>
        
    </div>
    <!-- <h4 class="ml-5 text-uppercase font-weight-bold"><?php echo 'welcome ' . $_SESSION['username']; ?></h4> -->
    <div class="header-block header-block-nav"> 
         
        <ul class="nav-profile">
            <li class="profile dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    <span class="name"><?php echo $_SESSION['username']; ?></span>
                </a>
                <div class="dropdown-menu profile-dropdown-menu" aria-labelledby="dropdownMenu1">
                    <a class="dropdown-item" href="profile.php">
                        <i class="fa fa-user icon"></i> Profile </a>
                    <a class="dropdown-item" href="inc/logout.php">
                        <i class="fa fa-power-off icon"></i> Logout </a>
                </div>
            </li>
        </ul>
    </div>
</header>