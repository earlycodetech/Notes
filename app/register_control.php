<?php
require "../modules/db_connect.php";
session_start();
date_default_timezone_set('Africa/Lagos');


// check for btn
if (!isset($_POST['register'])) {
    $_SESSION['error_msg'] = "Please Fill the form to continue!";
    header('Location: ../signup');
} else {
    // collect all data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm = $_POST['confirm'];

    $hash = password_hash($password, PASSWORD_DEFAULT);
    $date = date('Y-m-d');

    foreach ($_POST as $key => $value) {
        if (trim($value) === "" && $key != 'register') {
            $_SESSION['error_msg'] = "Fields cannot be empty!";
            header('Location: ../signup');
            die();
        }
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['error_msg'] = "This email is invalid!";
        header('Location: ../signup');
        die();
    } elseif (strlen($password) < 8) {
        $_SESSION['error_msg'] = "Password too short,minimum 8 characters!";
        header('Location: ../signup');
        die();
    } elseif ($password != $confirm) {
        $_SESSION['error_msg'] = "Password do not match!";
        header('Location: ../signup');
        die();
    }
    else {
        $sql = "INSERT INTO users (name, email, password, created_at) VALUES (?,?,?,?)";
        $stmt = mysqli_stmt_init($connect); // 1. Initialize
        mysqli_stmt_prepare($stmt,$sql); //2. Prepare
        mysqli_stmt_bind_param($stmt,"ssss", $name, $email, $hash, $date); //3. Bind - $stmt, type, ....$variables
        $execute= mysqli_stmt_execute($stmt);

        if(!$execute) {
            $_SESSION['error_msg'] = "Something went wrong!";
            header('Location: ../signup');
            die();
        }
        else {
            $_SESSION['success_msg'] = "Account has been created! ";
            header('Location: ../signup');
            die();
        }
    }
}
