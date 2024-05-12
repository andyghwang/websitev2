<?php include('../path.php');?>
<?php include(ROOT_PATH . '/app/database/db.php');?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/admin_styles.css">
    <title>Admin - Dashboard</title>
</head>

<body> 
    <!-- Header | Sidebar -->
    <?php include(ROOT_PATH . '/app/includes/admin_header_sidebar.php'); ?>
        
        <!-- Main Content -->
        <div class="page-content">
            <div class="admin-container">
                <h1 class="center">Admin Dashboard</h1>
            </div>
        </div>
    </div>
    
    <!-- Ionic Icon -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <!-- Javascript -->  
    <script src="<?php echo BASE_URL . '/assets/js/admin.js'?>"></script>

</body>
</html>