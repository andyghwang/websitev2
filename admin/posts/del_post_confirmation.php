<?php include('../../path.php');?>
<?php include(ROOT_PATH . '/app/database/db.php');?>
<?php include(ROOT_PATH . '/app/controllers/posts.php');?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/admin_styles.css">
    <title>Admin - Confirm Delete</title>
</head>

<body>
    
    <!-- Header | Sidebar -->
    <?php include(ROOT_PATH . '/app/includes/admin_header_sidebar.php'); ?>

            <!-- Main Content -->
            <div class="page-content">
                <div class="admin-container sm-box">
                    <div class="admin-table">
                        <h1>Are you sure?</h1>
                        <hr>
                        <p>Are you sure you want to delete the post titled <strong><?php echo $post['title']; ?></strong> permanently?</p>
                        <strong><p style="color: rgb(230, 20, 20);">This action <u>cannot</u> be undone.</p></strong>
                        <a href="del_post_confirmation.php?del_post_id=<?php echo $post['id']; ?>">
                            <button 
                                type="button"
                                class="btn add-post-btn btn-box-shadow" 
                                style=
                                    "
                                    background-color: rgb(221, 0, 0);
                                    border: solid 1px rgba(255, 255, 255, 0.541);
                                    ">
                                <ion-icon name="trash-outline"></ion-icon>
                                Permanently Delete
                            </button> 
                        </a>                                                                 
                        <a href="index.php"> 
                            <button type="button" class="btn add-post-btn btn-box-shadow">
                                Go Back
                            </button>                           
                        </a>

                        </div>
                    </div>
                </div>
            </div>

    <!-- Ionic Icon -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <!-- Javascript -->  
    <script src="../../assets/js/admin.js"></script>

</body>
</html>