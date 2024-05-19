<?php include('../../path.php');?>
<?php include(ROOT_PATH . '/app/database/db.php');?>
<?php include(ROOT_PATH . '/app/controllers/posts.php');?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/admin_styles.css?v=<?php echo time(); ?>"> 
    <link rel="stylesheet" href="../../assets/css/public.css?v=<?php echo time(); ?>">

    <title>Admin - Edit Post</title>
</head>

<body>
    
    <!-- Header | Sidebar -->
    <?php include(ROOT_PATH . '/app/includes/admin_header_sidebar.php'); ?>
            
        <!-- ***CREATE POST*** -->
        <!-- Main Content -->
        <div class="page-content">
            <div class="admin-container">
                
                <form class="admin-form md-box" action="edit.php" method="post" enctype="multipart/form-data">
                    <h1 class="center">Edit Post</h1>
                    <!-- Hidden ID -->                 
                    <input type="hidden" name="id" value="<?php echo $post['id']; ?>">
                    <!-- Error Message -->
                    <?php include(ROOT_PATH . '/app/helpers/formErrors.php'); ?>
                    <!-- Title -->
                    <div class="input-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" id="title" class="input-control" placeholder="Blog title..." value="<?php echo $post['title']; ?>">
                    </div>
                    <!-- Body -->
                    <textarea name="body" id="editor"><?php echo $post['body']; ?></textarea>    
                    <!-- Topic -->
                    <div class="post-details input-group">
                        <div class="select-topic-wrapper">
                            <label for="topic">Topic</label>
                            <select name="topic_id" id="topic" class="input-control">
                                <option value="<?php echo $topic['id']; ?>"><?php echo $topic['name']; ?></option>
                                <?php foreach ($topics as $t): ?>
                                    <?php if ($t['id'] != $topic['id']): ?>
                                        <option value="<?php echo $t['id']; ?>"><?php echo $t['name']; ?></option>  
                                    <?php endif; ?>                                
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <!-- Upload Image Btn -->
                        <div class="image-wrapper">
                            <input type="file" name="image" class="hide image-input">
                            <button type="button" class="bg-img btn img-btn btn-box-shadow">
                                <span>
                                    <ion-icon class="img-btn-icon" name="image-outline"></ion-icon>
                                </span>
                                Upload Image
                            </button>       
                        </div>
                    </div>
                    <!-- Preview -->
                    <div class="preview-wrapper">
                        <h3 class="preview-heading hide">
                            Preview
                        </h3>
                        <div id="preview-img">
                        </div>
                    </div>
                    <!-- Published Checkbox -->
                    <div class="input-group">
                        <label for="published">
                            <input type="checkbox" name="published" id="published"                           
                            <?php if($post['published'] == 1): ?>
                                <?php echo "checked"?>
                            <?php endif;?>
                            />                            
                            Publish
                        </label>
                    </div>
                    <!-- Submit -->
                    <div class="input-group">
                        <button type="submit" class="add-post-btn btn-box-shadow btn" name="update-post-btn"><b>Update</b></button>
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

    <!-- CKEditor -->
    <script src="https://cdn.ckeditor.com/ckeditor5/41.4.1/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
    
</body>
</html>