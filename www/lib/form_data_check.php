<?php

    define('MAX_FILE_SIZE', 2000000); //максимальный размер загружаемого файла

    //функция проверки номер телефона
    function check_phone($phone) {

        if (strlen($phone) < 12 || !str_starts_with($phone, '+7')) {
            return '';
        }

        $res = str_replace('+7', '8', $phone);

        if (!is_numeric($res)) {
            return '';
        }

        return $res;
    }

    //функция проверки загружаемого файла
    function check_upload_file($file) {
        
        if ($file['error'] != 0) {
            return 1; //файл не загружен
        }

        if ($file['size'] > MAX_FILE_SIZE) {
            return 2; //слишком большой размер файла
        }

        $file_type = mime_content_type($file['tmp_name']);
        if ($file_type != 'image/png' && $file_type != 'image/jpeg') {
            return 3; //неправильный формат файла
        };

        return 0;
    }