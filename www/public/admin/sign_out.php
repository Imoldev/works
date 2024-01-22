<?php

    session_start();

    //проверка существования сессии и деавторизация
    if(!isset($_SESSION['admin'])) {
        unset($_SESSION['admin']);
    }

    session_destroy();

    header('Location: /index.php');