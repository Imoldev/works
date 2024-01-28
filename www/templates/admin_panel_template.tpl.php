<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Цифровая кафедра ТулГУ</title>
	<link rel="stylesheet" href="/resources/css/admin_panel_style.css">
</head>
<body>
	<div class="bg">
		<div class="content-box">
            <div class="menu-panel">
                <div class="menu">
                    <div class="title">Панель управления записями</div>
                    <a class="button sign-out-btn" href="/admin/sign_out.php">Выйти</a>
                </div>
            </div>
            <div class="subtitle">Всего записей: <? echo $total_contacts_count ?> </div>
            <div class="contact-list">
                <? foreach($contacts as $row) { ?>
                <div class="item">
                    <div class="item-data">
                        <div class="item-photo">
                            <img class="user-photo" src=" <? echo $row['photo']; ?> ">
                        </div>
                        <div class="item-contacts">
                            <div class="item-name"> <? echo $row['name']; ?> </div>
                            <div class="item-email">
                                <div class="icon-email"></div>
                                <div class="caption"> <? echo $row['email']; ?> </div>
                            </div>
                            <div class="item-phone">
                                <div class="icon-phone"></div>
                                <div class="caption"> <? echo (!empty($row['phone'])) ? $row['phone'] : 'Не указан'; ?> </div>
                            </div>
                        </div>
                    </div>
                    <div class="item-onreg">Дата заполнения:<br> <? echo $row['on_reg']; ?> </div>
                    <div class="item-control">
                        <a href="delete_contact.php?id=<? echo $row['id'] ?>&page=<? echo $page ?>" class="item-delete-btn">
                            <div class="icon delete-btn"></div>
                        </a>
                    </div>
                </div>
                <? } ?>
            </div>
            <div class="pagination">
                <? for ($i=1; $i <= $pages_count; $i++) { ?>
                    <a class="page <? if ($page == $i) { echo 'active-page'; } ?>" href="/admin/index.php?page=<? echo $i ?>"> <? echo $i ?> </a>
                <? } ?>
            </div>
        </div>
	</div>
  </body>
</html>