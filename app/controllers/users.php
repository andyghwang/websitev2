<?php 

$errors = array();
$username = '';
$email = '';
$password = '';
$passwordConf = '';
$table = 'users';

// Validate User
function validateRegister($user) 
{
    $errors = array();
    
    // Username validation
    $existingUser = selectOne('users', ['username' => $user['username']]);
    // Check if field is empty
    if (empty($user['username'])) {
        array_push($errors, 'Username is required.');
    // Check if user exists
    } elseif (isset($existingUser)) {
        array_push($errors, 'Username is already in use. Please use another username'); 
    // Length validation
    } elseif (strlen($user['username']) < 5 || strlen($user['username']) > 18) {
        array_push($errors, 'Username must be between 5 and 18 characters.');
    }

    // Email validation
    if (empty($user['email'])) {
        array_push($errors, 'Email is required.');
    }
   
    // Check if email exists
    $existingEmail = selectOne('users', ['email' => $user['email']]);
    if (isset($existingEmail)) {
        array_push($errors, 'Email is already in use. Please use another email');
    }

    // Password validation
    if (empty($user['password'])) {
        array_push($errors, 'Password is required.');
    } elseif ($user['password'] < )

    if ($user['password'] !== $user['password-confirmation']) {
        array_push($errors, 'Passwords do not match.');
    }   

    return $errors;
}

function validateLogin($user) 
{
    $errors = array();

    // Check if field is empty
    if (empty($user['username'])) {
        array_push($errors, 'Username is required.'); 
    }
    // Password validation
    if (empty($user['password'])) {
        array_push($errors, 'Password is required.');
    } 

    return $errors;
}

// Create New Session
function loginUser($user) {
    
    $_SESSION['id'] = $user['id'];
    $_SESSION['username'] = $user['username'];
    $_SESSION['admin'] = $user['admin'];
    
    // Redirect
    if ($_SESSION['admin']) {
        header('location: ' . BASE_URL . '/admin/dashboard.php');
    } else {
        $_SESSION['message'] = "You have successfully logged in.";
        $_SESSION['type'] = 'success';
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