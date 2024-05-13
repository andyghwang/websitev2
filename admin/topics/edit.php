<?php include('../../path.php');?>
<?php include(ROOT_PATH . '/app/database/db.php');?>
<?php include(ROOT_PATH . '/app/controllers/topics.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/public.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../../assets/css/admin_styles.css?v=<?php echo time(); ?>">   
    
    <title>Admin - Edit Topic</title>
</head>

<body>
    
    <!-- Header | Sidebar -->
    <?php include(ROOT_PATH . '/app/includes/admin_header_sidebar.php'); ?>

        <!-- Main Content -->
        <div class="page-content">
            <div class="admin-container">
                <form class="sm-box admin-form" action="edit.php" method="post">
                    <h1 class="center">Edit Topic</h1>
                    <!-- Error Message -->
                    <?php include(ROOT_PATH . '/app/helpers/formErrors.php'); ?>
                    <!-- ID -->
                    <input type="hidden" value="<?php echo $id; ?>" name="id">
                    <!-- Topic Name -->
                    <div class="input-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" class="input-control" placeholder="Topic Name..." value="<?php echo $name; ?>">
                    </div>
                    <!-- Description -->
                    <div class="input-group">
                        <label for="description">Description</label>
                        <textarea name="description" class="input-control" rows="7" placeholder="Description of topic..."><?php echo $description; ?></textarea>
                    </div>
                    <!-- Update -->
                    <div class="input-group">
                        <button type="submit" class="add-post-btn btn-box-shadow btn" name="update-topic-btn"><b>Update</b></button>
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