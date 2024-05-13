<?php 

$errors = array();
$id = "";
$name = "";
$description = "";
$table = "topics";
$topics = selectAll($table);

// Topic Validation
function validateTopic($topic) {
    global $table;  
    $errors = array();
     
    if (empty($topic['name'])) {
        array_push($errors, 'Please enter a topic.');
    } 

    $existingTopic = selectOne($table, ['name' => $topic['name']]);
    if ($existingTopic){
        
        if (isset($topic['update-topic-btn']) && $topic['id'] != $existingTopic['id']) {
            array_push($errors, 'This topic already exists.');
        }
        if (isset($topic['create-topic-btn'])) {
            array_push($errors, 'This topic already exists.');
        }        
    } 
    return $errors;
}

// Create Topic
if (isset($_POST['create-topic-btn'])) {

    $errors = validateTopic($_POST);

    if (empty($errors)) {
        unset($_POST['create-topic-btn']);
        $topic_id = create($table, $_POST);
        $_SESSION['message'] = "Topic created successfully.";
        $_SESSION['type'] = "success";
        // Redirect
        header('location: ' . BASE_URL . '/admin/topics/index.php');
        exit();
    } else {
        $name = $_POST['name'];
        $description = $_POST['description'];
    }
}   

// Edit Topic
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $topic = selectOne($table, ['id' => $id]);
    $id = $topic['id'];
    $name = $topic['name'];
    $description = $topic['description'];
}

if (isset($_POST['update-topic-btn'])) {
    $errors = validateTopic($_POST);
    $id = $_POST['id'];
    $name = $_POST['name'];
    $description = $_POST['description'];
    if (empty($errors)) {       
        unset($_POST['update-topic-btn']);
        unset($_POST['id']);
        $topic_id = update($table, $id, $_POST);
        $_SESSION['message'] = "Topic updated successfully.";
        $_SESSION['type'] = "success";
        // Redirect
        header('location: ' . BASE_URL . '/admin/topics/index.php');
        exit();  
    } else {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $description = $_POST['description'];
    }
}

// Delete Topic
if (isset($_GET['del_id'])) {   
    $topic = selectOne($table, ['id' => $_GET['del_id']]);
    $id = $topic['id'];
    delete($table, $id);
    $_SESSION['message'] = "Topic deleted.";
    $_SESSION['type'] = "success";
    // Redirect
    header('location: ' . BASE_URL . '/admin/topics/index.php');
    exit();
}