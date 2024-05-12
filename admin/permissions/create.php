<?php include('../../path.php');?>
<?php include(ROOT_PATH . '/app/database/db.php');?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/admin_styles.css">   
    <title>Admin - Create Permission</title>
</head>

<body>
    
    <!-- Header | Sidebar -->
    <?php include(ROOT_PATH . '/app/includes/admin_header_sidebar.php'); ?>

        <!-- Main Content -->
        <div class="page-content">
            <div class="admin-container">
                <form class="sm-box admin-form" action="" method="post">
                    <h1 class="center">Create Permission</h1>
                    <!-- Topic Name -->
                    <div class="input-group">
                        <label for="title">Name</label>
                        <input type="text" name="title" id="title" class="input-control" placeholder="Permission Name...">
                    </div>
                    <!-- Description -->
                    <div class="input-group">
                        <label for="description">Description</label>
                        <textarea name="description" class="input-control" rows="7" placeholder="Description of permission..."></textarea>
                    </div>
                    <!-- Create -->
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
    <script src="/assets/js/admin.js"></script>

</body>
</html>