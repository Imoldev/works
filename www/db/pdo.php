<?php

    $config = require __DIR__ . '/config.php';

    static $dbconn; //объект подключения к БД

    //если объект не существует - создать его
    if ($dbconn == null) {
        $dbconn = new PDO("mysql:host={$config['dbHost']};dbname={$config['dbName']}", $config['dbUser'], $config['dbPassword']);
    }

    return $dbconn;