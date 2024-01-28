<?php

    include __DIR__ . '/../lib/form_data_check.php';
    $dbh = require __DIR__ . '/../db/pdo.php';

    //проверка существования куки
    if (isset($_COOKIE['form_send_success'])) {
        header("Location: /userform.php");
        exit();
    }

    //проверка существования имени пользователя
    if (!isset($_POST['username']) || empty($_POST['username'])) {
        $error_message = 'Указано неверное имя';

        header("Location: /userform.php?error={$error_message}");
        exit();
    }

    //проверка существования почты
    if (!isset($_POST['email']) || empty($_POST['email'])) {
        $error_message = 'Указан неверный адрес эл. почты';

        header("Location: /userform.php?error={$error_message}");
        exit();
    }

    //проверка загружаемого файла
    switch (check_upload_file($_FILES['photo'])) {
        case 0:
            $tmp_photo_path = $_FILES['photo']['tmp_name'];
            $photo_filename = $_FILES['photo']['name'];
            $photo_path = '/resources/uploads/' . uniqid() . $photo_filename;
            move_uploaded_file($tmp_photo_path, __DIR__ . $photo_path);            
            break;
        case 1:
            $photo_path = '/resources/images/person.svg';
            break;
        case 2:
            $error_message = 'Размер загружаемого файла не должен превышать 2 Мб';
            header("Location: /userform.php?error={$error_message}");
            exit();

        case 3:
            $error_message = 'Неверный тип загружаемого файла';
            header("Location: /userform.php?error={$error_message}");
            exit();           

        default:
            $photo_path = '/resources/images/person.svg';  
            break;
    }

    //проверка номер телефона
    $phone = check_phone($_POST['phone']);

    $name = $_POST['username'];
    $email = $_POST['email'];

    //добавление контактов в БД
    $stmt = $dbh->prepare('INSERT INTO contacts (name, email, phone, photo) VALUES (:name, :email, :phone, :photo)');
    $stmt->execute([':name' => $name, ':email' => $email, ':phone' => $phone, ':photo' => $photo_path]);
    $dbh = null;

    //пометить пользователя кукой
    setcookie("form_send_success", $name, time()+60*60*24);
    header('Location: /userform.php');