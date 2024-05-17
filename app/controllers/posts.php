<?php 

$errors = array();
$table = 'posts';
$topics = selectAll('topics');
$posts = selectAll($table);
$post = array();

// Create Post
if (isset($_POST['create-post-btn'])) {

   $_POST['user_id'] = 1;
   $_POST['image'] = $_FILES['image']['name'];
   unset($_POST['create-post-btn']);
   unset($_POST['topic-id']);
   if(isset($_POST['published'])) {
      $_POST['published'] = 1;
   } else {
      $_POST['published'] = 0;
   }
   create($table, $_POST);
   
   // Redirect
   $_SESSION['message'] = "You successfully created a post.";
   $_SESSION['type'] = "success";
   header('location: index.php');
}

// Update Post

if (isset($_GET['edit_id'])) {
   $post = selectOne($table, ['id' => $_GET['edit_id']]);
} 

if (isset($_POST['update-post-btn'])) {
   $id = $_POST['id'];
   $_POST['user_id'] = 1;
   $_POST['image'] = $_FILES['image']['name'];
   unset($_POST['update-post-btn']);
   unset($_POST['topic-id']);
   unset($_POST['id']);
   if(isset($_POST['published'])) {
      $_POST['published'] = 1;
   } else {
      $_POST['published'] = 0;
   }
   update($table, $id, $_POST);

   // Redirect
   $_SESSION['message'] = "You successfully updated a post.";
   $_SESSION['type'] = "success";
   header('location: index.php');
}


// Delete Post
if (isset($_GET['del_id'])) {
   $post = selectOne($table, ['id' => $_GET['del_id']]);
}
if (isset($_GET['del_post_id'])) {
   $post = selectOne($table, ['id' => $_GET['del_post_id']]);
   delete($table, $post['id']); 
   $_SESSION['message'] = "You successfully deleted the post " . $post['title'] . ".";
   $_SESSION['type'] = "success";
   header('location: index.php');
};

?>