<?php 

include(ROOT_PATH . '/app/helpers/validateUser.php');

$errors = array();
$username = '';
$email = '';
$password = '';
$passwordConf = '';
$table = 'users';


function loginUser($user) {
    
    $_SESSION['id'] = $user['id'];
    $_SESSION['username'] = $user['username'];
    $_SESSION['admin'] = $user['admin'];
    $_SESSION['message'] = "You have successfully logged in.";
    $_SESSION['type'] = 'success';
    
    // Redirect
    if ($_SESSION['admin']) {
        header('location: ' . BASE_URL . '/admin/dashboard.php');
    } else {
        header('location: ' . BASE_URL . '/index.php');
    }
    exit();
}

// Register User
if (isset($_POST['register-btn'])) {

    $errors = validateRegister($_POST);

    if (empty($errors)) {
        unset($_POST['password-confirmation'], $_POST['register-btn']);
        $_POST['admin'] = 0;
        // Password Hash for Security
        $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $user_id = create($table, $_POST);
        $user = selectOne($table, ['id' => $user_id]);

        loginUser($user);      

    } else {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $passwordConf = $_POST['password-confirmation'];
    }
}

// Login User
if (isset($_POST['login-btn'])) {
   
    $errors = validateLogin($_POST);
    
    // No Errors
    if (empty($errors)) {

        $user = selectOne($table, ['username' => $_POST['username']]);

        // User Exists && Password Match
        if ($user && password_verify($_POST['password'], $user['password'])) {
            loginUser($user);
          
        // User Doesn't Exist  
        } else {
            array_push($errors, 'Invalid username or password.');
            $username = $_POST['username'];
            $password = $_POST['password'];
        } 

    // Has Error(s)  
    } else {
        $username = $_POST['username'];
        $password = $_POST['password'];
    }
}