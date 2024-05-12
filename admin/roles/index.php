<?php include('../../path.php');?>
<?php include(ROOT_PATH . '/app/database/db.php');?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/admin_styles.css">
    <title>Admin - Roles</title>
</head>

<body>
    
    <!-- Header | Sidebar -->
    <?php include(ROOT_PATH . '/app/includes/admin_header_sidebar.php'); ?>

        <!-- Main Content -->
        <div class="page-content">
            <div class="sm-box admin-container">
                <div class="admin-table">
                    <h1 class="center">Roles</h1>
                    <hr>
                    <!-- Table Actions -->
                    <div class="table-actions topics">
                        <span></span>
                        <a href="create.php"> 
                            <button type="button" class="btn add-post-btn btn-box-shadow create-topic-btn">
                                <ion-icon name="add-circle-outline" class="add-post-icon"></ion-icon>
                                Create Role
                            </button>
                        </a>  
                    </div>

                    <!-- TABLE -->
                    <div class="responsive-table">
                        <table>
                            <thead>
                                <th class="center">SN</th>
                                <th>Role</th>
                                <th class="center"># of Users</th>
                                <th class="center">Update Permissions</th>
                            </thead> 
                            <tbody>
                                <tr>
                                    <td class="center">1</td>
                                    <td>
                                        Author
                                        <div class="td-action-links">
                                            <a href="" class="trash">Delete</a>
                                            <span class="inline-divider">|</span>
                                            <a href="" class="edit">Edit</a>
                                        </div>
                                    </td>
                                    <td class="center">3</td>
                                    <td class="center"><a href="assign_permissions.php">Permissions</a></td>
                                </tr>    
                                <tr>
                                    <td class="center">2</td>
                                    <td>
                                        Admin
                                        <div class="td-action-links">
                                            <a href="" class="trash">Delete</a>
                                            <span class="inline-divider">|</span>
                                            <a href="" class="edit">Edit</a>
                                        </div>
                                    </td>
                                    <td class="center">1</td>
                                    <td class="center"><a href="assign_permissions.php">Permissions</a></td>
                                </tr>                               
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>

    <!-- Ionic Icon -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <!-- Javascript -->  
    <script src="/assets/js/admin.js"></script>

</body>
</html>