<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Авторизация</title>
	<link rel="stylesheet" href="/resources/css/style.css">
</head>
<body>
	<div class="auth-bg">
		<div class="auth-box">
			<div class="title">Авторизация</div>
			<div class="msg msg-error">
				<?php if (isset($_GET['error'])) echo $_GET['error']; ?>
			</div>
			<form class="auth-form" name="auth-form" action="/admin/auth.php" method="post">
				<div class="note">
					<div class="icon icon-user"></div>
					<div class="note-text">Имя пользователя</div>
				</div>
				<input class="username-input" id="username-input" name="username" required>
				<div class="note">
					<div class="icon icon-password"></div>
					<div class="note-text">Пароль</div>
				</div>
				<div class="password-input-box">
                    <input class="password-input" id="password" name="password" type="password" required>
                </div>
                <button type="submit" class="button form-submit">Войти</button>
			</form>
			<div class="auth-hint">Цифровая кафедра ТулГУ. Разработка мобильных и веб-приложений. Практическое занятие по PHP. Мшецян Николай</div>
		</div>
	</div>
  </body>
</html>