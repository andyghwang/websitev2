<?php include('path.php'); ?>
<?php include(ROOT_PATH . '/app/database/db.php'); ?>
<?php include(ROOT_PATH . '/app/controllers/users.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/admin_styles.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="./assets/css/public.css?v=<?php echo time(); ?>">
    <title>Sign Up</title>
</head>

<body class="bg-pattern">
  
    <div class="create-user-page ">                
        <form class="admin-form sm-box create-user-form" action="register.php" method="post">
            <!-- Logo -->
            <a href="/index.html" class="logo-wrapper td-none center"> 
                <div class="logo">A<span>G</span>H</div>
            </a>
            <h1 class="center">Sign Up</h1>
            <!-- Profile Image -->
            <div class="input-group center">
                <button type="button" class="btn profile-avatar">
                    <span class="change-profile-picture">Change</span>
                </button>
                <label for="profile-image">Profile Image (optional)</label>
            </div>
            <!-- Error Message -->
            <?php include(ROOT_PATH . '/app/helpers/formErrors.php'); ?>
               
            <!-- Username -->
            <div class="input-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" class="input-control" value="<?php echo $username?>">
            </div>
            <!-- Email -->
            <div class="input-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" class="input-control" value="<?php echo $email?>">
            </div>
            <!-- Password -->
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" class="input-control" value="<?php echo $password?>">
            </div>
            <!-- Password Confirmation -->
            <div class="input-group">
                <label for="password-confirmation">Password Confirmation</label>
                <input type="password" id="password-confirmation" name="password-confirmation" class="input-control" value="<?php echo $passwordConf?>">
            </div>                                                                  
            <!-- Submit -->
            <div class="input-group center">
                <button type="submit" class="add-post-btn btn-box-shadow btn" name="register-btn">Register</button>
            </div>
            <!-- Log In -->
            <div class="log-in center">
                <p>Already have an account? 
                <a href="login.php" class="link">Log In</a></p>
            </div>
        </form>                           
    </div>

    <!-- Icon Ion -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</body>
</html>