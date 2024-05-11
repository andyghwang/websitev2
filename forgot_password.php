<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/admin_styles.css">
    <link rel="stylesheet" href="assets/css/public.css">
    <title>Forgot Password</title>
</head>

<body class="bg-pattern">
    
            <div class="create-user-page login-page ">                
                    <form class="admin-form sm-box create-user-form" action="" method="post" enctype="multipart/form-data">
                        <a href="/index.html" class="logo-wrapper td-none center"> 
                            <div class="logo">A<span>G</span>H</div>
                        </a>
                        <h1 class="center">Request a New Password</h1> 
                        <!-- Username or Email-->
                        <div class="input-group">
                            <p>A link will be sent to your email to reset your password.</p>
                            <input type="email" id="email" name="email" class="input-control" placeholder="Email Address">
                        </div>
                        <!-- Submit -->
                        <div class="input-group center">
                            <button type="submit" class="add-post-btn btn-box-shadow btn">Send Reset Link</button>
                        </div>
                    </form>                            

        </div>
    <!-- Javascript -->  
    <script src="/assets/js/admin.js"></script>

</body>
</html>