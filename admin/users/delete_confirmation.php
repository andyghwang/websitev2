<?php include('../../path.php');?>
<?php include(ROOT_PATH . '/app/database/db.php');?>
<?php include(ROOT_PATH . '/app/controllers/users.php');?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/admin_styles.css?v=<?php echo time(); ?>">   
    <link rel="stylesheet" href="../../assets/css/public.css?v=<?php echo time(); ?>"> 
    <title>Admin - Delete User Confirmation</title>
</head>

<body>
    
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
    <!-- Sidebar -->
    <div class="page-wrapper delete-confirmation"> 
        <div class="sidebar">
            <d class="sidebar-author-mobile">
                <img class="avatar" src="../assets/images/avatar/andy_profile_pic.png" alt="">
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

        <!-- Main Content -->
        <div class="delete-user-wrapper">
            <h2>Are you sure you want to delete the user:</h2>
            <br>
            <span class="username"><?php echo $_SESSION['username']?></span>
            <br>
            <br>
            <br>
            <a href="index.php" class="go-back">Go Back</a><a href="delete_confirmation.php?del_user_confirm=<?php echo $user['id']; ?>" class="delete">Delete User</a>
        </div>   
    </div>

    <!-- Javascript -->  
    <script src="../../assets/js/admin.js"></script>

    <!-- Ionic Icon -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>