<?php include('../../path.php');?>
<?php include(ROOT_PATH . '/app/database/db.php');?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/admin_styles.css">
    <title>Admin - Trash</title>
</head>

<body>
    
    <!-- Header | Sidebar -->
    <?php include(ROOT_PATH . '/app/includes/admin_header_sidebar.php'); ?>

        <!-- Main Content -->
        <div class="page-content">
            <div class="admin-container">
                <div class="admin-table lg-box">
                    <h1 class="center">Trash</h1>
                    <hr>

                    <!-- Table Actions -->
                    <div class="table-actions"> 
                        <div></div>
                        <a href="index.php"> 
                            <button type="button" class="btn add-post-btn btn-box-shadow">
                                <ion-icon name="settings-outline"></ion-icon>
                                Manage Post
                            </button>
                        </a>
                    </div>

                    <!-- TABLE -->
                    <div class="responsive-table">
                        <table>
                            <thead>
                                <th>SN</th>
                                <th>Author</th>
                                <th>Title</th>
                                <th>Topic</th>
                                <th>Views</th>
                            </thead> 
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Andy Hwang</td>
                                    <td>
                                        <a href="#">My First Blog Post</a>
                                        <div class="td-action-links">
                                            <a href="" class="edit">Restore</a>
                                            <span class="inline-divider">|</span>
                                            <a href="confirm_delete.html" class="trash">Delete</a>
                                        </div>
                                    </td>
                                    <td>Tech</td>
                                    <td>100</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Alice Kim</td>
                                    <td>
                                        <a href="">Mocha and Dobby</a>
                                        <div class="td-action-links">
                                            <a href="" class="edit">Restore</a>
                                            <span class="inline-divider">|</span>
                                            <a href="confirm_delete.html" class="trash">Delete</a>
                                        </div>                               
                                    </td>
                                    <td>Animals</td>
                                    <td>250</td>
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