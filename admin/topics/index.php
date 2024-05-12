<?php include('../../path.php');?>
<?php include(ROOT_PATH . '/app/database/db.php');?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/admin_styles.css">
    <title>Admin - Topics</title>
</head>

<body>
    
    <!-- Header | Sidebar -->
    <?php include(ROOT_PATH . '/app/includes/admin_header_sidebar.php'); ?>

            <!-- Main Content -->
            <div class="page-content">
                <div class="sm-box admin-container">
                    <div class="admin-table">
                        <h1 class="center">Topics</h1>
                        <hr>
                        <!-- Table Actions -->
                        <div class="table-actions topics">
                            <span></span>
                            <a href="./create.php"> 
                                <button type="button" class="btn add-post-btn btn-box-shadow create-topic-btn">
                                    <ion-icon name="add-circle-outline" class="add-post-icon"></ion-icon>
                                    Create Topic
                                </button>
                            </a>  
                        </div>

                        <!-- TABLE -->
                        <div class="responsive-table">
                            <table>
                                <thead>
                                    <th>SN</th>
                                    <th>Topic</th>
                                    <th># of Articles</th>
                                </thead> 
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>
                                            Networking
                                            <div class="td-action-links">
                                                <a href="" class="trash">Delete</a>
                                                <span class="inline-divider">|</span>
                                                <a href="" class="edit">Edit</a>
                                            </div>
                                        </td>
                                        <td>3</td>
                                    </tr>    
                                    <tr>
                                        <td>2</td>
                                        <td>
                                            Cybersecurity
                                            <div class="td-action-links">
                                                <a href="" class="trash">Delete</a>
                                                <span class="inline-divider">|</span>
                                                <a href="" class="edit">Edit</a>
                                            </div>
                                        </td>
                                        <td>5</td>
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
    <script src="../../assets/js/admin.js"></script>

</body>
</html>