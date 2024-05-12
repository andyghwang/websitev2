<?php include('../../path.php');?>
<?php include(ROOT_PATH . '/app/database/db.php');?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/admin_styles.css">
    <title>Admin - Posts</title>
</head>

<body>
    
    <!-- Header | Sidebar -->
    <?php include(ROOT_PATH . '/app/includes/admin_header_sidebar.php'); ?>

        <!-- Main Content -->
        <div class="page-content">
            <div class="admin-container lg-box">
                <div class="admin-table">
                    <h1 class="center">Posts</h1>
                    <hr>

                    <!-- Flash Message -->
                    <div class="message success">
                        <ion-icon class="message-icon" name="checkmark-circle-outline"></ion-icon>
                        <span>This is a sample message</span>
                    </div>
                    
                    <!-- Featured Post -->
                    <form action="post" class="featured-post-form">
                        <strong>Currently Featured Post:</strong>
                        <span class="title-wrapper">
                            <span>
                                Sample Title
                            </span>    
                            <button type="button" class="change-btn">
                                Change
                            </button>
                        </span>
                        <span class="input-wrapper hide">
                            <input 
                                type="text"
                                name="title"
                                class="input-control input-control-sm"
                                placeholder="Enter Post Title..."
                            />
                            <button type="submit" class="btn-primary">
                                Update
                            </button>
                        </span>
                    </form>

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
                        <div class="thrash-add">
                            <a href="trash.php" class="td-none">
                                <button type="button" class="btn trash-btn btn-box-shadow">
                                    <ion-icon name="trash-outline" class="trash-icon"></ion-icon>
                                    Trash
                                </button>
                            </a>
                            <a href="create.php"> 
                                <button type="button" class="btn add-post-btn btn-box-shadow">
                                    <ion-icon name="add-circle-outline" class="add-post-icon"></ion-icon>
                                    Create Post
                                </button>
                            </a>
                           
                        </div>
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
                                <th>Publish</th>
                            </thead> 
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Andy Hwang</td>
                                    <td>
                                        <a href="#">My First Blog Post</a>
                                        <div class="td-action-links">
                                            <a href="" class="trash">Delete</a>
                                            <span class="inline-divider">|</span>
                                            <a href="" class="edit">Edit</a>
                                            <span class="inline-divider">|</span>
                                            <a href="related_posts.html" class="edit">Related Post</a>
                                        </div>
                                    </td>
                                    <td>Tech</td>
                                    <td>100</td>
                                    <td><a href="#">Publish</a></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Alice Kim</td>
                                    <td>
                                        <a href="">Mocha and Dobby</a>
                                        <div class="td-action-links">
                                            <a href="" class="trash">Delete</a>
                                            <span class="inline-divider">|</span>
                                            <a href="" class="edit">Edit</a>
                                            <span class="inline-divider">|</span>
                                            <a href="related_posts.html" class="edit">Related Post</a>
                                        </div>                                
                                    </td>
                                    <td>Animals</td>
                                    <td>250</td>
                                    <td><a href="">Unpublish</a></td>
                                </tr>                                   
                            </tbody>
                            <tfoot>
                                <td colspan="6">
                                    <div class="pagination-links">
                                        <a href="" class="link active">1</a>
                                        <a href="" class="link">2</a>
                                        <a href="" class="link">3</a>
                                        <a href="" class="link">4</a>
                                        <a href="" class="link">5</a>
                                        <a href="" class="link">6</a>
                                        <a href="" class="link">7</a>
                                    </div>
                                </td>
                            </tfoot>
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
    
    <!-- Featured Post Change Btn -->
    <script>
        const changeBtn = document.querySelector(".change-btn");
        const inputWrapper = document.querySelector(".input-wrapper");
        const titleWrapper = document.querySelector(".title-wrapper");

        changeBtn.addEventListener("click", function() {
            changeBtn.classList.add("hide");
            inputWrapper.classList.toggle("hide");
            titleWrapper.classList.toggle("hide");
        });
    </script>

</body>
</html>