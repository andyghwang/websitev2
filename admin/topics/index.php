<?php include('../../path.php');?>
<?php include(ROOT_PATH . '/app/database/db.php');?>
<?php include(ROOT_PATH . '/app/controllers/topics.php');?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/admin_styles.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../../assets/css/public.css?v=<?php echo time(); ?>">
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

                        <!-- Flash Message -->
                        <?php include(ROOT_PATH . '/app/includes/messages.php'); ?>

                        <!-- TABLE -->
                        <div class="responsive-table">
                            <table>
                                <thead>
                                    <th>SN</th>
                                    <th>Topic</th>
                                    <th>Description</th>
                                </thead> 
                                <tbody>
                                    <?php foreach ($topics as $key => $topic) : ?>
                                    <tr>
                                        <td><?php echo $key + 1;?></td>
                                        <td>
                                            <?php echo $topic['name']; ?>
                                            <div class="td-action-links">
                                                <a href="index.php?del_id=<?php echo $topic['id']; ?>" class="trash">Delete</a>
                                                <span class="inline-divider">|</span>
                                                <a href="edit.php?id=<?php echo $topic['id']; ?>" class="edit">Edit</a>
                                            </div>
                                        </td>
                                        <td>
                                            <?php echo $topic['description']; ?>
                                        </td>                                                                                                                    
                                    </tr>
                                    <?php endforeach; ?>                                                          
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