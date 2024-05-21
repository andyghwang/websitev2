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
    <title>Admin - Edit User</title>
</head>

<body>
    
    <!-- Header | Sidebar -->
    <?php include(ROOT_PATH . '/app/includes/admin_header_sidebar.php'); ?>
            <!-- ***CREATE POST*** -->

            <!-- Main Content -->
            <div class="page-content">
                <div class="admin-container">
                   
                    <form class="admin-form sm-box" action="edit.php" method="post" enctype="multipart/form-data">
                        <h1 class="center">Edit User</h1> 
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
                        <!-- ID -->
                        <input type="hidden" name="id" value="<?php echo $update_user_id; ?>">
                        <div class="input-group">
                            <label for="username">Username</label>
                            <input type="text" id="username" name="username" class="input-control" value="<?php echo $username; ?>">
                        </div>
                        <!-- Email -->
                        <div class="input-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" class="input-control" value="<?php echo $email; ?>">
                        </div>
                        <!-- Password -->
                        <input type="hidden" id="password" name="password" class="input-control" value="1">
                        <!-- Password Confirmation -->
                        <input type="hidden" id="password-confirmation" name="password-confirmation" class="input-control" value="1">           
                        <!-- Role -->
                        <div class="input-group">
                            <label for="admin">Role</label>
                            <select name="admin" id="admin" class="input-control">
                                <?php if($admin == 1): ?>
                                    <option value="1">Admin</option>
                                    <option value="0">User</option>
                                <?php else: ?>
                                    <option value="0">User</option>
                                    <option value="1">Admin</option>
                                <?php endif; ?>                                            
                            </select>
                        </div>      
                        <!-- Bio -->
                        <div class="input-group">
                            <label for="bio">Bio (optional)</label>
                            <textarea name="bio" id="bio" rows="5" class="input-control"><?php echo $bio; ?></textarea>
                        </div>   
                        <!-- Socials -->
                        <div class="input-group">
                            <label for="facebook">Facebook (optional)</label>
                            <input type="text" name="facebook" id="facebook" class="input-control" value="<?php echo $facebook; ?>">
                        </div>    
                        <div class="input-group">
                            <label for="linkedin">LinkedIn (optional)</label>
                            <input type="text" name="linkedin" id="linkedin" class="input-control" value="<?php echo $linkedin; ?>">
                        </div>
                        <div class="input-group">
                            <label for="instagram">Instagram (optional)</label>
                            <input type="text" name="instagram" id="instagram" class="input-control" value="<?php echo $instagram ?>">
                        </div>                                                                    
                        <!-- Submit -->
                        <div class="input-group">
                            <button type="submit" class="add-post-btn btn-box-shadow btn" name="update-user-btn"><b>Update</b></button>
                        </div>
                    </form>             
                </div>
            </div>

    <!-- Ionic Icon -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    
    <!-- Javascript -->  
    <script src="../../assets/js/admin.js"></script>
    
</body>
</html>