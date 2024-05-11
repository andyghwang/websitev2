<?php 

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