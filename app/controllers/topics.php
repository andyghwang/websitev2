<?php 

$errors = array();
$id = "";
$name = "";
$description = "";
$table = "topics";
$topics = selectAll($table);

// Topic Validation
function validateTopic($topic) {  
    global $errors;
    global $table;
    
    $existingTopic = selectOne($table, ['name' => $topic['name']]);
    if (empty($topic['name'])) {
        array_push($errors, 'Please enter a topic.');
    } elseif ($existingTopic['name'] == $topic['name']){
        array_push($errors, 'This topic already exists.');
    } 
    return $errors;
}

function validateUpdate($topic) {
    global $errors;

    if (empty($topic['name'])) {
        array_push($errors, 'Please enter a topic name.');
    }
    return $errors;
}

// Create Topic
if (isset($_POST['create-topic-btn'])) {

    $errors = validateTopic($_POST);

    if (empty($errors)) {
        unset($_POST['create-topic-btn']);
        create($table, $_POST);
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

    $errors = validateUpdate($_POST);
    $id = $_POST['id'];
    $name = $_POST['name'];
    $description = $_POST['description'];
    if (empty($errors)) {       
        unset($_POST['update-topic-btn']);
        unset($_POST['id']);
        update($table, $id, $_POST);
        $_SESSION['message'] = "Topic updated successfully.";
        $_SESSION['type'] = "success";
        // Redirect
        header('location: ' . BASE_URL . '/admin/topics/index.php');
        exit();  
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