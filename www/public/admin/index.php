<?php

    $CONT_IN_PAGE = 5; //количество записей на странице
    $dbh = require __DIR__ . '/../../db/pdo.php';

    session_start();

    //проверка существаования сессии и авторизации
    if (!isset($_SESSION['admin'])) {
        header('Location: /../login.php');
        exit();
    }

    //получение общего количества записей
    $contacts_count = $dbh->query('SELECT COUNT(*) FROM contacts');
    $total_contacts_count = $contacts_count->fetch()[0];
    $pages_count = ceil($total_contacts_count / $CONT_IN_PAGE);

    //определение текущей страницы
    if(!isset($_GET['page']) || empty($_GET['page']) || 
        !is_numeric($_GET['page']) || $_GET['page'] > $pages_count) {
        $page = 1;
    }
    else {
        $page = (int) $_GET['page'];
    }

    //получение записей для текущей страницы
    $offset = ($page - 1) * $CONT_IN_PAGE;
    $stmt = "SELECT * FROM contacts ORDER BY on_reg DESC LIMIT {$CONT_IN_PAGE} OFFSET {$offset}";
    $contacts = $dbh->query($stmt);
    $dbh = null;
    
    require __DIR__ . '/../../templates/admin_panel_template.tpl.php';
    