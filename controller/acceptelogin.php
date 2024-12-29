<?php
session_start();
require_once '../controller/configu.php';
require_once '../models/User.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    if (empty($username) || empty($password)) {
        $_SESSION['error'] = 'Username and password are required.';
        header('Location: ../view/login.php');
        exit();
    }

    $user = new UserController();
    if ($user->login($username, $password)) {
        header('Location: ../view/admin.php');
        exit();
    } else {
        $_SESSION['error'] = 'Invalid username or password.';
        header('Location: ../view/login.php');
        exit();
    }
}
