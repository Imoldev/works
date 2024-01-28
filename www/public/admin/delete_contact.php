<?php
    
    $CONT_IN_PAGE = 5; //количество записей на странице
    $dbh = require __DIR__ . '/../../db/pdo.php';

    session_start();

    //проверка авторизации
    if (!isset($_SESSION['admin'])) {
        $message = 'Вы не авторизованы';

        header("Location: /../login.php?error={$message}");
        exit();
    }

    //проверка наличия записи по id и ее удаление
    if (isset($_GET['id']) && !empty($_GET['id']) && is_numeric($_GET['id'])) {
        $id = (int) $_GET['id'];
        $id_exist = $dbh->query('SELECT COUNT(*) FROM contacts')->rowCount();
        if ($id_exist) {
            $stmt = $dbh->prepare('DELETE FROM contacts WHERE id = :id');
            $stmt->execute([':id' => $id]);
        }
    }

    //получение общего количества записей
    $contacts_count = $dbh->query('SELECT COUNT(*) FROM contacts');
    $total_contacts_count = $contacts_count->fetch()[0];
    $pages_count = ceil($total_contacts_count / $CONT_IN_PAGE);

    //воврат на ту же страницу
    if(!isset($_GET['page']) || empty($_GET['page']) || 
        !is_numeric($_GET['page']) || $_GET['page'] > $pages_count) {
        $page = 1;
    }
    else {
        $page = (int) $_GET['page'];
    }

    header("Location: /admin/index.php?page={$page}");

    $dbh = null;