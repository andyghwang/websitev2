<!-- Navbar Header-->
<header>       
    <div class="nav-overlay"></div>
    <!-- Menu Icon **mobile size only**--> 
    <ion-icon name="menu-outline" class="menu-icon"></ion-icon>
    <!-- Logo -->
    <a href="<?php echo BASE_URL . '/index.php';?>" class="logo-wrapper td-none"> 
        <div class="logo">A<span>G</span>H</div>
    </a>

    <!-- Navbar -->
    <nav>
        <ul class="navmenu">
            <li class="navitem"> 
                <a href="#">
                    <ion-icon class="navicon" name="person-circle-outline"></ion-icon>
                    <?php echo $_SESSION['username']; ?>  
                    <ion-icon class="navicon" name="chevron-down-outline"></ion-icon>
                </a>
                <ul class="dropdown">
                    <li><a href="<?php echo BASE_URL . '/logout.php'; ?>" style='color:red;'>Logout</a></li>
                </ul>
            </li>
        </ul>
    </nav>
</header>

<div class="page-wrapper">
    <!-- Sidebar -->
    <div class="sidebar">
        <d class="sidebar-author-mobile">
            <img class="avatar" src="<?php echo BASE_URL . "/assets/images/avatar/andy_profile_pic.png" ?>" alt="">
            <h3 class="author-name">Andy Hwang</h3>
            <a href="<?php echo BASE_URL . '/logout.php' ?>" class="logout-link">Logout</a>
        </d>

        <ul class="list-menu">
            <li><a href="<?php echo BASE_URL . '/admin/dashboard.php' ?>">
                <ion-icon class="menu-icon" name="speedometer-outline"></ion-icon> 
                    Dashboard 
                <ion-icon class="chevron-forward" name="chevron-forward-outline"></ion-icon>
            </a></li>
            <li><a href="<?php echo BASE_URL . '/admin/posts/index.php' ?>">
                <ion-icon class="menu-icon" name="reader-outline"></ion-icon> 
                    Posts 
                <ion-icon class="chevron-forward" name="chevron-forward-outline"></ion-icon>
            </a></li>
            <li><a href="<?php echo BASE_URL . '/admin/topics/index.php' ?>">
                <ion-icon class="menu-icon" name="grid-outline"></ion-icon> 
                    Topics 
                <ion-icon class="chevron-forward" name="chevron-forward-outline"></ion-icon>
            </a></li>
            <li><a href="<?php echo BASE_URL . '/admin/users/index.php' ?>">
                <ion-icon class="menu-icon" name="people-outline"></ion-icon> 
                    Users 
                <ion-icon class="chevron-forward" name="chevron-forward-outline"></ion-icon>
            </a></li>
            <li><a href="<?php echo BASE_URL . '/admin/roles/index.php' ?>">
                <ion-icon class="menu-icon" name="lock-closed-outline"></ion-icon> 
                    Roles 
                <ion-icon class="chevron-forward" name="chevron-forward-outline"></ion-icon>
            </a></li>
            <li><a href="<?php echo BASE_URL . '/admin/permissions/index.php' ?>">
                <ion-icon class="menu-icon" name="key-outline"></ion-icon> 
                    Permissions 
                <ion-icon class="chevron-forward" name="chevron-forward-outline"></ion-icon>
            </a></li>
            <li><a href="<?php echo BASE_URL . '/admin/collections/index.php' ?>">
                <ion-icon class="menu-icon" name="reader-outline"></ion-icon> 
                    Collections 
                <ion-icon class="chevron-forward" name="chevron-forward-outline"></ion-icon>
            </a></li>
        </ul>
    </div>