<?php include('../../path.php');?>
<?php include(ROOT_PATH . '/app/database/db.php');?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/admin_styles.css">
    <title>Admin - Assign Permissions</title>
</head>

<body>
    
    <!-- Header | Sidebar -->
    <?php include(ROOT_PATH . '/app/includes/admin_header_sidebar.php'); ?>

        <!-- Main Content -->
        <div class="page-content">
            <div class="sm-box admin-container">
                <div class="admin-table">
                    <h1 class="center">Author's Permissions</h1>
                    <hr>
                    <div class="role-description">
                        <h3>Author</h3>
                        <p>An author creates new content (articles) on the sight.</p>
                    </div>
                    <!-- Table Actions -->
                    <div class="table-actions topics">
                        <span></span>
                        <a href="index.php"> 
                            <button type="button" class="btn add-post-btn btn-box-shadow create-topic-btn">
                                <ion-icon name="settings-outline"></ion-icon>
                                Manage Role
                            </button>
                        </a>  
                    </div>
                    <!-- TABLE -->
                    <form action="#" method="post" class="assign-permissions-form">
                        <div class="responsive-table">
                            <table>
                                <thead>
                                    <th class="center">SN</th>
                                    <th>Permission</th>
                                    <th class="center">
                                        <label for="select-all" style="display: flex; flex-direction: column;">
                                            All 
                                            <input type="checkbox" name="select-all" id="select-all">
                                        </label>
                                    </th>                           
                                </thead> 
                                <tbody>
                                    <tr>
                                        <td class="center">1</td>
                                        <td>Create Post</td>
                                        <td class="center">
                                            <label for="permission"></label>
                                            <input type="checkbox" name="permission" id="permission">
                                        </td>
                                    </tr>     
                                    <tr>
                                        <td class="center">2</td>
                                        <td>Delete Post</td>
                                        <td class="center">
                                            <label for="permission"></label>
                                            <input type="checkbox" name="permission" id="permission">
                                        </td>
                                    </tr>    
                                    <tr>
                                        <td class="center">3</td>
                                        <td>Update Post</td>
                                        <td class="center">
                                            <label for="permission"></label>
                                            <input type="checkbox" name="permission" id="permission">
                                        </td>
                                    </tr>  
                                    <tr>
                                        <td colspan="3">
                                            <button class="btn btn-box-shadow add-post-btn" style="width: 100%;">Save Permissions</button>
                                        </td>
                                    </tr>                               
                                </tbody>
                            </table>
                        </div>
                    </form>                   
                </div>
            </div>
        </div>

    <!-- Ionic Icon -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <!-- Javascript -->  
    <script src="../../assets/js/admin.js"></script>
    <script>
        // Select All Input
        const selectAll = document.querySelector("#select-all");
        const checkBoxes = document.querySelectorAll('td input[type=checkbox]');

        selectAll.addEventListener('change', function(){
            checkBoxes.forEach(checkbox => checkbox.checked = selectAll.checked);
        });
    </script>

</body>
</html>