<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Цифровая кафедра ТулГУ</title>
	<link rel="stylesheet" href="/resources/css/style.css">
</head>
<body>
	<div class="auth-bg">
		<div class="auth-box">
			<div class="title">Анкета</div>
			<div class="msg msg-error"> 
				<?php if (isset($_GET['error'])) echo $_GET['error']; ?>
			</div>
			<form class="auth-form" name="auth-form" action="add_contact.php" method="post" enctype="multipart/form-data">
				<div class="note">
					<div class="icon icon-user"></div>
					<div class="note-text">Имя</div>
				</div>
				<input type="text" class="username-input" id="username-input" name="username" placeholder="Имя Фамилия" required>
				<div class="note">
					<div class="icon icon-email"></div>
					<div class="note-text">Электронная почта</div>
				</div>
				<div class="email-input-box">
                    <input class="email-input" id="email" name="email" type="email" placeholder="example@domain.ru" required>
                </div>
				<div class="note">
					<div class="icon icon-phone"></div>
					<div class="note-text">Телефон</div>
				</div>
				<div class="phone-input-box">
                    <input class="phone-input" id="phone" name="phone" type="tel" placeholder="+7900-000-00-00" pattern="\+7\d{10}">
                </div>
				<div class="note">
					<div class="icon icon-photo"></div>
					<div class="note-text">Фото</div>
				</div>
				<div class="photo-input-box">
					<div class="button photo-input-btn">Выбрать файл</div>
					<input class="photo-input" id="photo" name="photo" type="file" accept="image/jpeg,image/png">
                </div>
                <button type="submit" class="button form-submit" id="form-submit">Отправить</button>
			</form>
			<div class="auth-hint">Цифровая кафедра ТулГУ. Разработка мобильных и веб-приложений. Практическое занятие по PHP. Мшецян Николай</div>
		</div>
	</div>
</body>
</html>