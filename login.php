<?php include('path.php'); ?>
<?php include(ROOT_PATH . '/app/database/db.php'); ?>
<?php include(ROOT_PATH . '/app/controllers/users.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/admin_styles.css">
    <link rel="stylesheet" href="assets/css/public.css">
    <title>Login</title>
</head>

<body class="bg-pattern">
    
            <div class="create-user-page login-page ">                
                    <form class="admin-form sm-box create-user-form" action="login.php" method="post">
                        <a href="/index.html" class="logo-wrapper td-none center"> 
                            <div class="logo">A<span>G</span>H</div>
                        </a>
                        <h1 class="center">Login</h1> 
                        
                        <!-- Error Message -->                       
                        <?php include(ROOT_PATH . '/app/helpers/formErrors.php'); ?>

                        <!-- Username or Email-->
                        <div class="input-group">
                            <label for="username">Username</label>
                            <input type="text" id="username" name="username" class="input-control" value="<?php echo $username?>">
                        </div>

                        <!-- Password -->
                        <div class="input-group">
                            <div class="password-wrapper">
                                <label for="password">Password</label>
                                <a class="link" href="forgot_password.php">Forgot Password?</a>
                            </div>
                            
                            <input type="password" id="password" name="password" class="input-control" value="<?php echo $password?>">
                        </div>   
                          
                        <!-- Remember Me -->
                        <div class="input-group remember-me">
                            <input type="checkbox" name="remember" id="remember">
                            <label for="remember">Remember Me</label>    
                        </div>

                        <!-- Login -->
                        <div class="input-group center">
                            <button type="submit" class="add-post-btn btn-box-shadow btn" name='login-btn'>Login</button>
                        </div>

                        <!-- Register -->
                        <div class="register center">
                            <p>Don't have an account? <a href="register.php" class="link">Register</a></p>
                        </div>
                    </form>                            

        </div>

    <!-- Icon Ion -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</body>
</html>