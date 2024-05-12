<?php include('../../path.php');?>
<?php include(ROOT_PATH . '/app/database/db.php');?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Quill.js -->
    <link href="https://cdn.jsdelivr.net/npm/quill@2.0.0/dist/quill.snow.css" rel="stylesheet"/>
    <link rel="stylesheet" href="../../assets/css/admin_styles.css">   
    <title>Admin - Create User</title>
</head>

<body>
    
    <!-- Header | Sidebar -->
    <?php include(ROOT_PATH . '/app/includes/admin_header_sidebar.php'); ?>
            <!-- ***CREATE POST*** -->

            <!-- Main Content -->
            <div class="page-content">
                <div class="admin-container">
                    <form class="admin-form sm-box" action="" method="post" enctype="multipart/form-data">
                        <h1 class="center">Create User</h1> 

                        <!-- Profile Image -->
                        <div class="input-group center">
                            <button type="button" class="btn profile-avatar">
                                <span class="change-profile-picture">Change</span>
                            </button>
                            <label for="profile-image">Profile Image (optional)</label>
                        </div>
                        <!-- Username -->
                        <div class="input-group">
                            <label for="username">Username</label>
                            <input type="text" id="username" name="username" class="input-control">
                        </div>

                        <!-- Email -->
                        <div class="input-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" class="input-control">
                        </div>
                        <!-- Password -->
                        <div class="input-group">
                            <label for="password">Password</label>
                            <input type="password" id="password" name="password" class="input-control">
                        </div>
                        <!-- Password Confirmation -->
                        <div class="input-group">
                            <label for="password-confirmation">Password Confirmation</label>
                            <input type="password" id="password-confirmation" name="password-confirmation" class="input-control">
                        </div>
                        <!-- Role -->
                        <div class="input-group">
                            <label for="role">Role</label>
                            <select name="role" id="role" class="input-control">
                                <option value="admin">Admin</option>
                                <option value="admin">Author</option>
                                <option value="admin">Editor</option>
                            </select>
                        </div>      
                        <!-- Bio -->
                        <div class="input-group">
                            <label for="bio">Bio</label>
                            <textarea name="bio" id="bio" rows="5" class="input-control"></textarea>
                        </div>   
                        <!-- Socials -->
                        <div class="input-group">
                            <label for="facebook">Facebook (optional)</label>
                            <input type="text" name="facebook" id="facebook" class="input-control">
                        </div>    
                        <div class="input-group">
                            <label for="linkedin">LinkedIn (optional)</label>
                            <input type="text" name="linkedin" id="linkedin" class="input-control">
                        </div>
                        <div class="input-group">
                            <label for="instagram">Instagram (optional)</label>
                            <input type="text" name="instagram" id="instagram" class="input-control">
                        </div>                                                                    
                        <!-- Submit -->
                        <div class="input-group">
                            <button type="submit" class="add-post-btn btn-box-shadow btn"><b>Create</b></button>
                        </div>
                    </form>             
                </div>
            </div>

    <!-- Ionic Icon -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    
    <!-- Javascript -->  
    <script src="../../assets/js/admin.js"></script>
    
    <!-- Uploadd Image Preview -->
    <script>        
        const imageInput = document.querySelector('.image-input');
        const uploadImageBtn = document.querySelector('.img-btn');
        const previewImg = document.getElementById('preview-img');
        const previewHeading = document.querySelector('.preview-heading');

        uploadImageBtn.addEventListener('click', function(){
            imageInput.click();    
        });

        imageInput.addEventListener('change', function(){
            previewHeading.classList.remove('hide');
            const fileReader = new FileReader();

            fileReader.readAsDataURL(imageInput.files[0]);
            fileReader.onload = function (e) {

                previewImg.style.width = '100%';
                previewImg.style.height = '300px';
                previewImg.style.backgroundImage = `url(${e.target.result})`;
                previewImg.style.backgroundSize = '200px';
                previewImg.style.backgroundRepeat = 'no-repeat';
                previewImg.style.backgroundPosition = 'center';
            }
        });
    </script>

    <!-- Quill Library -->
    <script src="https://cdn.jsdelivr.net/npm/quill@2.0.0/dist/quill.js"></script>
    <script src="/assets/js/quill.js"></script>
    
</body>
</html>