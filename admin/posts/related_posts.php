<?php include('../../path.php');?>
<?php include(ROOT_PATH . '/app/database/db.php');?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/admin_styles.css">
    <title>Admin - Related Posts</title>
</head>

<body>
    
    <!-- Header | Sidebar -->
    <?php include(ROOT_PATH . '/app/includes/admin_header_sidebar.php'); ?>

            <!-- Main Content -->
            <div class="page-content">
                <div class="admin-container">
                    <div class="admin-table lg-box">
                        <div class="related-tables">
                           
                            <!-- ALL POSTS TABLE -->
                            <div class="responsive-table all-posts">
                                <h1 class="center">All Posts</h1>
                                <div class="search-selector center">
                                    <label for="search-post-input">Search Posts:</label>
                                    <input 
                                        type="text" 
                                        name="search-term"
                                        id="search-post-input"
                                        placeholder="Search..."
                                    />
                                </div>                         
                                <table>
                                    <thead>
                                        <th>SN</th>
                                        <th colspan="2">Title</th>
                                    </thead> 
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Creating a personal website with HTML, CSS, and Javascript</td>
                                            <td><ion-icon name="checkmark-outline" class="check-icon"></ion-icon></td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Using Tailwind CSS to style webbsite</td>
                                            <td><ion-icon name="checkmark-outline" class="check-icon"></ion-icon></td>
                                        </tr>                                   
                                    </tbody>
                                </table>
                            </div>

                            <!-- RELATED POSTS TABLE -->
                            <div class="responsive-table related-posts">
                                <h1 class="center">Related Posts</h1>
                                <p class="center">⭐Tip: Drag andd drop to order items</p>
                                <table>
                                    <thead>
                                        <tr>
                                            <th class="center" colspan="3">
                                                <a href="">This is the title of the related post</a>
                                            </th>
                                        </tr>                                       
                                        <tr>
                                            <th>SN</th>
                                            <th colspan="2">Title</th>
                                        </tr>                               
                                    </thead> 
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Learning git and github for version control</td>
                                            <td><ion-icon name="close-outline" class="close-icon hide"></ion-icon></td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>CCNA certification studies</td>
                                            <td><ion-icon name="close-outline" class="close-icon hide"></ion-icon></td>
                                        </tr><td colspan="3" style="padding-left: 30px; padding-right: 30px;"><button style="width: 100%;" class="btn btn-box-shadow add-post-btn">Save Related Posts</button></td>                           
                                    </tbody>
                                </table>
                            </div>
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