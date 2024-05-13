<?php 

include(ROOT_PATH . '/app/helpers/validateUser.php');

$errors = array();
$name = "";
$description = "";

// Topic Validation
function validateTopic($topic) {  
    global $errors;
    
    $existingTopic = selectOne('topics', ['name' => $topic['name']]);
    if (empty($topic['name'])) {
        array_push($errors, 'Please enter a topic.');
    } elseif ($existingTopic['name'] == $topic['name']){
        array_push($errors, 'This topic already exists.');
    }
    if (empty($topic['description'])) {
        array_push($errors, 'Please enter a description.');
    }    
    return $errors;
}

// Create Topic
if (isset($_POST['create-topic-btn'])) {

    $errors = validateTopic($_POST);

    if (empty($errors)) {
        unset($_POST['create-topic-btn']);
        create('topics', $_POST);
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