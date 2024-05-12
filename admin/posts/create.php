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
    <title>Admin - Create Post</title>
</head>

<body>
    
    <!-- Header | Sidebar -->
    <?php include(ROOT_PATH . '/app/includes/admin_header_sidebar.php'); ?>
            
        <!-- ***CREATE POST*** -->
        <!-- Main Content -->
        <div class="page-content">
            <div class="admin-container">
                <form class="admin-form md-box" action="" method="post" enctype="multipart/form-data">
                    <h1 class="center">Create Post</h1>
                    <!-- Error Message -->
                    <ul class="form-errors">
                        <li>Post Title Required</li>
                        <li>Email Required</li>
                    </ul>
                    <!-- Title -->
                    <div class="input-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" id="title" class="input-control" placeholder="Blog title...">
                    </div>
                    <!-- Body -->
                    <div class="input-group">
                        <label for="editor">Body</label>
                        <div id="editor" class="editor"></div>
                    </div>
                    <!-- Topic -->
                    <div class="post-details input-group">
                        <div class="select-topic-wrapper">
                            <label for="topic">Topic</label>
                            <select name="topic-id" id="topic" class="input-control">
                                <option value="">** Choose Topic **</option>
                                <option value="Web Development">Web Development</option>
                                <option value="Networking">Networking</option>
                                <option value="Cybersecurity">Cybersecurity</option>
                            </select>
                        </div>
                        <!-- Upload Image Btn -->
                        <div class="image-wrapper">
                            <input type="file" name="image" id="" class="hide image-input">
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
                            <input type="checkbox" name="published" id="published">
                            Publish
                        </label>
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
    <script src="../../assets/js/quill.js"></script>
    
</body>
</html>