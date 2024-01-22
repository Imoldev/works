<?php

    //проверка существования куки
    if (isset($_COOKIE['form_send_success'])) {
		$message = 'Форма успешно отправлена';
        require __DIR__ . '/../templates/message_page_template.tpl.php';
    }
    else {
        require __DIR__ . '/../templates/userform_template.tpl.php';
    }