<?php
    define('ADMIN_LOGIN', 'admin'); //логин администратора
    define('ADMIN_PASS', 'admin'); //пароль администратора

    //проверка логина и пароля из формы и авторизация
    if (!isset($_POST['username']) || !isset($_POST['password']) || 
        empty($_POST['username']) || empty($_POST['password']) ||
        !($_POST['username'] === ADMIN_LOGIN && $_POST['password'] === ADMIN_PASS)) {

            $message = 'Неверный логин или пароль';
    
            header("Location: /login.php?error={$message}");
            exit();
        }
        else {
            session_start();
            $_SESSION['admin'] = ADMIN_LOGIN;

            header('Location: /admin/');
        }