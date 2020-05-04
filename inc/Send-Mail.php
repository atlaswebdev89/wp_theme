<?php
//Функция очистки от тегов и лишних пробелов
function clear_str($str) {
    return strip_tags(trim($str));
}
function send_mail (array $data)
{
//Данные для отправки почты
    $smtp = require_once get_template_directory() . '/config/mail-config.php';
//Массив названия форм на сайте (id формы)
    $array = require_once get_template_directory() . '/config/config-form.php';
    if ($data && !empty($data)) {
//Очиста от тегов
        foreach ($data as &$item) {
            $item = clear_str($item);
        }

// Формируем двухмерный массив, в котором каждый массив имеет два поля: имя поля и значение
        $i = 0;
        if (array_key_exists($data['id'], $array)) {
            $title = (isset($array[$data['id']]['title']) && !empty($array[$data['id']]['title'])) ? $array[$data['id']]['title'] : 'Сообщение с сайта';
            foreach ($array[$data['id']]['fields'] as $key => $item) {
                foreach ($data as $keys => $post) {
                    if (strtolower($keys) === $key) {
                        $result[$i]['name'] = $item;
                        $result[$i]['value'] = $post;
                        $i++;
                        break;
                    }
                }
            }
        } else {
            $title = 'Сообщение с сайта';
            foreach ($data as $keys => $post) {
                $result[$i]['name'] = $keys;
                $result[$i]['value'] = $post;
                $i++;
            }
        }
        $email_reply = (isset($data['EMAIL']) && !empty($data['EMAIL'])) ? ($data['EMAIL']) : $smtp['addreply'];

                $body = "<!DOCTYPE html>"; // создаем тело письма
                $body .= "<html><head>"; // структуру я минимизирую, шаблонов в сети много, либо создайте свой
                $body .= "<meta charset='UTF-8' />";
                $body .= "<title>" . $title . "</title>";
                $body .= "</head><body>";
                $body .= "<table><tr><td>";
                $body .= "<table style='width:600px; border-spacing: 10px; border: 1px solid silver; padding: 10px; font-size:20px;'><tr><td>";
                $body .= "<tr><td ><h3 style='text-align:center; border-bottom: 1px solid silver; color:#82b3f9;'>" . $title . "</h3></td></tr>";
                foreach ($result as $value) {
                    $body .= "<tr><td><strong>" . ucfirst($value['name']) . ":</strong> " . nl2br($value['value']) . "</td></tr>";
                }
                $body .= "<tr><td></td></tr>";
                $body .= "<tr style='cellpadding: 10px;'><td style='text-align:center; border-top: 1px solid silver;'><em>All rights reserved | Copyright &copy; Atlas&Comp " . date("d-m-Y") . "</em></td></tr>";
                $body .= "</table></td></tr></table>";
                $body .= "</body></html>";
    }
    $headers = array(
        'content-type: text/html; charset=utf-8',
        'Reply-To:' . $email_reply
    );

    if (wp_mail($smtp['from-mail'], htmlspecialchars($title), $body, $headers)) {
        wp_send_json([
                        'status' => true,
                        'message' => 'Ожидайте. Мы свяжемся с вами!'
                    ]);

    } else {
        wp_send_json([
                        'status' => false,
                        'message' => 'Ошибка! Попробуйте позже'
                    ]);
    }
}