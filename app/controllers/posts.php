<?php 

$errors = array();
$table = 'posts';
$topics = selectAll('topics');
$topic = "";
$posts = selectAll($table);
$post = array();
$title = "";
$body = "";
$published = "";


// Validate Post
function validatePost($post) {
     
   $errors = array();
   if (empty($post['title'])) {
      array_push($errors, 'Please enter a title.');
   } 
   if (empty($post['body'])) {
      array_push($errors, 'Please enter post content.');
   } 
   if ($post['topic_id'] == "") {
      array_push($errors, 'Please choose a post topic.');
   }
    return $errors;
}

// Create Post
if (isset($_POST['create-post-btn'])) {

   $errors = validatePost($_POST);

   if (empty($_FILES['image']['name'])) {
      array_push($errors, 'Image required.');
   } 

   if (empty($errors)) {
      $_POST['user_id'] = 1;
      
      unset($_POST['create-post-btn']);
      if(isset($_POST['published'])) {
         $_POST['published'] = 1;
      } else {
         $_POST['published'] = 0;
      }
      // XSS Prevention
      $_POST['body'] = htmlentities($_POST['body']);
      // Image Upload
      $image_name = time() . "_" . $_FILES['image']['name'];
      $_POST['image'] = $image_name;
      $destination = ROOT_PATH . "/assets/images/post_images/$image_name";
      move_uploaded_file($_FILES['image']['tmp_name'], $destination);
      
      create($table, $_POST);

      // Redirect
      $_SESSION['message'] = "You successfully created a post.";
      $_SESSION['type'] = "success";
      header('location: index.php');
   } else {
      $title = $_POST['title'];
      $body = $_POST['body'];
      $published =  0;
      if(isset($_POST['published'])) {
         $published = 1;
      } else {
         $published = 0;
      }   
   }
}

// Update Post
if (isset($_GET['edit_id'])) {
   $post = selectOne($table, ['id' => $_GET['edit_id']]);   
   $topic = selectOne('topics', ['id' => $post['topic_id']]);
} 

if (isset($_POST['update-post-btn'])) {
   $errors = array();
   $errors = validatePost($_POST);
   $topic = selectOne('topics', ['id' => $_POST['topic_id']]);

   if (empty($errors)) {
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

   } else {
      $post['title'] = $_POST['title'];
      $post['body'] = $_POST['body'];
      $post['id'] = $_POST['id'];

   }
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

// Change Published
if (isset($_GET['published_id'])) {
   $post = selectOne($table, ['id' => $_GET['published_id']]);
   $published = array();
   $published_message = "";

   if ($post['published'] == 0) {
      $published = ['published' => 1];
      $published_message = "Post has been published.";
   } else {
      $published = ['published' => 0];
      $published_message = "Post has been unpublished.";
   }
   update($table, $post['id'], $published);
   $_SESSION['message'] = $published_message;
   $_SESSION['type'] = "success";
   header('location: index.php');
   end();
}
?>