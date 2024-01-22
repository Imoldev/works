<?php

	session_start();

	//проверка существования сессии и авторизация
	if(isset($_SESSION['admin'])) {
		header('Location: /admin/');
		exit();
	}

	require __DIR__ . '/../templates/login_template.tpl.php';
