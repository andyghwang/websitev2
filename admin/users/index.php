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
    <title>Admin - Users</title>
</head>

<body>
    
    <!-- Header | Sidebar -->
    <?php include(ROOT_PATH . '/app/includes/admin_header_sidebar.php'); ?>

            <!-- Main Content -->
            <div class="page-content">
                <div class="md-box admin-table admin-container">
                        <h1 class="center">Users</h1>
                        <hr>

                        <!-- Table Actions -->
                        <div class="table-actions">               
                            <div class="search-selector">
                                <input 
                                    type="text" 
                                    name="search-term"
                                    id="search-post-input"
                                    placeholder="Search..."
                                />
                                <select name="filter-posts" id="filter-posts">
                                    <option value="ALL">All</option>
                                    <option value="OLDEST">Oldest</option>
                                    <option value="NEWEST">Newest</option>
                                </select>         
                            </div>     
                            <a href="./create.php"> 
                                <button type="button" class="btn add-post-btn btn-box-shadow">
                                        <ion-icon name="add-circle-outline" class="add-post-icon"></ion-icon>
                                        Create User
                                </button>
                            </a>                     
                        </div>
                        
                        <!-- Flash Message -->
                        <?php include(ROOT_PATH . '/app/includes/messages.php'); ?>

                        <!-- TABLE -->
                        <div class="responsive-table">
                            <table>
                                <thead>
                                    <th>SN</th>
                                    <th>Username</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                </thead> 
                                <tbody>
                                    <?php $i = 0;?>
                                    <?php foreach ($users as $user): ?>
                                        <tr>
                                            <td><?php echo $i + 1; ?></td>
                                            <td><?php echo $user['username']; ?></td>
                                            <td>
                                                <?php echo $user['email']; ?>
                                                <div class="td-action-links">
                                                    <a href="del_user_confirmation.php?del_user_id=<?php echo $user['id']; ?>" class="trash">Delete</a>
                                                    <span class="inline-divider">|</span>
                                                    <a href="edit.php?update_user_id=<?php echo $user['id']; ?>" class="edit">Edit</a>
                                                </div>
                                            </td>
                                            <td>
                                                <?php 
                                                    if ($user['admin'] == 1): 
                                                        echo "Admin";
                                                    else: 
                                                        echo "User"; ?>
                                                <?php endif; ?> 
                                            </td>                                               
                                        </tr>           
                                        <?php $i++;?>                                                            
                                    <?php endforeach;?>
                                </tbody>
                                <tfoot>
                                    <td colspan="6">
                                        <div class="pagination-links">
                                            <a href="" class="link active">1</a>
                                            <a href="" class="link">2</a>
                                        </div>
                                    </td>
                                </tfoot>
                            </table>
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