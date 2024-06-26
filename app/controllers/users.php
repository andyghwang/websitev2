<?php 

$errors = array();
$username = '';
$email = '';
$password = '';
$passwordConf = '';
$admin = 0;
$bio = '';
$facebook = '';
$linkedin = '';
$instagram = '';
$table = 'users';
$users = selectAll('users');

// Validate User
function validateUser($user) 
{
    $errors = array();
    global $table;
    
    // Username validation

    // Check if field is empty
    if (empty($user['username'])) {
        array_push($errors, 'Username is required.');
    }
    // Check if user exists
    $existingUser = selectOne($table, ['username' => $user['username']]);
    if ($existingUser){    
        if (isset($user['update-user-btn']) && $user['id'] != $existingUser['id']) {
            array_push($errors, 'This user already exists.');
        }
        if (isset($user['create-user-btn'])) {
            array_push($errors, 'This user already exists.');
        }        
    } 
    
     // Length validation
    if (strlen($user['username']) < 5 || strlen($user['username']) > 18) {
        array_push($errors, 'Username must be between 5 and 18 characters.');
    }

    // Email validation
    if (empty($user['email'])) {
        array_push($errors, 'Email is required.');
    }
    $existingEmail = selectOne($table, ['email' => $user['email']]);
    if ($existingEmail){    
        if (isset($user['update-user-btn']) && $user['id'] != $existingEmail['id']) {
            array_push($errors, 'This email already exists.');
        }
        if (isset($user['create-user-btn'])) {
            array_push($errors, 'This email already exists.');
        }        
    } 
   
    // Password validation
    if (empty($user['password'])) {
        array_push($errors, 'Password is required.');
    } 

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

// New Session
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

// Register User **COMBINE WITH CREATE USER IN THE FUTURE**
if (isset($_POST['register-btn'])) {

    $errors = validateUser($_POST);

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

// Create User **COMBINE WITH CREATE USER IN THE FUTURE**
if (isset($_POST['create-user-btn'])) {
   
    $errors = validateUser($_POST);

    if (empty($errors)) {
         unset($_POST['password-confirmation'], $_POST['create-user-btn']);
        // Password Hash for Security
        $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $user_id = create($table, $_POST);
        $user = selectOne($table, ['id' => $user_id]);
        // Redirect
        $_SESSION['message'] = "You successfully created a user.";
        $_SESSION['type'] = 'success';
        header('location: ' . BASE_URL . '/admin/users/index.php');

    } else {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $passwordConf = $_POST['password-confirmation'];
        $admin = $_POST['admin'];
        $bio = $_POST['bio'];
        $facebook = $_POST['facebook'];
        $linkedin = $_POST['linkedin'];
        $instagram = $_POST['instagram'];
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

// Delete User
if (isset($_GET['del_user_id'])) {

    $user = selectOne($table, ['id' => $_GET['del_user_id']]);
    $_SESSION['username'] = $user['username'];   
}
if (isset($_GET['del_user_confirm'])) {
        
    delete($table, $_GET['del_user_confirm']);
    // Redirect
    $username =  $_SESSION['username'];
    $_SESSION['message'] = "User $username successfully deleted ";
    $_SESSION['type'] = 'success';
    header('location: ' . BASE_URL . '/admin/users/index.php');
}

// Update User
$update_user_id = 0;
if (isset($_GET['update_user_id'])) {

    $user = selectOne($table, ['id' => $_GET['update_user_id']]);
    $update_user_id = $user['id'];
    $username = $user['username'];
    $email = $user['email'];
    $admin = $user['admin'];
    $bio = $user['bio'];
    $facebook = $user['facebook'];
    $linkedin = $user['linkedin'];
    $instagram = $user['instagram'];
    
}

if (isset($_POST['update-user-btn'])) {
    
    $update_user_id = $_POST['id'];
    $errors = validateUser($_POST);

    if (empty($errors)) {
        $id = $_POST['id'];
        unset($_POST['update-user-btn']);
        unset($_POST['password-confirmation']);
        unset($_POST['id']);
        
        update($table, $id, $_POST);

        // Redirect
        $_SESSION['message'] = "User updated.";
        $_SESSION['type'] = 'success';
        header('location: ' . BASE_URL . '/admin/users/index.php');

    } else {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $admin = $_POST['admin'];
        $bio = $_POST['bio'];
        $facebook = $_POST['facebook'];
        $linkedin = $_POST['linkedin'];
        $instagram = $_POST['instagram'];
    }
}